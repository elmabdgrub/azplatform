<?php 
namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\FichierTache;
use BackOfficeBundle\Entity\MessageTache;
use BackOfficeBundle\Entity\Notificationft;
use BackOfficeBundle\Entity\Notificationt;
use BackOfficeBundle\Entity\Projet;
use BackOfficeBundle\Entity\TagsProjet;
use BackOfficeBundle\Entity\TagsPoste;
use BackOfficeBundle\Entity\TypeProjet;
use BackOfficeBundle\Entity\Tache;
use BackOfficeBundle\Entity\StatutTache;
use BackOfficeBundle\Entity\StatutTacheRepository;
use BackOfficeBundle\Form\TacheType;
use BackOfficeBundle\Entity\Collaborateur;
use BackOfficeBundle\Entity\TypeCollaborateur;
use BackOfficeBundle\Entity\ProdColl;
use Symfony\Component\HttpFoundation\Response;

use BackOfficeBundle\Entity\PosteCollaborateur;
use BackOfficeBundle\Form\MessageTacheType;
use BackOfficeBundle\Form\FichierTacheType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BackOfficeBundle\Form\CollaborateurType;


class TacheController extends Controller
{
  public function addAction(Request $request,$id)
  {

      $tache = new Tache();
      $projet = new Projet();

      $form = $this->get('form.factory')->create(new TacheType(), $tache);


      $form->handleRequest($request);
      if ($form->isValid()) {
          $today=new \DateTime();
          if ($tache->getDatefinprevis()->format('Y-m-d') < $today->format('Y-m-d')) {
              $request->getSession()->getFlashBag()->add('notice_erreur', ' Vérifier les dates.');
          } else {
              $em = $this->getDoctrine()->getManager();
              $projet = $em->getRepository('BackOfficeBundle:Projet')
                  ->find($id);

              $tache->setProjet($projet);
              $tache->setDatecreation(new \DateTime());

              $tache->setStatuttache($em->getRepository('BackOfficeBundle:StatutTache')->find(1));
              $projet->setStatutprojet($em->getRepository('BackOfficeBundle:StatutProjet')->find(2));
              $em->persist($tache);
              $em->flush();
              $request->getSession()->getFlashBag()->add('notice', 'tâche ajouté avec succès.');

              return $this->redirect($this->generateUrl('view-projet', array('id' => $id)));
          }
      }

      return $this->render(
          'BackOfficeBundle:Tache:add.html.twig',
          array(
              'form' => $form->createView(),
          )
      );
  }
    public function viewAction($id,Request $request){
$em=$this->getDoctrine()->getManager();
        $tache=$em->getRepository('BackOfficeBundle:Tache')->find($id);

        $notifications=$em->getRepository('BackOfficeBundle:Notificationt')->findByMessagetache($em->getRepository('BackOfficeBundle:MessageTache')->findByTache($tache));
        foreach ($notifications as $notif) {
            if($notif->getCollaborateur()==null) {
                if ($notif->getNotified() == 0) {
                    $notif->setNotified(1);
                    $em->flush();
                }
            }
        }
        $notifications=$em->getRepository('BackOfficeBundle:Notificationft')->findByFichiertache($em->getRepository('BackOfficeBundle:FichierTache')->findByTache($tache));
        foreach ($notifications as $notif) {
            if($notif->getCollaborateur()==null) {
                if ($notif->getNotified() == 0) {
                    $notif->setNotified(1);
                    $em->flush();
                }
            }
        }
        $prod=$em->getRepository('BackOfficeBundle:ProdColl')->findByTache($tache, array('dateAffectation' => 'DESC '));
        $collaborateurs=array();
        for($j=0;$j<count($prod);$j++){


            array_push($collaborateurs,$prod[$j]->getCollaborateur());



        }


        $messages=$em->getRepository('BackOfficeBundle:MessageTache')->findByTache($tache,array('datemessage' => 'DESC '));
        $fichiers=$em->getRepository('BackOfficeBundle:FichierTache')->findByTache($tache,array('datefichier' => 'DESC '));
        $message=new MessageTache();
        $form2 = $this->get('form.factory')->create(new MessageTacheType(), $message);
        $form2->handleRequest($request);
        if ($form2->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $message->setDatemessage(new \DateTime());

            $message->setNotified(0);
            $message->setTache($tache);

            $em->persist($message);
            $em->flush();
           

            foreach($collaborateurs as $collab){

                $notification=new Notificationt();
                $notification->setCollaborateur($collab);
                $notification->setMessagetache($message);
                $notification->setNotified(0);
                $notification->setDatenotif($message->getDatemessage());
                $notification->setDescription($message->getMessage());
                $notification->setType(2);
                $em->persist($notification);
                $em->flush();
            }






            return $this->redirect($this->generateUrl('view-tache', array('id'=>$id)));

        }
        $fichier=new FichierTache();
        $form3 = $this->get('form.factory')->create(new FichierTacheType(), $fichier);
        $form3->handleRequest($request);
        if ($form3->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();


            $fichier->setNotified(0);
            $fichier->setTache($tache);

            $em->persist($fichier);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'fichier ajouté avec succès.');

            foreach($collaborateurs as $collab){

                $notification=new Notificationft();
                $notification->setCollaborateur($collab);
                $notification->setFichiertache($fichier);
                $notification->setNotified(0);
                $notification->setDatenotif($fichier->getDatefichier());
                $notification->setDescription("L'administrateur a envoyé un fichier concernant la tâche ".$tache->getTitre());
                $notification->setType(2);
                $em->persist($notification);
                $em->flush();
            }
            return $this->redirect($this->generateUrl('view-tache', array('id'=>$id)));

        }
        $tagsprojet=$em->getRepository('BackOfficeBundle:TagsProjet')->findByProjet($tache->getProjet());

