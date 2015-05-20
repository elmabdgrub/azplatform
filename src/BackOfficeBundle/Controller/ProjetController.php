<?php 
namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Collaborateur;
use BackOfficeBundle\Entity\FichierProjet;
use BackOfficeBundle\Entity\MessageProjet;
use BackOfficeBundle\Entity\Notificationp;
use BackOfficeBundle\Entity\Notificationfp;
use BackOfficeBundle\Entity\TagsProjet;

use BackOfficeBundle\Entity\Projet;
use BackOfficeBundle\Entity\TypeProjet;
use BackOfficeBundle\Entity\Client;
use BackOfficeBundle\Entity\StatutProjet;
use BackOfficeBundle\Entity\StatutProjetRepository;
use BackOfficeBundle\Form\MessageProjetType;
use BackOfficeBundle\Form\ProjetType;
use BackOfficeBundle\Form\ProjetStatutType;
use BackOfficeBundle\Form\FichierProjetType;
use Symfony\Component\HttpFoundation\Response;
use BackOfficeBundle\Entity\Tache;
use BackOfficeBundle\Entity\StatutTache;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ProjetController extends Controller
{
  public function addAction(Request $request)
  {
    $projet = new Projet();
    $statutprojet=new StatutProjet();

    $form = $this->get('form.factory')->create(new ProjetType(), $projet);

      
       $form->handleRequest($request);
        if ($form->isValid()) {
            if ($projet->getDatefin()->format('Y-m-d') < $projet->getDatedebut()->format('Y-m-d')||$projet->getDatefin()->format('Y-m-d') > $projet->getDatelivraison()->format('Y-m-d')) {
                $request->getSession()->getFlashBag()->add('notice_erreur', ' Vérifier les dates.');

                return $this->redirect($this->generateUrl('ajouter-projet', array()));
            } else {
                $em = $this->getDoctrine()->getManager();
                $statutprojet = $em->getRepository('BackOfficeBundle:StatutProjet')
                    ->find('1');
                $projet->setStatutProjet($statutprojet);
                $em->persist($projet);
                $em->flush();
                $test = $form["tags"]->getData();
                $tags = explode(",", $test);
                foreach ($tags as $tag) {
                    $tagprojet = new TagsProjet();
                    $tagprojet->setTag(strtolower($tag));
                    $tagprojet->setProjet($projet);
                    $em->persist($tagprojet);
                    $em->flush();
                }
                $request->getSession()->getFlashBag()->add('notice', 'projet ajouté avec succès.');

                return $this->redirect($this->generateUrl('ajouter-projet', array()));
            }

        }
    return $this->render('BackOfficeBundle:Projet:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
    public function listerAction(){
        $listeprojet=$this->getDoctrine()->getRepository('BackOfficeBundle:Projet')->findAll();
        function nbJours($debut, $fin)
        {
            $nbSecondes= 60*60*24;

            $debut_ts = strtotime($debut);
            $fin_ts = strtotime($fin);
            $diff = $fin_ts - $debut_ts;
            return round($diff / $nbSecondes);
        };
        $today=new \DateTime();
        foreach($listeprojet as $projet){
            if($projet->getStatutProjet()==$this->getDoctrine()->getRepository('BackOfficeBundle:StatutProjet')->find(2)) {
                if (nbJours($today->format('Y-m-d'), $projet->getDatefin()->format('Y-m-d')) < 0) {
                    $projet->setStatutprojet(
                        $this->getDoctrine()->getRepository('BackOfficeBundle:StatutProjet')->find(5)
                    );
                    $em = $this->getDoctrine()->getManager();

                    $em->flush();
                }
            }
        }
        return $this->render('BackOfficeBundle:Projet:list.html.twig',array('listeprojet'=>$listeprojet));
    }
    public function messagesAction($id){

        $em=$this->getDoctrine()->getManager();
        $projet=$em->getRepository('BackOfficeBundle:Projet')->find($id);

        $messages=$em->getRepository('BackOfficeBundle:MessageProjet')->findByProjet($projet,array('datemessage' => 'DESC '));
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
    public function viewAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();
        $projet=$em->getRepository('BackOfficeBundle:Projet')->find($id);
        $notifications=$em->getRepository('BackOfficeBundle:Notificationp')->findByMessageprojet($em->getRepository('BackOfficeBundle:MessageProjet')->findByProjet($projet));
        foreach ($notifications as $notif) {
            if($notif->getCollaborateur()==null) {
                if ($notif->getNotified() == 0) {
                    $notif->setNotified(1);
                    $em->flush();
                }
            }
        }
        $notifications=$em->getRepository('BackOfficeBundle:Notificationfp')->findByFichierprojet($em->getRepository('BackOfficeBundle:FichierProjet')->findByProjet($projet));
        foreach ($notifications as $notif) {
            if($notif->getCollaborateur()==null) {
                if ($notif->getNotified() == 0) {
                    $notif->setNotified(1);
                    $em->flush();
                }
            }
        }
        $fichiers=$em->getRepository('BackOfficeBundle:FichierProjet')->findByProjet($projet,array('datefichier' => 'DESC '));
        $taches=$em->getRepository('BackOfficeBundle:Tache')->findByProjet($projet, array('datedebut' => 'DESC '));
        function nbJours($debut, $fin)
        {
            $nbSecondes= 60*60*24;

            $debut_ts = strtotime($debut);
            $fin_ts = strtotime($fin);
            $diff = $fin_ts - $debut_ts;
            return round($diff / $nbSecondes);
        };
        $today=new \DateTime();
        foreach($taches as $tache){
            if($tache->getStatuttache()==$this->getDoctrine()->getRepository('BackOfficeBundle:StatutTache')->find(2)){
            if(nbJours($today->format('Y-m-d'),$tache->getDatefinprevis()->format('Y-m-d'))<0){
                $tache->setStatuttache($this->getDoctrine()->getRepository('BackOfficeBundle:StatutTache')->find(4));
                $em = $this->getDoctrine()->getManager();

                $em->flush();
            }}
        }

        $statutaches=$em->getRepository('BackOfficeBundle:StatutTache')->find(2);
        //$tachesencours=$em->getRepository('BackOfficeBundle:Tache')->finByStatutTache($statutaches);
        $repo = $this   ->getDoctrine()
            ->getManager()
            ->getRepository('BackOfficeBundle:Tache');

        $qb = $repo->createQueryBuilder('t');
        $qb->select('COUNT(t)');
        $qb->where('t.statuttache = :valeur');
        $qb->setParameter('valeur', 2);
        $qb->andWhere('t.projet = :valeur2');
        $qb->setParameter('valeur2',$id);

        $tachesencours = $qb->getQuery()->getSingleScalarResult();
        $qb = $repo->createQueryBuilder('t');
        $qb->select('COUNT(t)');
        $qb->where('t.statuttache = :valeur');
        $qb->setParameter('valeur', 3);
        $qb->andWhere('t.projet = :valeur2');
        $qb->setParameter('valeur2',$id);
        $tachestermin = $qb->getQuery()->getSingleScalarResult();
        $qb = $repo->createQueryBuilder('t');
        $qb->select('COUNT(t)');
        $qb->Where('t.projet = :valeur2');
        $qb->setParameter('valeur2',$id);
        $tachestot = $qb->getQuery()->getSingleScalarResult();
        if($tachestot==0){
            $prcentaches=0;
        }else {
            $prcentaches = $tachestermin * 100 / $tachestot;
        }

        $count = $qb->getQuery()->getSingleScalarResult();
        $depenses=$em->getRepository('BackOfficeBundle:Depense')->findByProjet($projet, array('datedepense' => 'DESC '));
        $tranches=$em->getRepository('BackOfficeBundle:Tranche')->findByProjet($projet, array('datepaiment' => 'DESC '));
        if($projet==null){
            throw $this->createNotFoundException("Le projet n'existe pas.");
        }
        $message=new MessageProjet();
        $form2 = $this->get('form.factory')->create(new MessageProjetType(), $message);
        $form2->handleRequest($request);
        $taches=$em->getRepository('BackOfficeBundle:Tache')->findByProjet($projet);

        $collaborateurs=array();
        for($i=0 ; $i<count($taches); $i++){
            //var_dump($em->getRepository('BackOfficeBundle:ProdColl')->findByTache($taches[$i]));
            $prod=$em->getRepository('BackOfficeBundle:ProdColl')->findByTache($taches[$i]);
for($j=0;$j<count($prod);$j++){


        array_push($collaborateurs,$prod[$j]->getCollaborateur());



}

        }
        $collaborateursf=array_unique($collaborateurs, SORT_REGULAR);
               if ($form2->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $message->setDatemessage(new \DateTime());


            $message->setNotified(0);
            $message->setProjet($projet);

            $em->persist($message);
            $em->flush();

foreach($collaborateursf as $collab){

                $notification=new Notificationp();
                $notification->setCollaborateur($collab);
                $notification->setMessageprojet($message);
                $notification->setNotified(0);
                $notification->setDatenotif($message->getDatemessage());
                $notification->setDescription($message->getMessage());
                $notification->setType(1);
                $em->persist($notification);
                $em->flush();
            }
            return $this->redirect($this->generateUrl('view-projet', array('id'=>$id)));

        }
        $fichier=new FichierProjet();
        $form3 = $this->get('form.factory')->create(new FichierProjetType(), $fichier);
        $form3->handleRequest($request);
        if ($form3->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();


            $fichier->setNotified(0);
            $fichier->setProjet($projet);

            $em->persist($fichier);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'fichier ajouté avec succès.');
            foreach($collaborateursf as $collab){

                $notification=new Notificationfp();
                $notification->setCollaborateur($collab);
                $notification->setFichierprojet($fichier);
                $notification->setNotified(0);
                $notification->setDatenotif($fichier->getDatefichier());
                $notification->setDescription("L'administrateur a envoyé le fichier ".$fichier->getPath());
                $notification->setType(1);
                $em->persist($notification);
                $em->flush();
            }

            return $this->redirect($this->generateUrl('view-projet', array('id'=>$id)));

        }
        $form = $this->get('form.factory')->create(new ProjetStatutType(), $projet);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Statut du projet modifié avec succès.');

            return $this->redirect($this->generateUrl('view-projet', array('id'=>$id)));
        }

        return $this->render('BackOfficeBundle:Projet:view.html.twig',array('collaborateurs'=>$collaborateursf,'projet'=>$projet,'taches'=>$taches,'depenses'=>$depenses,'tranches'=>$tranches,'form' => $form->createView(),'form3' => $form3->createView(),'form2' => $form2->createView(),'prcentaches'=>$prcentaches,'tachestot'=>$tachestot,'tachesencours'=>$tachesencours,'tachestermin'=>$tachestermin,'fichiers'=>$fichiers));

    }
    public function editAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();
        $projet=$em->getRepository('BackOfficeBundle:Projet')->find($id);

        if($projet==null){
            throw $this->createNotFoundException("Le projet  n'existe pas.");
        }
        $form = $this->get('form.factory')->create(new ProjetType(), $projet);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Projet modifié avec succès.');

            return $this->redirect($this->generateUrl('liste-projet', array()));
        }

        return $this->render('BackOfficeBundle:Projet:edit.html.twig',array('projet'=>$projet,'form' => $form->createView()));
    }
    public function deleteAction(){
        return $this->render('BackOfficeBundle:Default:index.html.twig',array());

    }
    Public function encoursAction(){
        $em=$this->getDoctrine()->getManager();
        $statutprojet =$em->getRepository('BackOfficeBundle:StatutProjet')
            ->find('2');

        $projets=$em->getRepository('BackOfficeBundle:Projet')->findByStatutprojet($statutprojet);


        $array_projets=array();
        $array_projets["id"]=array();$array_projets["titre"]=array(); $array_projets["prcentaches"]=array();

        for($i=0 ; $i<count($projets); $i++)
        {




            $repo = $this   ->getDoctrine()
                ->getManager()
                ->getRepository('BackOfficeBundle:Tache');


            $qb = $repo->createQueryBuilder('t');
            $qb->select('COUNT(t)');
            $qb->where('t.statuttache = :valeur');
            $qb->setParameter('valeur', 3);
            $qb->andWhere('t.projet = :valeur2');
            $qb->setParameter('valeur2',$projets[$i]->getId());
            $tachestermin = $qb->getQuery()->getSingleScalarResult();
            $qb = $repo->createQueryBuilder('t');
            $qb->select('COUNT(t)');
            $qb->Where('t.projet = :valeur2');
            $qb->setParameter('valeur2',$projets[$i]->getId());
            $tachestot = $qb->getQuery()->getSingleScalarResult();
            $prcentaches=intval($tachestermin*100/$tachestot);





                array_push($array_projets["id"], $projets[$i]->getId());

                array_push($array_projets["titre"], $projets[$i]->getTitre());
                array_push($array_projets["prcentaches"],$prcentaches);





        }

        $json = json_encode(array(
            'encours' => $array_projets,

        ));
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);

        return $response;
    }
}
