<?php
/**
 * Created by PhpStorm.
 * User: Grub
 * Date: 06/05/2015
 * Time: 12:34
 */

namespace FrontOfficeBundle\Controller;


use BackOfficeBundle\Entity\FichierTache;
use BackOfficeBundle\Entity\MessageTache;
use BackOfficeBundle\Entity\Notificationft;
use BackOfficeBundle\Entity\Notificationt;
use BackOfficeBundle\Entity\Projet;
use BackOfficeBundle\Entity\TypeProjet;
use BackOfficeBundle\Entity\Tache;
use BackOfficeBundle\Entity\StatutTache;
use BackOfficeBundle\Entity\StatutTacheRepository;
use BackOfficeBundle\Form\TacheType;
use BackOfficeBundle\Entity\Collaborateur;
use BackOfficeBundle\Entity\TypeCollaborateur;
use BackOfficeBundle\Entity\ProdColl;
use Symfony\Component\HttpFoundation\Response;

use BackOfficeBundle\Entity\PosteCollaborateur;
use BackOfficeBundle\Form\MessageTacheType;
use BackOfficeBundle\Form\FichierTacheType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BackOfficeBundle\Form\CollaborateurType;


class TacheController extends Controller
{
public function viewAction($id,Request $request){
    $user = $this->get('security.context')->getToken()->getUser();
    $em=$this->getDoctrine()->getManager();
    $tache=$em->getRepository('BackOfficeBundle:Tache')->find($id);
    $p=$em->getRepository('BackOfficeBundle:ProdColl')->findBy(array('tache'=>$tache,'collaborateur'=>$user));
    if($p==null){
        throw $this->createNotFoundException("La tâche n'existe pas.");
    }else {

        foreach ($p as $pr) {
            if ($pr->getTache() == $tache) {
                if ($pr->getNotified() == null) {
                    $pr->setNotified(0);
                    $em->flush();
                }
            }
        }
        $notifications = $em->getRepository('BackOfficeBundle:Notificationft')->findByFichiertache($em->getRepository('BackOfficeBundle:FichierTache')->findByTache($tache));
        foreach ($notifications as $notif) {
            if ($notif->getCollaborateur() == $user) {
                if ($notif->getNotified() == 0) {
                    $notif->setNotified(1);
                    $em->flush();
                }
            }
        }
        $notifications = $em->getRepository('BackOfficeBundle:Notificationt')->findByMessagetache($em->getRepository('BackOfficeBundle:MessageTache')->findByTache($tache));
        foreach ($notifications as $notif) {
            if ($notif->getCollaborateur() == $user) {
                if ($notif->getNotified() == 0) {
                    $notif->setNotified(1);
                    $em->flush();
                }
            }
        }
        $prod = $em->getRepository('BackOfficeBundle:ProdColl')->findByTache($tache, array('dateAffectation' => 'DESC '));
        $collaborateurs = array();
        for ($j = 0; $j < count($prod); $j++) {


            array_push($collaborateurs, $prod[$j]->getCollaborateur());


        }


        $messages = $em->getRepository('BackOfficeBundle:MessageTache')->findByTache($tache, array('datemessage' => 'DESC '));
        $fichiers = $em->getRepository('BackOfficeBundle:FichierTache')->findByTache($tache, array('datefichier' => 'DESC '));
        $message = new MessageTache();
        $form2 = $this->get('form.factory')->create(new MessageTacheType(), $message);
        $form2->handleRequest($request);
        if ($form2->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $message->setDatemessage(new \DateTime());
            $message->setCollaborateur($user);
            $message->setNotified(0);
            $message->setTache($tache);

            $em->persist($message);
            $em->flush();


            $notification = new Notificationt();
            $notification->setCollaborateur(null);
            $notification->setMessagetache($message);
            $notification->setNotified(0);
            $notification->setDatenotif($message->getDatemessage());
            $notification->setDescription($message->getMessage());
            $notification->setType(2);
            $em->persist($notification);
            $em->flush();
            foreach ($collaborateurs as $collab) {
                if ($collab->getId() != $user->getId()) {
                    $notification = new Notificationt();
                    $notification->setCollaborateur($collab);
                    $notification->setMessagetache($message);
                    $notification->setNotified(0);
                    $notification->setDatenotif($message->getDatemessage());
                    $notification->setDescription($message->getMessage());
                    $notification->setType(2);
                    $em->persist($notification);
                    $em->flush();
                }
            }

            return $this->redirect($this->generateUrl('view-tache', array('id' => $id)));

        }
        $fichier = new FichierTache();
        $form3 = $this->get('form.factory')->create(new FichierTacheType(), $fichier);
        $form3->handleRequest($request);
        if ($form3->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();

            $fichier->setCollaborateur($user);
            $fichier->setNotified(0);
            $fichier->setTache($tache);

            $em->persist($fichier);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'fichier ajouté avec succès.');

            $notification = new Notificationft();
            $notification->setCollaborateur(null);
            $notification->setFichiertache($fichier);
            $notification->setNotified(0);
            $notification->setDatenotif($fichier->getDatefichier());
            $notification->setDescription($user->getNom() . " " . $user->getPrenom() . " a envoyé un fichier concernant la tâche " . $tache->getTitre());
            $notification->setType(2);
            $em->persist($notification);
            $em->flush();
            foreach ($collaborateurs as $collab) {
                if ($collab->getId() != $user->getId()) {
                    $notification = new Notificationft();
                    $notification->setCollaborateur($collab);
                    $notification->setFichiertache($fichier);
                    $notification->setNotified(0);
                    $notification->setDatenotif($fichier->getDatefichier());
                    $notification->setDescription($user->getNom() . " " . $user->getPrenom() . " a envoyé un fichier concernant la tâche " . $tache->getTitre());
                    $notification->setType(2);
                    $em->persist($notification);
                    $em->flush();
                }
            }
            return $this->redirect($this->generateUrl('detail-tache', array('id' => $id)));

        }
        $listecollaborateur = $this->getDoctrine()->getRepository('BackOfficeBundle:Collaborateur')->findAll();
        if ($tache == null) {
            throw $this->createNotFoundException("La tâche n'existe pas.");
        }
        return $this->render('FrontOfficeBundle:Tache:view.html.twig', array('tache' => $tache, 'form3' => $form3->createView(), 'form2' => $form2->createView(), 'listecollaborateur' => $listecollaborateur, 'prods' => $prod, 'messages' => $messages, 'fichiers' => $fichiers));
    }
}


