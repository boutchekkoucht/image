<?php

namespace OCP\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OCP\AppliBundle\Form\ParcType;
use OCP\AppliBundle\Entity\recu;
use OCP\AppliBundle\Form\RechrecuType;

class RechController extends Controller
{
    
     public function addAction()
    {
         $recu=new recu();
         $form=$this->createForm(new RechrecuType(),$recu);
         $request=$this->getRequest('request');
         
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($recu);
            $em->flush();
            $this->redirect($this->generateUrl("ocp_appli_showparc"));
             }
            
         }
        return $this->render('OCPAppliBundle:recherche:recherche.html.twig',array("form"=>$form->createView()));
    }
    
    
}
