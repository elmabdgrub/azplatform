<?php
/**
 * Created by PhpStorm.
 * User: Grub
 * Date: 13/05/2015
 * Time: 11:14
 */

namespace FrontOfficeBundle\Controller;

use BackOfficeBundle\Entity\FichierTache;
use BackOfficeBundle\Entity\MessageTache;
use BackOfficeBundle\Entity\Notificationfp;
use BackOfficeBundle\Entity\Notificationp;
use BackOfficeBundle\Entity\Projet;
use BackOfficeBundle\Entity\TypeProjet;
use BackOfficeBundle\Entity\Tache;
use BackOfficeBundle\Entity\StatutTache;
use BackOfficeBundle\Entity\StatutTacheRepository;
use BackOfficeBundle\Form\TacheType;
use BackOfficeBundle\Entity\Collaborateur;
use BackOfficeBundle\Entity\TypeCollaborateur;
use BackOfficeBundle\Entity\ProdColl;
use BackOfficeBundle\Entity\MessageProjet;
use BackOfficeBundle\Entity\FichierProjet;
use Symfony\Component\HttpFoundation\Response;

use BackOfficeBundle\Entity\PosteCollaborateur;
use BackOfficeBundle\Form\MessageProjetType;
use BackOfficeBundle\Form\FichierProjetType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BackOfficeBundle\Form\CollaborateurType;

class ProjetController extends Controller {

