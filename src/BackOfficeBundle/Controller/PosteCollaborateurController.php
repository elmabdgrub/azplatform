<?php 
namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\PosteCollaborateur;

use BackOfficeBundle\Form\PosteCollaborateurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PosteCollaborateurController extends Controller
{
  public function addAction(Request $request)
  {
    $postecollaborateur = new PosteCollaborateur();

    $form = $this->get('form.factory')->create(new PosteCollaborateurType(), $postecollaborateur);

    
       $form->handleRequest($request);
        if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();


      $em->persist($postecollaborateur);
      $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Poste collaborateur ajouté avec succès.');

    return $this->redirect($this->generateUrl('ajouter-poste-col', array()));
    }

    
    return $this->render('BackOfficeBundle:PosteCollaborateur:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  public function listerAction(){
    $listeposte=$this->getDoctrine()->getRepository('BackOfficeBundle:PosteCollaborateur')->findAll();
    return $this->render('BackOfficeBundle:PosteCollaborateur:list.html.twig',array('listeposte'=>$listeposte));
  }
  public function editAction($id,Request $request){
  $em=$this->getDoctrine()->getManager();
    $postecollaborateur=$em->getRepository('BackOfficeBundle:PosteCollaborateur')->find($id);
    if($postecollaborateur==null){
      throw $this->createNotFoundException("Le poste n'existe pas.");
    }
    $form = $this->get('form.factory')->create(new PosteCollaborateurType(), $postecollaborateur);
    $form->handleRequest($request);
    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Poste modifié avec succès.');

      return $this->redirect($this->generateUrl('liste-poste-col', array()));
    }

    return $this->render('BackOfficeBundle:PosteCollaborateur:edit.html.twig',array('poste'=>$postecollaborateur,'form' => $form->createView()));
}
  public function deleteAction($id,Request $request){
    try {
    $em=$this->getDoctrine()->getManager();
    $em->remove($this->getDoctrine()
        ->getManager()
        ->getRepository('BackOfficeBundle:PosteCollaborateur')
        ->find($id));
    $em->flush();
    $request->getSession()->getFlashBag()->add('notice', 'Poste supprimé.');
    return $this->redirect($this->generateUrl('liste-poste-col', array()));
    } catch (\Exception $e) {
      $request->getSession()->getFlashBag()->add('notice_erreur', 'Impossible de supprimer le poste');

      return $this->redirect($this->generateUrl('liste-poste-col', array()));
    }
  }
}
