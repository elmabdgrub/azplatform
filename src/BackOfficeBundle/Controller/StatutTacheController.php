<?php 
namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\StatutTache;
use BackOfficeBundle\Form\StatutTacheType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StatutTacheController extends Controller
{
  public function addAction(Request $request)
  {
    $statuttache = new StatutTache();

    $form = $this->get('form.factory')->create(new StatutTacheType(), $statuttache);

    
       $form->handleRequest($request);
        if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($statuttache);
      $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Statut de tâche ajouté avec succès.');

    return $this->redirect($this->generateUrl('ajouter-statut-tache', array()));
    }

    
    return $this->render('BackOfficeBundle:StatutTache:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  public function listerAction(){
    $listestatutstaches=$this->getDoctrine()->getRepository('BackOfficeBundle:StatutTache')->findAll();
    return $this->render('BackOfficeBundle:StatutTache:list.html.twig',array('listestatutstaches'=>$listestatutstaches));
  }
  public function editAction($id,Request $request){
    $em=$this->getDoctrine()->getManager();
    $statuttache=$em->getRepository('BackOfficeBundle:StatutTache')->find($id);
    if($statuttache==null){
      throw $this->createNotFoundException("Le statut n'existe pas.");
    }
    $form = $this->get('form.factory')->create(new StatutTacheType(), $statuttache);
    $form->handleRequest($request);
    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Statut de taches modifié avec succès.');

      return $this->redirect($this->generateUrl('liste-statut-tache', array()));
    }

    return $this->render('BackOfficeBundle:StatutTache:edit.html.twig',array('statut'=>$statuttache,'form' => $form->createView()));
  }
  public function deleteAction($id,Request $request){
    if($id==1 ||$id==2 || $id==3 ){
      $request->getSession()->getFlashBag()->add('notice_erreur', 'Impossible de supprimer le statut de tâche prédéfini');

      return $this->redirect($this->generateUrl('liste-statut-tache', array()));
    }
    try {
      $em=$this->getDoctrine()->getManager();
      $em->remove($this->getDoctrine()
          ->getManager()
          ->getRepository('BackOfficeBundle:StatutTache')
          ->find($id));
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Statut de tache supprimé.');
      return $this->redirect($this->generateUrl('liste-statut-tache', array()));
    } catch (\Exception $e) {
      $request->getSession()->getFlashBag()->add('notice_erreur', 'Impossible de supprimer le statut de taches');

      return $this->redirect($this->generateUrl('liste-statut-tache', array()));
    }
  }
}
