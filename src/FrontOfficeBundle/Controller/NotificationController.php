<?php
/**
 * Created by PhpStorm.
 * User: Grub
 * Date: 12/05/2015
 * Time: 15:43
 */

namespace FrontOfficeBundle\Controller;


use BackOfficeBundle\Entity\Collaborateur;
use BackOfficeBundle\Entity\FichierProjet;
use BackOfficeBundle\Entity\MessageProjet;
use BackOfficeBundle\Entity\Notificationp;
use BackOfficeBundle\Entity\Hebergement;
use BackOfficeBundle\Entity\FichierTache;
use BackOfficeBundle\Entity\MessageTache;

use BackOfficeBundle\Entity\Notificationfp;
use BackOfficeBundle\Entity\Notificationft;

use BackOfficeBundle\Entity\Notificationt;
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

class NotificationController extends Controller{
    Public function messagesAction(){
        $em=$this->getDoctrine()->getManager();

        $notifications=new Notificationp();
        $notificationst=new Notificationt();
        $user = $this->get('security.context')->getToken()->getUser();
        $notifications=$em->getRepository('BackOfficeBundle:Notificationp')->findBy(array('notified'=>'0','collaborateur'=>$user));
        $notificationst=$em->getRepository('BackOfficeBundle:Notificationt')->findBy(array('notified'=>'0','collaborateur'=>$user));
        $array_notifications=array();
       //var_dump($notificationst);
        $array_notifications["id"]=array();$array_notifications["idpt"]=array(); $array_notifications["projet"]=array(); $array_notifications["collaborateur"]=array();$array_notifications["date"]=array();$array_notifications["message"]=array();$array_notifications["photo"]=array();$array_notifications["type"]=array();
        //var_dump($notifications);
        for($i=0 ; $i<count($notifications); $i++)
        {



                array_push($array_notifications["id"], $notifications[$i]->getId());

                array_push($array_notifications["date"], $notifications[$i]->getDatenotif()->format('d/m/Y H:m:i'));
                array_push($array_notifications["type"], $notifications[$i]->getType());
                array_push($array_notifications["projet"],$notifications[$i]->getMessageprojet()->getProjet()->getTitre());
                array_push($array_notifications["idpt"],$notifications[$i]->getMessageprojet()->getProjet()->getId());
                if($notifications[$i]->getMessageprojet()->getCollaborateur()!=null){
                    array_push($array_notifications["collaborateur"],$notifications[$i]->getMessageprojet()->getCollaborateur()->getNom()." ".$notifications[$i]->getMessageprojet()->getCollaborateur()->getPrenom());
                    $img=$notifications[$i]->getMessageprojet()->getCollaborateur()->getPath();
                    array_push($array_notifications["photo"], "avatars/".$img);
                }else{
                    array_push($array_notifications["collaborateur"],'Administrateur');
                    array_push($array_notifications["photo"],"avatars/avatar.jpg");

                }


                array_push($array_notifications["message"],$notifications[$i]->getDescription());




        }
        for($i=0 ; $i<count($notificationst); $i++)
        {



                array_push($array_notifications["id"], $notificationst[$i]->getId());
                array_push($array_notifications["type"], $notificationst[$i]->getType());
                array_push($array_notifications["date"], $notificationst[$i]->getDatenotif()->format('d/m/Y H:m:i'));
                array_push($array_notifications["projet"],$notificationst[$i]->getMessagetache()->getTache()->getTitre());
                array_push($array_notifications["idpt"],$notificationst[$i]->getMessagetache()->getTache()->getId());

                if($notificationst[$i]->getMessagetache()->getCollaborateur()!=null){
                    array_push($array_notifications["collaborateur"],$notificationst[$i]->getMessagetache()->getCollaborateur()->getNom()." ".$notificationst[$i]->getMessagetache()->getCollaborateur()->getPrenom());
                    $img=$notificationst[$i]->getMessagetache()->getCollaborateur()->getPath();
                    array_push($array_notifications["photo"], "avatars/".$img);
                }else{
                    array_push($array_notifications["collaborateur"],'Administrateur');
                    array_push($array_notifications["photo"],"avatars/avatar.jpg");

                }


                array_push($array_notifications["message"],$notificationst[$i]->getDescription());



        }
        $json = json_encode(array(
            'notificationsm' => $array_notifications,

        ));
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);

