<?php
/**
 * Created by PhpStorm.
 * User: Grub
 * Date: 13/05/2015
 * Time: 12:46
 */

namespace FrontOfficeBundle\Controller;


use BackOfficeBundle\Entity\Collaborateur;
use BackOfficeBundle\Entity\ProdColl;

use Symfony\Component\HttpFoundation\Response;

use BackOfficeBundle\Entity\PosteCollaborateur;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BackOfficeBundle\Form\CollaborateurselfType;

class CollaborateurController extends Controller {

    public function editAction(Request $request){
        $user = $this->get('security.context')->getToken()->getUser();
        $em=$this->getDoctrine()->getManager();
        $collaborateur=$em->getRepository('BackOfficeBundle:Collaborateur')->find($user->getId());
        $hash = $collaborateur->getPassword();





        $form = $this->get('form.factory')->create(new CollaborateurselfType(), $collaborateur);
        $form->handleRequest($request);
        if ($form->isValid()) {

            if($collaborateur->getPassword()==$hash){
                $em = $this->getDoctrine()->getManager();

                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Profil modifié avec succès.');

                return $this->redirect($this->generateUrl('edit-profil', array()));
            }else {
                if ($form["verif"]->getData() == $form["password"]->getData()) {
                    $options = [
                        'cost' => 12,
                    ];
                    $collaborateur->setPassword(password_hash($collaborateur->getPassword(), PASSWORD_BCRYPT, $options));

                    $em = $this->getDoctrine()->getManager();

                    $em->flush();
                    $request->getSession()->getFlashBag()->add('notice', 'Profil modifié avec succès.');

                    return $this->redirect($this->generateUrl('edit-profil', array()));
                }
            else{
                $request->getSession()->getFlashBag()->add('notice_erreur', 'les mots de passe saisis sont différents. veuillez réessayer.');
            }
                return $this->redirect($this->generateUrl('edit-profil', array()));
            }

        }

        return $this->render('FrontOfficeBundle:Collaborateur:edit.html.twig',array('collaborateur'=>$collaborateur,'form' => $form->createView()));
    }

}