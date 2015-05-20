<?php 
namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\StatutProjet;
use BackOfficeBundle\Form\StatutProjetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StatutProjetController extends Controller
{
  public function addAction(Request $request)
  {
    $statutprojet = new StatutProjet();

    $form = $this->get('form.factory')->create(new StatutProjetType(), $statutprojet);

    
       $form->handleRequest($request);
        if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($statutprojet);
      $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Statut de projet ajouté avec succès.');

    return $this->redirect($this->generateUrl('ajouter-statut-projet', array()));
    }

    
    return $this->render('BackOfficeBundle:StatutProjet:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  public function listerAction(){
    $listestatutsprojets=$this->getDoctrine()->getRepository('BackOfficeBundle:StatutProjet')->findAll();
    return $this->render('BackOfficeBundle:StatutProjet:list.html.twig',array('listestatutsprojets'=>$listestatutsprojets));
  }
  public function editAction($id,Request $request){
    $em=$this->getDoctrine()->getManager();
    $statutprojet=$em->getRepository('BackOfficeBundle:StatutProjet')->find($id);
    if($statutprojet==null){
      throw $this->createNotFoundException("Le statut n'existe pas.");
    }
    $form = $this->get('form.factory')->create(new StatutProjetType(), $statutprojet);
    $form->handleRequest($request);
    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Statut de projets modifié avec succès.');

      return $this->redirect($this->generateUrl('liste-statut-projet', array()));
    }

    return $this->render('BackOfficeBundle:StatutProjet:edit.html.twig',array('statut'=>$statutprojet,'form' => $form->createView()));
  }
  public function deleteAction($id,Request $request){
    if($id==1 ||$id==2 || $id==3 || $id==4){
      $request->getSession()->getFlashBag()->add('notice_erreur', 'Impossible de supprimer le statut de projets prédéfini');

      return $this->redirect($this->generateUrl('liste-statut-projet', array()));
    }
    try {
      $em=$this->getDoctrine()->getManager();
      $em->remove($this->getDoctrine()
          ->getManager()
          ->getRepository('BackOfficeBundle:StatutProjet')
          ->find($id));
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Statut de projet supprimé.');
      return $this->redirect($this->generateUrl('liste-statut-projet', array()));
    } catch (\Exception $e) {
      $request->getSession()->getFlashBag()->add('notice_erreur', 'Impossible de supprimer le statut de projets');

      return $this->redirect($this->generateUrl('liste-statut-projet', array()));
    }
  }
}