    public function viewAction($id,Request $request){
        $user = $this->get('security.context')->getToken()->getUser();
        $em=$this->getDoctrine()->getManager();
        $projet=$em->getRepository('BackOfficeBundle:Projet')->find($id);
        if($projet==null){
            throw $this->createNotFoundException("Le projet n'existe pas.");
        }
        $notifications = $em->getRepository('BackOfficeBundle:Notificationfp')->findByFichierprojet($em->getRepository('BackOfficeBundle:FichierProjet')->findByProjet($projet));
        foreach ($notifications as $notif) {
            if ($notif->getCollaborateur() == $user) {
                if ($notif->getNotified() == 0) {
                    $notif->setNotified(1);
                    $em->flush();
                }
            }
        }
        $notifications = $em->getRepository('BackOfficeBundle:Notificationp')->findByMessageprojet($em->getRepository('BackOfficeBundle:MessageProjet')->findByProjet($projet));
        foreach ($notifications as $notif) {
            if ($notif->getCollaborateur() == $user) {
                if ($notif->getNotified() == 0) {
                    $notif->setNotified(1);
                    $em->flush();
                }
            }
        }
        $fichiers=$em->getRepository('BackOfficeBundle:FichierProjet')->findByProjet($projet,array('datefichier' => 'DESC '));
        $taches=$em->getRepository('BackOfficeBundle:Tache')->findByProjet($projet, array('datedebut' => 'DESC '));
        $flag=0;
        foreach($taches as $t){
            $pr=$em->getRepository('BackOfficeBundle:ProdColl')->findByTache($t);
            foreach($pr as $p){
                if($p->getCollaborateur()==$user){
                    $flag=$flag+1;
                }
            }
        }
       if($flag==0){
           throw $this->createNotFoundException("Vous n’êtes pas affecté à une tâche de ce projet");
       }

        $statutaches=$em->getRepository('BackOfficeBundle:StatutTache')->find(2);
        //$tachesencours=$em->getRepository('BackOfficeBundle:Tache')->finByStatutTache($statutaches);
        $repo = $this   ->getDoctrine()
            ->getManager()
            ->getRepository('BackOfficeBundle:Tache');

        $qb = $repo->createQueryBuilder('t');
        $qb->select('COUNT(t)');
        $qb->where('t.statuttache = :valeur');
        $qb->setParameter('valeur', 2);
        $qb->andWhere('t.projet = :valeur2');
        $qb->setParameter('valeur2',$id);

        $tachesencours = $qb->getQuery()->getSingleScalarResult();
        $qb = $repo->createQueryBuilder('t');
        $qb->select('COUNT(t)');
        $qb->where('t.statuttache = :valeur');
        $qb->setParameter('valeur', 3);
        $qb->andWhere('t.projet = :valeur2');
        $qb->setParameter('valeur2',$id);
        $tachestermin = $qb->getQuery()->getSingleScalarResult();
        $qb = $repo->createQueryBuilder('t');
        $qb->select('COUNT(t)');
        $qb->Where('t.projet = :valeur2');
        $qb->setParameter('valeur2',$id);
        $tachestot = $qb->getQuery()->getSingleScalarResult();
        if($tachestot==0){
            $prcentaches=0;
        }else {
            $prcentaches = $tachestermin * 100 / $tachestot;
        }

        $count = $qb->getQuery()->getSingleScalarResult();

        $message=new MessageProjet();
        $form2 = $this->get('form.factory')->create(new MessageProjetType(), $message);
        $form2->handleRequest($request);
        $taches=$em->getRepository('BackOfficeBundle:Tache')->findByProjet($projet);

        $collaborateurs=array();
        for($i=0 ; $i<count($taches); $i++){
            //var_dump($em->getRepository('BackOfficeBundle:ProdColl')->findByTache($taches[$i]));
            $prod=$em->getRepository('BackOfficeBundle:ProdColl')->findByTache($taches[$i]);
            for($j=0;$j<count($prod);$j++){


             array_push($collaborateurs, $prod[$j]->getCollaborateur());



            }

        }
        $collaborateursf=array_unique($collaborateurs, SORT_REGULAR);
        if ($form2->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $message->setDatemessage(new \DateTime());
            $message->setCollaborateur($user);

            $message->setNotified(0);
            $message->setProjet($projet);

            $em->persist($message);
            $em->flush();

            foreach($collaborateursf as $collab){
                if ($collab->getId() != $user->getId()) {
                    $notification = new Notificationp();
                    $notification->setCollaborateur($collab);
                    $notification->setMessageprojet($message);
                    $notification->setNotified(0);
                    $notification->setDatenotif($message->getDatemessage());
                    $notification->setDescription($message->getMessage());
                    $notification->setType(1);
                    $em->persist($notification);
                    $em->flush();
                }
            }
            $notification=new Notificationp();
            $notification->setCollaborateur(null);
            $notification->setMessageprojet($message);
            $notification->setNotified(0);
            $notification->setDatenotif($message->getDatemessage());
            $notification->setDescription($message->getMessage());
            $notification->setType(1);
            $em->persist($notification);
            $em->flush();

            return $this->redirect($this->generateUrl('view-projet', array('id'=>$id)));

        }
        $fichier=new FichierProjet();
        $form3 = $this->get('form.factory')->create(new FichierProjetType(), $fichier);
        $form3->handleRequest($request);
        if ($form3->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();


            $fichier->setNotified(0);
            $fichier->setProjet($projet);

            $em->persist($fichier);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'fichier ajouté avec succès.');
            foreach($collaborateursf as $collab){
                if ($collab->getId() != $user->getId()) {
                    $notification = new Notificationfp();
                    $notification->setCollaborateur($collab);
                    $notification->setFichierprojet($fichier);
                    $notification->setNotified(0);
                    $notification->setDatenotif($fichier->getDatefichier());
                    $notification->setDescription($user->getNom() . " " . $user->getPrenom() . " a envoyé le fichier " . $fichier->getPath());
                    $notification->setType(1);
                    $em->persist($notification);
                    $em->flush();
                }
            }
            $notification = new Notificationfp();
            $notification->setCollaborateur(null);
            $notification->setFichierprojet($fichier);
            $notification->setNotified(0);
            $notification->setDatenotif($fichier->getDatefichier());
            $notification->setDescription($user->getNom() . " " . $user->getPrenom() . " a envoyé le fichier " . $fichier->getPath());
            $notification->setType(1);
            $em->persist($notification);
            $em->flush();

            return $this->redirect($this->generateUrl('view-projet', array('id'=>$id)));

        }


        return $this->render('FrontOfficeBundle:Projet:view.html.twig',array('collaborateurs'=>$collaborateursf,'projet'=>$projet,'taches'=>$taches,'form3' => $form3->createView(),'form2' => $form2->createView(),'prcentaches'=>$prcentaches,'tachestot'=>$tachestot,'tachesencours'=>$tachesencours,'tachestermin'=>$tachestermin,'fichiers'=>$fichiers));

    }
    public function messagesAction($id){
        $user = $this->get('security.context')->getToken()->getUser();
        $em=$this->getDoctrine()->getManager();
        $projet=$em->getRepository('BackOfficeBundle:Projet')->find($id);

        $messages=$em->getRepository('BackOfficeBundle:MessageProjet')->findByProjet($projet,array('datemessage' => 'DESC '));
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