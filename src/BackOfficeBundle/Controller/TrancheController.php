<?php 
namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Projet;
use BackOfficeBundle\Entity\Tranche;
use BackOfficeBundle\Entity\Tache;
use BackOfficeBundle\Entity\StatutTache;
use BackOfficeBundle\Entity\StatutTacheRepository;
use BackOfficeBundle\Form\TrancheType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TrancheController extends Controller
{
  public function addAction(Request $request,$id)
  {

      $tranche = new Tranche();
      $projet = new Projet();

      $form = $this->get('form.factory')->create(new TrancheType(), $tranche);


      $form->handleRequest($request);
      if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $projet = $em->getRepository('BackOfficeBundle:Projet')
              ->find($id);

          $tranche->setProjet($projet);



          $em->persist($tranche);
          $em->flush();
          $request->getSession()->getFlashBag()->add('notice', 'tranche ajouté avec succès.');

          return $this->redirect($this->generateUrl('view-projet', array('id'=>$id)));
      }


      return $this->render(
          'BackOfficeBundle:Tranche:add.html.twig',
          array(
              'form' => $form->createView(),
          )
      );
  }
    public function editAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();
        $tranche=$em->getRepository('BackOfficeBundle:Tranche')->find($id);
        $projet = $em->getRepository('BackOfficeBundle:Projet')
            ->find($tranche->getProjet()->getId());
        if($tranche==null){
            throw $this->createNotFoundException("L'élément  n'existe pas.");
        }
        $form = $this->get('form.factory')->create(new TrancheType(), $tranche);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Tranche modifié avec succès.');

            return $this->redirect($this->generateUrl('view-projet', array('id'=>$projet->getId())));
        }

        return $this->render('BackOfficeBundle:Tranche:edit.html.twig',array('tranche'=>$tranche,'form' => $form->createView()));
    }
    public function deleteAction($id,Request $request){
        try {
            $em=$this->getDoctrine()->getManager();
            $tranche=$em->getRepository('BackOfficeBundle:Tranche')->find($id);
            if($tranche==null){
                throw $this->createNotFoundException("L'élément  n'existe pas.");
            }
            $projet = $em->getRepository('BackOfficeBundle:Projet')
                ->find($tranche->getProjet()->getId());
            $em->remove($this->getDoctrine()
                ->getManager()
                ->getRepository('BackOfficeBundle:Tranche')
                ->find($id));
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Tranche supprimé.');
            return $this->redirect($this->generateUrl('view-projet', array('id'=>$projet->getId())));
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('notice_erreur', "Impossible de supprimer l'élément");

            return $this->redirect($this->generateUrl('view-projet', array('id'=>$projet->getId())));
        }
    }

}