        $listecollaborateur=$this->getDoctrine()->getRepository('BackOfficeBundle:Collaborateur')->findAll();
        $description=explode(" ", $tache->getDescription());
        foreach($listecollaborateur as $collaborateur){
            $tagscoll=$em->getRepository('BackOfficeBundle:TagsPoste')->findByCollaborateur($collaborateur);
            foreach($tagscoll as $tagcoll){
                foreach($description as $mot){
                    if(strpos($tagcoll->getTag(),preg_replace('/\d/', '', $mot )) !== false){

                        $collaborateur->setFav(1);
                        break;
                    }
                }
            }
        }
       // var_dump($listecollaborateur);
        if($tache==null){
            throw $this->createNotFoundException("La tâche n'existe pas.");
        }
        return $this->render('BackOfficeBundle:Tache:view.html.twig',array('tache'=>$tache,'form3' => $form3->createView(),'form2' => $form2->createView(),'listecollaborateur'=>$listecollaborateur,'prods'=>$prod,'messages'=>$messages,'fichiers'=>$fichiers));

    }


    public function messagesAction($id){

        $em=$this->getDoctrine()->getManager();
        $tache=$em->getRepository('BackOfficeBundle:Tache')->find($id);

        $messages=$em->getRepository('BackOfficeBundle:MessageTache')->findByTache($tache,array('datemessage' => 'DESC '));
        $array_messages=array();
        $array_messages["id"]=array(); $array_messages["nom"]=array(); $array_messages["prenom"]=array();$array_messages["date"]=array();$array_messages["message"]=array(); $array_messages["photo"]=array();
        for($i=0 ; $i<count($messages); $i++)
        {
            array_push($array_messages["id"], $messages[$i]->getId());

            array_push($array_messages["date"], $messages[$i]->getDatemessage()->format('d-m-Y H:i:s'));
            if($messages[$i]->getCollaborateur()==null){
                array_push($array_messages["nom"],"Vous");
                array_push($array_messages["prenom"], "");
                $img="{{ asset('img/avatar.jpg') }}";
                array_push($array_messages["photo"],$img);
            }else{
                array_push($array_messages["nom"], $messages[$i]->getCollaborateur()->getNom());
                array_push($array_messages["prenom"], $messages[$i]->getCollaborateur()->getPrenom());
                $img=$messages[$i]->getCollaborateur()->getPath();
                array_push($array_messages["photo"], "avatars/".$img);
            }

            array_push($array_messages["message"], $messages[$i]->getMessage());

        }
        $json = json_encode(array(
            'messages' => $array_messages,

        ));
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);

        return $response;
    }
    public function affectAction($id,$tache,Request $request){
        $em=$this->getDoctrine()->getManager();
        $tache=$em->getRepository('BackOfficeBundle:Tache')->find($tache);
        $collaborateur=$em->getRepository('BackOfficeBundle:Collaborateur')->find($id);
        $test=$em->getRepository('BackOfficeBundle:ProdColl')->findBy(array('collaborateur'=>$collaborateur,'tache'=>$tache));
        if($test!=null){
            $request->getSession()->getFlashBag()->add('notice_erreur', "le collaborateur est déjà affecté à cette tâche");
            return $this->redirect($this->generateUrl('view-tache', array('id' => $tache->getId())));
        }else {
            $productivite = new ProdColl();
            $productivite->setCollaborateur($collaborateur);
            $productivite->setTache($tache);
            $productivite->setDateAffectation(new \DateTime());
            try {
                $em = $this->getDoctrine()->getManager();
                if($tache->getStatuttache()==$em->getRepository('BackOfficeBundle:StatutTache')->find(1)) {
                    $tache->setStatuttache($em->getRepository('BackOfficeBundle:StatutTache')->find(2));
                $tache->setDatedebut(new \Datetime());
                }
                    $em->persist($productivite);
                    $em->flush();
                    $request->getSession()->getFlashBag()->add('notice', 'collaborateur affecté avec succès.');
                //-----------------------------
                $tagsprojet=$em->getRepository('BackOfficeBundle:TagsProjet')->findByProjet($tache->getProjet());
                foreach($tagsprojet as $tag){
                    $tagcoll=new TagsPoste();
                    $tagcoll->setTag($tag->getTag());
                    $tagcoll->setCollaborateur($collaborateur);
                    $em->persist($tagcoll);
                    $em->flush();
                }


            } catch (\Exception $e) {
                $request->getSession()->getFlashBag()->add('notice_erreur', "Impossible d'affecter le collaborateur");
            }
            $message = \Swift_Message::newInstance()
                ->setSubject('Affectation de tâche AZCREATOR PLATFORM')
                ->setFrom('send@example.com')
                ->setTo('recipient@example.com')
                ->setBody($this->renderView('BackOfficeBundle:Accueil:mail.html.twig', array('collaborateur'=>$collaborateur,'tache'=>$tache)))
            ;
            $this->get('mailer')->send($message);
            return $this->redirect($this->generateUrl('view-tache', array('id' => $tache->getId())));
        }
    }

