<?php
/**
 * Created by PhpStorm.
 * User: Grub
 * Date: 23/04/2015
 * Time: 12:52
 */

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Collaborateur;
use BackOfficeBundle\Entity\FichierProjet;
use BackOfficeBundle\Entity\MessageProjet;
use BackOfficeBundle\Entity\Notificationp;
use BackOfficeBundle\Entity\Hebergement;

use BackOfficeBundle\Entity\Notificationfp;
use BackOfficeBundle\Entity\Notificationt;
use BackOfficeBundle\Entity\Notificationft;
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

class NotificationController extends Controller
{
    Public function messagesAction()
    {
        $em = $this->getDoctrine()->getManager();


        $notifications = $em->getRepository('BackOfficeBundle:Notificationp')->findBy(array('notified' => '0'));
        $notificationst = $em->getRepository('BackOfficeBundle:Notificationt')->findBy(array('notified' => '0'));
        $array_notifications = array();
        $array_notifications["id"] = array();
        $array_notifications["idpt"] = array();
        $array_notifications["projet"] = array();
        $array_notifications["collaborateur"] = array();
        $array_notifications["date"] = array();
        $array_notifications["message"] = array();
        $array_notifications["photo"] = array();
        $array_notifications["type"] = array();
        //var_dump($notifications);
        for ($i = 0; $i < count($notifications); $i++) {

            if ($notifications[$i]->getCollaborateur() == null) {

                array_push($array_notifications["id"], $notifications[$i]->getId());

                array_push($array_notifications["date"], $notifications[$i]->getDatenotif()->format('d/m/Y H:m:i'));
                array_push($array_notifications["type"], $notifications[$i]->getType());
                array_push($array_notifications["projet"], $notifications[$i]->getMessageprojet()->getProjet()->getTitre());
                array_push($array_notifications["idpt"], $notifications[$i]->getMessageprojet()->getProjet()->getId());
                array_push($array_notifications["collaborateur"], $notifications[$i]->getMessageprojet()->getCollaborateur()->getNom() . " " . $notifications[$i]->getMessageprojet()->getCollaborateur()->getPrenom());
                $img = $notifications[$i]->getMessageprojet()->getCollaborateur()->getPath();
                array_push($array_notifications["photo"], "avatars/" . $img);
                array_push($array_notifications["message"], $notifications[$i]->getDescription());

            }


        }
        for ($i = 0; $i < count($notificationst); $i++) {

            if ($notificationst[$i]->getCollaborateur() == null) {

                array_push($array_notifications["id"], $notificationst[$i]->getId());
                array_push($array_notifications["type"], $notificationst[$i]->getType());
                array_push($array_notifications["date"], $notificationst[$i]->getDatenotif()->format('d/m/Y H:m:i'));
                array_push($array_notifications["projet"], $notificationst[$i]->getMessagetache()->getTache()->getTitre());
                array_push($array_notifications["idpt"], $notificationst[$i]->getMessagetache()->getTache()->getId());
                array_push($array_notifications["collaborateur"], $notificationst[$i]->getMessagetache()->getCollaborateur()->getNom() . " " . $notificationst[$i]->getMessagetache()->getCollaborateur()->getPrenom());
                $img = $notificationst[$i]->getMessagetache()->getCollaborateur()->getPath();
                array_push($array_notifications["photo"], "avatars/" . $img);
                array_push($array_notifications["message"], $notificationst[$i]->getDescription());

            }

        }
        $json = json_encode(array(
            'notificationsm' => $array_notifications,

        ));
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);

