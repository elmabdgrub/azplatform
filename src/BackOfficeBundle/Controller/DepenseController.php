<?php 
namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Projet;
use BackOfficeBundle\Entity\Depense;
use BackOfficeBundle\Entity\Tache;
use BackOfficeBundle\Entity\StatutTache;
use BackOfficeBundle\Entity\StatutTacheRepository;
use BackOfficeBundle\Form\DepenseType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DepenseController extends Controller
{
  public function addAction(Request $request,$id)
  {

      $depense = new Depense();
      $projet = new Projet();

      $form = $this->get('form.factory')->create(new DepenseType(), $depense);


      $form->handleRequest($request);
      if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $projet = $em->getRepository('BackOfficeBundle:Projet')
              ->find($id);

          $depense->setProjet($projet);
          $depense->setDatedepense(new \DateTime());


          $em->persist($depense);
          $em->flush();
          $request->getSession()->getFlashBag()->add('notice', 'dépense ajouté avec succès.');

          return $this->redirect($this->generateUrl('view-projet', array('id'=>$id)));
      }


      return $this->render(
          'BackOfficeBundle:Depense:add.html.twig',
          array(
              'form' => $form->createView(),
          )
      );
  }
    public function editAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();
        $depense=$em->getRepository('BackOfficeBundle:Depense')->find($id);
        $projet = $em->getRepository('BackOfficeBundle:Projet')
            ->find($depense->getProjet()->getId());
        if($depense==null){
            throw $this->createNotFoundException("L'élément  n'existe pas.");
        }
        $form = $this->get('form.factory')->create(new DepenseType(), $depense);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Dépense modifié avec succès.');

            return $this->redirect($this->generateUrl('view-projet', array('id'=>$projet->getId())));
        }

        return $this->render('BackOfficeBundle:Depense:edit.html.twig',array('depense'=>$depense,'form' => $form->createView()));
    }
    public function deleteAction($id,Request $request){
        try {
            $em=$this->getDoctrine()->getManager();
            $depense=$em->getRepository('BackOfficeBundle:Depense')->find($id);
            if($depense==null){
                throw $this->createNotFoundException("L'élément  n'existe pas.");
            }
            $projet = $em->getRepository('BackOfficeBundle:Projet')
                ->find($depense->getProjet()->getId());
            $em->remove($this->getDoctrine()
                ->getManager()
                ->getRepository('BackOfficeBundle:Depense')
                ->find($id));
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Dépense supprimé.');
            return $this->redirect($this->generateUrl('view-projet', array('id'=>$projet->getId())));
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('notice_erreur', 'Impossible de supprimer l élément');

            return $this->redirect($this->generateUrl('view-projet', array('id'=>$projet->getId())));
        }
    }

}