public function desaffectAction($id,Request $request,$tache){
    try {
        $em=$this->getDoctrine()->getManager();
        $tache=$em->getRepository('BackOfficeBundle:Tache')->find($tache);
        $em->remove($this->getDoctrine()
            ->getManager()
            ->getRepository('BackOfficeBundle:ProdColl')
            ->find($id));
        $em->flush();
        $request->getSession()->getFlashBag()->add('notice', 'Collaborateur désaffecté.');
        return $this->redirect($this->generateUrl('view-tache', array('id' => $tache->getId())));
    } catch (\Exception $e) {
        $request->getSession()->getFlashBag()->add('notice_erreur', 'Impossible de désaffecter le collaborateur ');

        return $this->redirect($this->generateUrl('view-tache', array('id' => $tache->getId())));
    }
}
    public function editAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();
        $tache=$em->getRepository('BackOfficeBundle:Tache')->find($id);

        if($tache==null){
            throw $this->createNotFoundException("La tâche  n'existe pas.");
        }
        $form = $this->get('form.factory')->create(new TacheType(), $tache);
        $form->handleRequest($request);
        if ($form->isValid()) {
            if($tache->getStatuttache()->getId()==3){
                $tache->setDatefinreel(new \DateTime());
            }
            $em = $this->getDoctrine()->getManager();

            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Tâche modifié avec succès.');

            return $this->redirect($this->generateUrl('view-tache', array('id'=>$id)));
        }

        return $this->render('BackOfficeBundle:Tache:edit.html.twig',array('tache'=>$tache,'form' => $form->createView()));
    }
    public function deleteAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();
        $tache=$em->getRepository('BackOfficeBundle:Tache')->find($id);
        $projet=$tache->getProjet()->getId();
        try {
            $em=$this->getDoctrine()->getManager();
            $em->remove($this->getDoctrine()
                ->getManager()
                ->getRepository('BackOfficeBundle:Tache')
                ->find($id));
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Tâche supprimé.');
            return $this->redirect($this->generateUrl('view-projet', array('$id'=>$projet)));
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('notice_erreur', 'Impossible de supprimer tâche');

            return $this->redirect($this->generateUrl('view-projet', array('id'=>$projet)));
        }
    }

}
