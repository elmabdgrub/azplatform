<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use BackOfficeBundle\Entity\Projet;
use BackOfficeBundle\Entity\StatutProjet;
use BackOfficeBundle\Entity\Client;
use BackOfficeBundle\Entity\Depense;
use BackOfficeBundle\Entity\TypeDepense;

class IndexController extends Controller
{

    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();

        $retard=$em->getRepository('BackOfficeBundle:StatutProjet')->find(5);
        $term=$em->getRepository('BackOfficeBundle:StatutProjet')->find(4);
        $nondem=$em->getRepository('BackOfficeBundle:StatutProjet')->find(1);
        $arret=$em->getRepository('BackOfficeBundle:StatutProjet')->find(3);
        $encours=$em->getRepository('BackOfficeBundle:StatutProjet')->find(2);


        $pencours=$em->getRepository('BackOfficeBundle:Projet')->findBy(array('statutprojet'=>$encours));
        $pndemar=$em->getRepository('BackOfficeBundle:Projet')->findBy(array('statutprojet'=>$nondem));
        $parret=$em->getRepository('BackOfficeBundle:Projet')->findBy(array('statutprojet'=>$arret));
        $ptermin=$em->getRepository('BackOfficeBundle:Projet')->findBy(array('statutprojet'=>$term));
        $pretard=$em->getRepository('BackOfficeBundle:Projet')->findBy(array('statutprojet'=>$retard));
        $statprojets=array();

$stats=array();
        $stats['clients']=0;
        $stats['projets']=0;
        $stats['typesprj']=0;
        $stats['collaborateurs']=0;
        $stats['hebergement']=0;
        $stats['taches']=0;



        array_push($statprojets,count($pencours));
        array_push($statprojets,count($pndemar));
        array_push($statprojets,count($parret));
        array_push($statprojets,count($ptermin));
        array_push($statprojets,count($pretard));

        function nbJours($debut, $fin)
        {
            $nbSecondes= 60*60*24;

            $debut_ts = strtotime($debut);
            $fin_ts = strtotime($fin);
            $diff = $fin_ts - $debut_ts;
            return round($diff / $nbSecondes);
        }

        //----------------------------------------

        $repo = $this   ->getDoctrine()
            ->getManager()
            ->getRepository('BackOfficeBundle:Collaborateur');

        $qb = $repo->createQueryBuilder('c');
        $qb->select('c.nom,c.prenom,c.path,c.lastvisite');
       $qb->orderBy('c.lastvisite','DESC');
        $qb->setMaxResults(4);

        $lastvisit = $qb->getQuery()->getArrayResult();
//var_dump($collaborateurs);
        //-----------------------------------------
        $typesprj=$em->getRepository('BackOfficeBundle:TypeProjet')->findAll();
        $stats['typesprj']=count($typesprj);
        $typesprojets=array();
        $typesprojets['type']=array();
        $typesprojets['tot']=array();
        $typesprojets['cap']=array();
        $typesprojets['depenses']=array();
        $typedepenses=array();
        $typedepenses['depense']=array();
        $typedepenses['lib']=array();
        $typedepenses['tot']=array();
        $joursprojets['type']=array();
        $joursprojets=array();




        $tdepense=array();
        foreach($typesprj as $type){
            $joursprojets[$type->getLibelle()]=array();
            $joursprojets[$type->getLibelle()]['projets']=array();
            $joursprojets[$type->getLibelle()]['jours']=array();
            $joursprojets[$type->getLibelle()]['moy']=0;

            $cap=0;
            $totdepenses=0;
            $prjs=$em->getRepository('BackOfficeBundle:Projet')->findByTypeprojet($type);
            $tot=count($prjs);
            foreach($prjs as $prj){
                array_push($joursprojets[$type->getLibelle()]['projets'],$prj->getTitre());
                array_push($joursprojets[$type->getLibelle()]['jours'],nbJours(
                    $prj->getDatedebut()->format('Y-m-d'),
                    $prj->getDatefin()->format('Y-m-d')
                ));
                $cap=$cap+$prj->getMontant();
                $deps=$em->getRepository('BackOfficeBundle:Depense')->findByProjet($prj);
                foreach($deps as $d){
                    $totdepenses=$totdepenses+$d->getMontant();
                    array_push($tdepense,$d);


                }
            }



            array_push($typesprojets['type'],$type->getLibelle());
            array_push($typesprojets['tot'],$tot);
            array_push($typesprojets['cap'],$cap);
            array_push($typesprojets['depenses'],$totdepenses);



        }


