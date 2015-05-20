<?php 
namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Client;

use BackOfficeBundle\Form\ClientType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends Controller
{
  public function addAction(Request $request)
  {
    $client = new Client();

    $form = $this->get('form.factory')->create(new ClientType(), $client);

    
       $form->handleRequest($request);
        if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($client);
      $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Client ajouté avec succès.');

    return $this->redirect($this->generateUrl('liste-client', array()));
    }

    
    return $this->render('BackOfficeBundle:Client:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  public function listerAction (){
    $listclient=$this->getDoctrine()
        ->getManager()
        ->getRepository('BackOfficeBundle:Client')
        ->findAll();
    return $this->render('BackOfficeBundle:Client:list.html.twig',array(
        'listclient'=>$listclient
    ));
  }
    public function editAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();
        $client=$em->getRepository('BackOfficeBundle:Client')->find($id);
        if($client==null){
            throw $this->createNotFoundException("Le client n'existe pas.");
        }
        $form = $this->get('form.factory')->create(new ClientType(), $client);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Client modifié avec succès.');

            return $this->redirect($this->generateUrl('liste-client', array()));
        }

        return $this->render('BackOfficeBundle:Client:edit.html.twig',array('client'=>$client,'form' => $form->createView()));
    }
    public function deleteAction ($id,Request $request){
        try {
        $em=$this->getDoctrine()->getManager();
        $em->remove($this->getDoctrine()
            ->getManager()
            ->getRepository('BackOfficeBundle:Client')
            ->find($id));
        $em->flush();
        $request->getSession()->getFlashBag()->add('notice', 'Client supprimé.');
        return $this->redirect($this->generateUrl('liste-client', array()));
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('notice_erreur', 'Impossible de supprimer le client');

            return $this->redirect($this->generateUrl('liste-client', array()));
        }
    }
}