public function messagesAction($id){
        $user = $this->get('security.context')->getToken()->getUser();
        $em=$this->getDoctrine()->getManager();
        $tache=$em->getRepository('BackOfficeBundle:Tache')->find($id);

        $messages=$em->getRepository('BackOfficeBundle:MessageTache')->findByTache($tache,array('datemessage' => 'DESC '));
        $array_messages=array();
        $array_messages["id"]=array(); $array_messages["nom"]=array(); $array_messages["prenom"]=array();$array_messages["date"]=array();$array_messages["message"]=array(); $array_messages["photo"]=array();
        for($i=0 ; $i<count($messages); $i++)
        {
            array_push($array_messages["id"], $messages[$i]->getId());

            array_push($array_messages["date"], $messages[$i]->getDatemessage()->format('d-m-Y H:i:s'));
            if($messages[$i]->getCollaborateur()==$user){
                array_push($array_messages["nom"],"Vous");
                array_push($array_messages["prenom"], "");
                $img=$messages[$i]->getCollaborateur()->getPath();
                array_push($array_messages["photo"], "avatars/".$img);
            }
            elseif($messages[$i]->getCollaborateur()==null){
                array_push($array_messages["nom"],"Administrateur");
                array_push($array_messages["prenom"], "");
                $img="{{ asset('img/avatar.jpg') }}";
                array_push($array_messages["photo"],$img);
            }else{
                array_push($array_messages["nom"], $messages[$i]->getCollaborateur()->getNom());
                array_push($array_messages["prenom"], $messages[$i]->getCollaborateur()->getPrenom());
                $img=$messages[$i]->getCollaborateur()->getPath();
                array_push($array_messages["photo"], "avatars/".$img);
            }

            array_push($array_messages["message"], $messages[$i]->getMessage());

        }
        $json = json_encode(array(
            'messages' => $array_messages,

        ));
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);

        return $response;
    }
}