        ;
        foreach($joursprojets as &$jp){



          $totj=0;

            foreach($jp['jours'] as $j){
                $totj=$totj+$j;

            }

            $jp['moy']=$totj/count($jp['projets']);
            unset($jp);
           // echo $jp['moy'].'-------';
           // var_dump( $jp['moy']);
           // echo '---------------------';
        }

       // var_dump($joursprojets);
        $typesdepense=$em->getRepository('BackOfficeBundle:TypeDepense')->findAll();
        foreach($typesdepense as $tds){
            array_push($typedepenses['depense'],$tds);
        }

            foreach($typedepenses['depense'] as $tsd){
                $totaldesp=0;
                foreach($tdepense as $td){

                if($td->getTypeDepense()==$tsd){
                    $totaldesp=$totaldesp+$td->getMontant();

                  //
                }
            }
                array_push($typedepenses['tot'],$totaldesp);
                array_push($typedepenses['lib'],$tsd->getLibelle());
        }

        //var_dump($typedepenses['tot']);
       // echo "---------------------";
       // var_dump($typedepenses['lib']);
//------------------------------------------

        $clients=$em->getRepository('BackOfficeBundle:Client')->findAll();
        $stats['clients']=count($clients);
        $clientstotprj=array();
        $clientstotprj['client']=array();
        $clientstotprj['tot']=array();
        $clientstotprj['ca']=array();

        foreach($clients as $client){
            $prjs=$em->getRepository('BackOfficeBundle:Projet')->findByClient($client);
            $tot=count($prjs);
            $ca=0;
            $totdep=0;
            foreach($prjs as $prj){
                $depenses=$em->getRepository('BackOfficeBundle:Depense')->findByProjet($prj);
                foreach($depenses as $depense){
                    $totdep=$totdep+$depense->getMontant();
                }
                $ca=$ca+$prj->getMontant()-$totdep;
            }

            array_push($clientstotprj['client'],$client->getNom());
            array_push($clientstotprj['tot'],$tot);
            array_push($clientstotprj['ca'],$ca);

        }
//------------------------------------------



//------------------------------------------

        $hebergementsexpir=array();
        $hebergementsexpir['nom']=array();
        $hebergementsexpir['jours']=array();
        $hebergement=$em->getRepository('BackOfficeBundle:Hebergement')->findAll();
        $stats['hebergement']=count($hebergement);
        $today=new \DateTime();
        foreach($hebergement as $h){

        array_push($hebergementsexpir['nom'],$h->getNom());
            array_push($hebergementsexpir['jours'],nbJours($today->format('Y-m-d'),$h->getDateexpiration()->format('Y-m-d')));


        }
        $projets=$em->getRepository('BackOfficeBundle:Projet')->findAll();
        $stats['projets']=count($projets);
        $collaborateurs=$em->getRepository('BackOfficeBundle:Collaborateur')->findAll();
        $stats['collaborateurs']=count($collaborateurs);
        $taches=$em->getRepository('BackOfficeBundle:Tache')->findAll();
        $stats['taches']=count($taches);
       // echo $datatype;
       // var_dump($clientstotprj['client']);
       //var_dump($hebergementsexpir);
        return $this->render('BackOfficeBundle:Accueil:index.html.twig', array('statprojets'=>$statprojets,'lastvisit'=>$lastvisit,'typesprojets'=>$typesprojets,'clientstotprj'=>$clientstotprj,'typedepenses'=>$typedepenses,'joursprojets'=>$joursprojets,'hebergementsexpir'=>$hebergementsexpir,'stats'=>$stats));
    }

}
