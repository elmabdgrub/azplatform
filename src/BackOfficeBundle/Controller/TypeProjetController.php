<?php 
namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\TypeProjet;
use BackOfficeBundle\Form\TypeProjetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TypeProjetController extends Controller
{
  public function addAction(Request $request)
  {
    $typeprojet = new TypeProjet();

    $form = $this->get('form.factory')->create(new TypeProjetType(), $typeprojet);

    
       $form->handleRequest($request);
        if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($typeprojet);
      $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Type de projet ajouté avec succès.');

    return $this->redirect($this->generateUrl('liste-type-projet', array()));
    }

    
    return $this->render('BackOfficeBundle:TypeProjet:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  public function listerAction(){
    $listetypesprojets=$this->getDoctrine()->getRepository('BackOfficeBundle:TypeProjet')->findAll();
    return $this->render('BackOfficeBundle:TypeProjet:list.html.twig',array('listetypesprojets'=>$listetypesprojets));
  }
  public function editAction($id,Request $request){
    $em=$this->getDoctrine()->getManager();
    $typeprojet=$em->getRepository('BackOfficeBundle:TypeProjet')->find($id);
    if($typeprojet==null){
      throw $this->createNotFoundException("Le type n'existe pas.");
    }
    $form = $this->get('form.factory')->create(new TypeProjetType(), $typeprojet);
    $form->handleRequest($request);
    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Type de projets modifié avec succès.');

      return $this->redirect($this->generateUrl('liste-type-projet', array()));
    }

    return $this->render('BackOfficeBundle:TypeProjet:edit.html.twig',array('type'=>$typeprojet,'form' => $form->createView()));
  }
  public function deleteAction($id,Request $request){
    try {
      $em=$this->getDoctrine()->getManager();
      $em->remove($this->getDoctrine()
          ->getManager()
          ->getRepository('BackOfficeBundle:TypeProjet')
          ->find($id));
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Type de projet supprimé.');
      return $this->redirect($this->generateUrl('liste-type-projet', array()));
    } catch (\Exception $e) {
      $request->getSession()->getFlashBag()->add('notice_erreur', 'Impossible de supprimer le type de projets');

      return $this->redirect($this->generateUrl('liste-type-projet', array()));
    }
  }
}
