<?php 
namespace BackOfficeBundle\Controller;
use BackOfficeBundle\Form\AdministrateurType;
use Ob\HighchartsBundle\Highcharts\Highchart;
use BackOfficeBundle\Entity\Collaborateur;
use BackOfficeBundle\Entity\Administrateur;

use BackOfficeBundle\Entity\TypeCollaborateur;
use BackOfficeBundle\Entity\TagsPoste;

use BackOfficeBundle\Entity\PosteCollaborateur;
use BackOfficeBundle\Entity\ProdColl;
use BackOfficeBundle\Entity\Tache;

use BackOfficeBundle\Form\CollaborateurType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CollaborateurController extends Controller
{
  public function addAction(Request $request)
  {

    $collaborateur = new Collaborateur();

    $form = $this->get('form.factory')->create(new CollaborateurType(), $collaborateur);


    $form->handleRequest($request);
    if ($form->isValid()) {

        $options = [
            'cost' => 12,
        ];
      $collaborateur->setPassword(password_hash($collaborateur->getNom() . "AZP2015", PASSWORD_BCRYPT, $options));
        if($collaborateur->getPath()==null){
            $collaborateur->setPath('avatar.png');
        }

      $collaborateur->setActive(0);
      try {
        $em = $this->getDoctrine()->getManager();

        $em->persist($collaborateur);
        $em->flush();
          $test = $form["tags"]->getData();
          $tags=explode(",", $test);
          foreach($tags as $tag){
              $tagposte=new TagsPoste();
              $tagposte->setTag(strtolower($tag));
              $tagposte->setCollaborateur($collaborateur);
              $em->persist($tagposte);
              $em->flush();
          }
        $request->getSession()->getFlashBag()->add('notice', 'collaborateur ajouté avec succès.');
      } catch (\Exception $e) {
        $request->getSession()->getFlashBag()->add('notice_erreur', "Impossible d'ajouter le collaborateur");
      }
        return $this->redirect($this->generateUrl('ajouter-collaborateur', array()));
      }


      return $this->render(
          'BackOfficeBundle:Collaborateur:add.html.twig',
          array(
              'form' => $form->createView(),
          )
      );
    }
public function resetAction($id,Request $request){
    $em=$this->getDoctrine()->getManager();

    $collaborateur=$em->getRepository('BackOfficeBundle:Collaborateur')->find($id);
    $options = [
        'cost' => 12,
    ];
    $collaborateur->setPassword(password_hash($collaborateur->getNom() . "AZP2015", PASSWORD_BCRYPT, $options));
    $em->flush();
    $request->getSession()->getFlashBag()->add('notice', 'Mot de passe réinitialisé avec succès.');

return $this->redirect($this->generateUrl('view-collaborateur', array('id'=>$collaborateur->getId())));

}
  public function listerAction(){
    $listecollaborateur=$this->getDoctrine()->getRepository('BackOfficeBundle:Collaborateur')->findAll();
    return $this->render('BackOfficeBundle:Collaborateur:list.html.twig',array('listecollaborateur'=>$listecollaborateur));
  }
  public function viewAction($id){
       $em=$this->getDoctrine()->getManager();
    $collaborateur=$em->getRepository('BackOfficeBundle:Collaborateur')->find($id);

    $prods=$em->getRepository('BackOfficeBundle:ProdColl')->findByCollaborateur($collaborateur);

    $ttaches= array();

    foreach($prods as $prod){
      $tache=$em->getRepository('BackOfficeBundle:Tache')->find($prod->getTache()->getId());

      array_push($ttaches,$tache);
    }

    $taches= array();
    $array_prod=array();
    $array_prod['taches']=array();
    $array_prod['prod']=array();
    foreach($ttaches as $tache){
      if($tache->getStatutTache()->getId()==3){
        array_push($taches,$tache);
      }
    }
    $prod=array();

    foreach($taches as $tache){
      array_push($prod,$em->getRepository('BackOfficeBundle:ProdColl')->findBy(array('collaborateur'=>$collaborateur,'tache'=>$tache)));
      array_push($array_prod['taches'],$tache);
      array_push($array_prod['prod'],$em->getRepository('BackOfficeBundle:ProdColl')->findBy(array('collaborateur'=>$collaborateur,'tache'=>$tache)));
    }
      function nbJours($debut, $fin)
      {
          $nbSecondes= 60*60*24;

          $debut_ts = strtotime($debut);
          $fin_ts = strtotime($fin);
          $diff = $fin_ts - $debut_ts;
          return round($diff / $nbSecondes);
      }
     function datachart($tab)
     {
         $data = array();
         $data['previs'] = array();
         $data['reel'] = array();


         for ($i = 0; $i < count($tab['taches']); $i++) {

             array_push(
                 $data['previs'],
                 nbJours(
                     $tab['taches'][$i]->getDatedebut()->format('Y-m-d'),
                     $tab['taches'][$i]->getDatefinprevis()->format('Y-m-d')
                 )
             );
             array_push(
                 $data['reel'],
                 nbJours(

                     $tab['prod'][$i][0]->getDateAffectation()->format('Y-m-d'),
                     $tab['taches'][$i]->getDatefinreel()->format('Y-m-d')
                 )
             );
         }

         return $data;
     }
      $tachestitre=array();
      foreach($taches as $t){
          array_push($tachestitre,$t->getTitre());
      };
      //var_dump($tachestitre);
    //var_dump($array_prod);
    // var_dump($array_prod['prod'][1]);
   //echo $array_prod['prod'][1][0]->getTache()->getTitre();
    //echo $array_prod['taches'][0]->getTitre();
    //echo  $array_prod['taches'][0]->getDatefinreel()->format('Y-m-d');echo "sdsds".$array_prod['prod'][0][0]->getDateAffectation()->format('Y-m-d');


   //echo var_dump( datachart($array_prod));
    $productivite = array(
        array(
            "name" => "nombre de jours prévisionnel",
            "data" => datachart($array_prod)['previs']
        ),
        array(
            "name" => "nombre de jours réel",
            "data" => datachart($array_prod)['reel']
        ),

    );

    $dates = $tachestitre;

    $ob = new Highchart();
    // ID de l'élement de DOM que vous utilisez comme conteneur
    $ob->chart->renderTo('linechart');
    $ob->title->text('Productivité du collaborateur : kda salim');

    $ob->yAxis->title(array('text' => "Nombre de jours )"));

    $ob->xAxis->title(array('text'  => "Tâches affectées"));
    $ob->xAxis->categories($dates);

    $ob->series($productivite);

    return $this->render('BackOfficeBundle:Collaborateur:view.html.twig',array('linechart' => $ob,'arprod'=>$array_prod,'collaborateur'=>$collaborateur,'ttaches'=>$ttaches));

  }

  public function editAction($id,Request $request){
    $em=$this->getDoctrine()->getManager();
    $collaborateur=$em->getRepository('BackOfficeBundle:Collaborateur')->find($id);
    if($collaborateur==null){
      throw $this->createNotFoundException("Le Collaborateur  n'existe pas.");
    }
      $tagsliste=$em->getRepository('BackOfficeBundle:TagsPoste')->findByCollaborateur($collaborateur);
    $form = $this->get('form.factory')->create(new CollaborateurType(), $collaborateur);
    $form->handleRequest($request);
    if ($form->isValid()) {

      $em = $this->getDoctrine()->getManager();



        $em->flush();
        $test = $form["tags"]->getData();
        $tags=explode(",", $test);
        foreach($tags as $tag){
            $tagposte=new TagsPoste();
            $tagposte->setTag(strtolower($tag));
            $tagposte->setCollaborateur($collaborateur);
            $em->persist($tagposte);
            $em->flush();
        }
      $request->getSession()->getFlashBag()->add('notice', 'Collaborateur modifié avec succès.');

      return $this->redirect($this->generateUrl('liste-collaborateur', array()));
    }

    return $this->render('BackOfficeBundle:Collaborateur:edit.html.twig',array('collaborateur'=>$collaborateur,'form' => $form->createView(),'tagsliste'=>$tagsliste));
  }
  public function deleteAction($id,Request $request){
    try {
      $em=$this->getDoctrine()->getManager();
      $em->remove($this->getDoctrine()
          ->getManager()
          ->getRepository('BackOfficeBundle:Collaborateur')
          ->find($id));
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Collaborateur supprimé.');
      return $this->redirect($this->generateUrl('liste-collaborateur', array()));
    } catch (\Exception $e) {
      $request->getSession()->getFlashBag()->add('notice_erreur', 'Impossible de supprimer le collaborateur');

      return $this->redirect($this->generateUrl('liste-collaborateur', array()));
    }
  }

    public function profilAction(Request $request){
        $admin = $this->get('security.context')->getToken()->getUser();
        $em=$this->getDoctrine()->getManager();
        $administrateur=$em->getRepository('BackOfficeBundle:Administrateur')->find($admin->getId());

        $hash = $administrateur->getPassword();





        $form = $this->get('form.factory')->create(new AdministrateurType(), $administrateur);
        $form->handleRequest($request);
        if ($form->isValid()) {

            if($administrateur->getPassword()==$hash){
                $em = $this->getDoctrine()->getManager();

                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Profil modifié avec succès.');

                return $this->redirect($this->generateUrl('back_office_homepage', array()));
            }else {
                if ($form["verif"]->getData() == $form["password"]->getData()) {
                    $options = [
                        'cost' => 12,
                    ];
                    $administrateur->setPassword(password_hash($administrateur->getPassword(), PASSWORD_BCRYPT, $options));

                    $em = $this->getDoctrine()->getManager();

                    $em->flush();
                    $request->getSession()->getFlashBag()->add('notice', 'Profil modifié avec succès.');

                    return $this->redirect($this->generateUrl('back_office_homepage', array()));
                }
                else{
                    $request->getSession()->getFlashBag()->add('notice_erreur', 'les mots de passe saisis sont différents. veuillez réessayer.');
                }
                return $this->redirect($this->generateUrl('admin-profil', array()));
            }

        }

        return $this->render('BackOfficeBundle:Accueil:profil.html.twig',array('administrateur'=>$administrateur,'form' => $form->createView()));
    }
}
