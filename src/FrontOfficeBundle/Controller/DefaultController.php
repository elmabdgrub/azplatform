<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use BackOfficeBundle\Entity\FichierTache;
use BackOfficeBundle\Entity\MessageTache;
use BackOfficeBundle\Entity\Notificationft;
use BackOfficeBundle\Entity\Notificationt;
use BackOfficeBundle\Entity\Projet;
use BackOfficeBundle\Entity\TypeProjet;
use BackOfficeBundle\Entity\Tache;
use BackOfficeBundle\Entity\StatutTache;
use BackOfficeBundle\Entity\StatutTacheRepository;
use BackOfficeBundle\Form\TacheType;
use BackOfficeBundle\Entity\Collaborateur;
use BackOfficeBundle\Entity\TypeCollaborateur;
use BackOfficeBundle\Entity\ProdColl;

use BackOfficeBundle\Entity\PosteCollaborateur;
use BackOfficeBundle\Form\MessageTacheType;
use BackOfficeBundle\Form\FichierTacheType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BackOfficeBundle\Form\CollaborateurType;
class DefaultController extends Controller
{
    public function indexAction()
    {


        function nbJours($debut, $fin)
        {
            $nbSecondes= 60*60*24;

            $debut_ts = strtotime($debut);
            $fin_ts = strtotime($fin);
            $diff = $fin_ts - $debut_ts;
            return round($diff / $nbSecondes);
        };

        $user = $this->get('security.context')->getToken()->getUser();

        $em=$this->getDoctrine()->getManager();

        $collaborateur=$em->getRepository('BackOfficeBundle:Collaborateur')->find($user);
        $collaborateur->setLastvisite(new \DateTime());
        $em->flush();
        $prod=$em->getRepository('BackOfficeBundle:ProdColl')->findByCollaborateur($collaborateur);
        $encours= Array();
        $today=new \DateTime();
        foreach($prod as $p){

            if($p->getTache()->getStatuttache()->getId()==2){

                    array_push($encours, $p->getTache());


            }
        }
//var_dump($encours);

        return $this->render('FrontOfficeBundle:Default:index.html.twig',array('prods'=>$prod,'encours'=>$encours));


    }
}