        return $response;
    }

    Public function fichiersAction()
    {
        $em = $this->getDoctrine()->getManager();


        $notifications = $em->getRepository('BackOfficeBundle:Notificationfp')->findBy(array('notified' => '0'));
        $notificationst = $em->getRepository('BackOfficeBundle:Notificationft')->findBy(array('notified' => '0'));
        $hebergements = $em->getRepository('BackOfficeBundle:Hebergement')->findBy(array('notified' => null));
        function nbJours($debut, $fin)
        {
            $nbSecondes = 60 * 60 * 24;

            $debut_ts = strtotime($debut);
            $fin_ts = strtotime($fin);
            $diff = $fin_ts - $debut_ts;
            return round($diff / $nbSecondes);
        }

        ;
        $today = new \DateTime();
        $array_hebergement = array();


        $array_notifications = array();
        $array_notifications["id"] = array();
        $array_notifications["idpt"] = array();
        $array_notifications["projet"] = array();
        $array_notifications["collaborateur"] = array();
        $array_notifications["date"] = array();
        $array_notifications["message"] = array();
        $array_notifications["photo"] = array();
        $array_notifications["type"] = array();
        //var_dump($notifications);
        for ($i = 0; $i < count($hebergements); $i++) {
            if (nbJours($today->format('Y-m-d'), $hebergements[$i]->getDateexpiration()->format('Y-m-d')) < 40) {

                array_push($array_notifications["id"], $hebergements[$i]->getId());
                array_push($array_notifications["date"], "Ddate d'expiration :" . $hebergements[$i]->getDateexpiration()->format('d/m/Y '));
                array_push($array_notifications["projet"], $hebergements[$i]->getNom());
                array_push($array_notifications["type"], 3);
                array_push($array_notifications["idpt"], $hebergements[$i]->getId());
                array_push($array_notifications["collaborateur"], null);

                array_push($array_notifications["photo"], "img/heberg.png");
                array_push($array_notifications["message"], "cet hebergement va expiré dans " . nbJours($today->format('Y-m-d'), $hebergements[$i]->getDateexpiration()->format('Y-m-d')) . " jours . date d'expiration :" . $hebergements[$i]->getDateexpiration()->format('d/m/Y '));


            }
        }
        for ($i = 0; $i < count($notifications); $i++) {


            if ($notifications[$i]->getCollaborateur() == null) {

                array_push($array_notifications["id"], $notifications[$i]->getId());

                array_push($array_notifications["date"], $notifications[$i]->getDatenotif()->format('d/m/Y H:m:i'));
                array_push($array_notifications["type"], $notifications[$i]->getType());
                array_push($array_notifications["projet"], $notifications[$i]->getFichierprojet()->getProjet()->getTitre());
                array_push($array_notifications["idpt"], $notifications[$i]->getFichierprojet()->getProjet()->getId());
                array_push($array_notifications["collaborateur"], $notifications[$i]->getFichierprojet()->getCollaborateur()->getNom() . " " . $notifications[$i]->getFichierprojet()->getCollaborateur()->getPrenom());
                $img = $notifications[$i]->getFichierprojet()->getCollaborateur()->getPath();
                array_push($array_notifications["photo"], "avatars/" . $img);
                array_push($array_notifications["message"], $notifications[$i]->getDescription());

            }


        }

        for ($i = 0; $i < count($notificationst); $i++) {

            if ($notificationst[$i]->getCollaborateur() == null) {

                array_push($array_notifications["id"], $notificationst[$i]->getId());
                array_push($array_notifications["type"], $notificationst[$i]->getType());
                array_push($array_notifications["date"], $notificationst[$i]->getDatenotif()->format('d/m/Y H:m:i'));
                array_push($array_notifications["projet"], $notificationst[$i]->getFichiertache()->getTache()->getTitre());
                array_push($array_notifications["idpt"], $notificationst[$i]->getFichiertache()->getTache()->getId());
                array_push($array_notifications["collaborateur"], $notificationst[$i]->getFichiertache()->getCollaborateur()->getNom() . " " . $notificationst[$i]->getFichiertache()->getCollaborateur()->getPrenom());
                $img = $notificationst[$i]->getFichiertache()->getCollaborateur()->getPath();
                array_push($array_notifications["photo"], "avatars/" . $img);
                array_push($array_notifications["message"], $notificationst[$i]->getDescription());

            }

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

}