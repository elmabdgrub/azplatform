<?php 
namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\TypeDepense;
use BackOfficeBundle\Form\TypeDepenseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TypeDepenseController extends Controller
{
  public function addAction(Request $request)
  {
    $typedepense = new TypeDepense();

    $form = $this->get('form.factory')->create(new TypeDepenseType(), $typedepense);

    
       $form->handleRequest($request);
        if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($typedepense);
      $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Type de dépenses ajouté avec succès.');

    return $this->redirect($this->generateUrl('ajouter-type-depense', array()));
    }

    
    return $this->render('BackOfficeBundle:TypeDepense:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  public function listerAction(){
    $listetypesdepenses=$this->getDoctrine()->getRepository('BackOfficeBundle:TypeDepense')->findAll();
    return $this->render('BackOfficeBundle:TypeDepense:list.html.twig',array('listetypesdepenses'=>$listetypesdepenses));
  }
  public function editAction($id,Request $request){
    $em=$this->getDoctrine()->getManager();
    $typedepense=$em->getRepository('BackOfficeBundle:TypeDepense')->find($id);
    if($typedepense==null){
      throw $this->createNotFoundException("Le type n'existe pas.");
    }
    $form = $this->get('form.factory')->create(new TypeDepenseType(), $typedepense);
    $form->handleRequest($request);
    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Type de depenses modifié avec succès.');

      return $this->redirect($this->generateUrl('liste-type-depense', array()));
    }

    return $this->render('BackOfficeBundle:TypeDepense:edit.html.twig',array('type'=>$typedepense,'form' => $form->createView()));
  }
  public function deleteAction($id,Request $request){
    try {
      $em=$this->getDoctrine()->getManager();
      $em->remove($this->getDoctrine()
          ->getManager()
          ->getRepository('BackOfficeBundle:TypeDepense')
          ->find($id));
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Type de depense supprimé.');
      return $this->redirect($this->generateUrl('liste-type-depense', array()));
    } catch (\Exception $e) {
      $request->getSession()->getFlashBag()->add('notice_erreur', 'Impossible de supprimer le type de depenses');

      return $this->redirect($this->generateUrl('liste-type-depense', array()));
    }
  }
}

