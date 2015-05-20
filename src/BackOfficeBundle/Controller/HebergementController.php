<?php 
namespace BackOfficeBundle\Controller;


use BackOfficeBundle\Entity\Client;
use BackOfficeBundle\Entity\Hebergement;

use BackOfficeBundle\Form\HebergementType;
use BackOfficeBundle\Form\HebergementeditType;

use Symfony\Component\HttpFoundation\Response;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HebergementController extends Controller
{
  public function addAction(Request $request)
  {
    $hebergement=new Hebergement();



    $form = $this->get('form.factory')->create(new HebergementType(), $hebergement);

      
       $form->handleRequest($request);
        if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $em->persist($hebergement);
      $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Hébergement ajouté avec succès.');

    return $this->redirect($this->generateUrl('ajouter-hebergement', array()));
    }

    
    return $this->render('BackOfficeBundle:Hebergement:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
    public function listerAction(){
        $listeheb=$this->getDoctrine()->getRepository('BackOfficeBundle:Hebergement')->findAll();
        return $this->render('BackOfficeBundle:Hebergement:list.html.twig',array('listhebergement'=>$listeheb));
    }

    public function editAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();
        $hebergement=$em->getRepository('BackOfficeBundle:Hebergement')->find($id);

        if($hebergement==null){
            throw $this->createNotFoundException("L'hébergement  n'existe pas.");
        }
        $form = $this->get('form.factory')->create(new HebergementeditType(), $hebergement);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Hébergement modifié avec succès.');

            return $this->redirect($this->generateUrl('liste-hebergement', array()));
        }

        return $this->render('BackOfficeBundle:Hebergement:edit.html.twig',array('hebergement'=>$hebergement,'form' => $form->createView()));
    }
    public function deleteAction($id,Request $request){
        try {
            $em=$this->getDoctrine()->getManager();
            $em->remove($this->getDoctrine()
                ->getManager()
                ->getRepository('BackOfficeBundle:Hebergement')
                ->find($id));
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Hébergement supprimé.');
            return $this->redirect($this->generateUrl('liste-hebergement', array()));
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('notice_erreur', "Impossible de supprimer l'hébergement");

            return $this->redirect($this->generateUrl('liste-hebergement', array()));
        }
    }
public function viewAction($id){
    $em=$this->getDoctrine()->getManager();
    $hebergement=$em->getRepository('BackOfficeBundle:Hebergement')->find($id);
    if($hebergement->getNotified()==null){
        $hebergement->setNotified(0);
        $em->flush();
    }
    return $this->render('BackOfficeBundle:Hebergement:view.html.twig',array('hebergement'=>$hebergement));
}
    public function notifierAction($id,$client,Request $request){
        $em=$this->getDoctrine()->getManager();
        $hebergement=$em->getRepository('BackOfficeBundle:Hebergement')->find($id);
        function nbJours($debut, $fin)
        {
            $nbSecondes= 60*60*24;

            $debut_ts = strtotime($debut);
            $fin_ts = strtotime($fin);
            $diff = $fin_ts - $debut_ts;
            return round($diff / $nbSecondes);
        };
        $today=new \DateTime();

        $client=$em->getRepository('BackOfficeBundle:Client')->find($client);
        if (nbJours($today->format('Y-m-d'), $hebergement->getDateexpiration()->format('Y-m-d')) < 15){
            $message = \Swift_Message::newInstance()
                ->setSubject("Expiration d'hébergement")
                ->setFrom('info@azcreator.com')
                ->setTo($client->getEmail())
                ->setBody($this->renderView('BackOfficeBundle:Hebergement:mailalert.html.twig', array('hebergement'=>$hebergement,'client'=>$client)))
            ;
        }else{
        $message = \Swift_Message::newInstance()
            ->setSubject("Expiration d'hébergement")
            ->setFrom('info@azcreator.com')
            ->setTo($client->getEmail())
            ->setBody($this->renderView('BackOfficeBundle:Hebergement:mail.html.twig', array('hebergement'=>$hebergement,'client'=>$client)))
        ;}
        if($this->get('mailer')->send($message)){

            $request->getSession()->getFlashBag()->add('notice', 'email de notification envoyé avec succès.');
        }else{
            $request->getSession()->getFlashBag()->add('notice_erreur', "échec d'envoi de l'email .");
        }
       //$this->get('mailer')->send($message);
        //$request->getSession()->getFlashBag()->add('notice', 'email de notification envoyé avec succès.');
        return $this->redirect($this->generateUrl('liste-hebergement', array()));
    }
}