        return $response;
    }
    Public function fichiersAction(){
        $em=$this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $notifications=new Notificationfp();
        $notificationst=new Notificationft();
        $notifications=$em->getRepository('BackOfficeBundle:Notificationfp')->findBy(array('notified'=>'0','collaborateur'=>$user));
        $notificationst=$em->getRepository('BackOfficeBundle:Notificationft')->findBy(array('notified'=>'0','collaborateur'=>$user));


        $array_notifications=array();
        $array_notifications["id"]=array();$array_notifications["idpt"]=array(); $array_notifications["projet"]=array(); $array_notifications["collaborateur"]=array();$array_notifications["date"]=array();$array_notifications["message"]=array();$array_notifications["photo"]=array();$array_notifications["type"]=array();
        //var_dump($notifications);

        for($i=0 ; $i<count($notifications); $i++)
        {


//var_dump($notifications[$i]);
                array_push($array_notifications["id"], $notifications[$i]->getId());

                array_push($array_notifications["date"], $notifications[$i]->getDatenotif()->format('d/m/Y H:m:i'));
                array_push($array_notifications["type"], $notifications[$i]->getType());
                array_push($array_notifications["projet"],$notifications[$i]->getFichierprojet()->getProjet()->getTitre());
                array_push($array_notifications["idpt"],$notifications[$i]->getFichierprojet()->getProjet()->getId());

                if($notifications[$i]->getFichierprojet()->getCollaborateur()!=null){
                    array_push($array_notifications["collaborateur"],$notifications[$i]->getFichierprojet()->getCollaborateur()->getNom()." ".$notifications[$i]->getFichierprojet()->getCollaborateur()->getPrenom());
                    $img=$notifications[$i]->getFichierprojet()->getCollaborateur()->getPath();
                    array_push($array_notifications["photo"], "avatars/".$img);
                }else{
                    array_push($array_notifications["collaborateur"],'Administrateur');
                    array_push($array_notifications["photo"],"avatars/avatar.jpg");

                }


                array_push($array_notifications["message"],$notifications[$i]->getDescription());




        }
//var_dump($array_notifications);
        for($i=0 ; $i<count($notificationst); $i++)
        {



//var_dump($notificationst[$i]);
//var_dump(  $notificationst[$i]->getFichiertache()->getCollaborateur());

                array_push($array_notifications["id"], $notificationst[$i]->getId());
                array_push($array_notifications["type"], $notificationst[$i]->getType());
                array_push($array_notifications["date"], $notificationst[$i]->getDatenotif()->format('d/m/Y H:m:i'));
                array_push($array_notifications["projet"],$notificationst[$i]->getFichiertache()->getTache()->getTitre());
                array_push($array_notifications["idpt"],$notificationst[$i]->getFichiertache()->getTache()->getId());
                if(  $notificationst[$i]->getFichiertache()->getCollaborateur()!=null){

                   // echo $notificationst[$i]->getFichiertache()->getCollaborateur()->getNom()." ".$notificationst[$i]->getFichiertache()->getCollaborateur()->getPrenom();

                    array_push($array_notifications["collaborateur"],$notificationst[$i]->getFichiertache()->getCollaborateur()->getNom()." ".$notificationst[$i]->getFichiertache()->getCollaborateur()->getPrenom());
                    $img=$notificationst[$i]->getFichiertache()->getCollaborateur()->getPath();
                    array_push($array_notifications["photo"], "avatars/".$img);

                }else{
                    array_push($array_notifications["collaborateur"],'Administrateur');
                    array_push($array_notifications["photo"],"avatars/avatar.jpg");
                     }



                array_push($array_notifications["message"],$notificationst[$i]->getDescription());


        }
      //  var_dump($array_notifications);
        $json = json_encode(array(
            'notificationsf' => $array_notifications,

        ));
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);

        return $response;
    }

    Public function tachesencoursAction(){

        $em=$this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $prods=$em->getRepository('BackOfficeBundle:ProdColl')->findBy(array('notified'=>null,'collaborateur'=>$user));
        $array_taches=array();
        $array_taches["id"]=array();$array_taches["idpt"]=array(); $array_taches["tache"]=array();$array_taches["date"]=array();

        for($i=0 ; $i<count($prods); $i++)
        {
            array_push($array_taches["id"], $prods[$i]->getId());
            array_push($array_taches["idpt"], $prods[$i]->getTache()->getId());
            array_push($array_taches["tache"], $prods[$i]->getTache()->getTitre());
            array_push($array_taches["date"], $prods[$i]->getDateAffectation()->format('d/m/Y H:m:i'));


        }
        $json = json_encode(array(
            'tachesencours' => $array_taches,

        ));
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);

        return $response;

    }
}