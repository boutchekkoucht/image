<?php

namespace OCP\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OCP\AppliBundle\Form\ParcType;
use OCP\AppliBundle\Entity\Parc;
use OCP\AppliBundle\Form\EditparcType;
use OCP\AppliBundle\Form\RechercheparcType;

class ParcController extends Controller
{
     public function indexAction()
    {
        return $this->render('OCPAppliBundle:Parc:index.html.twig');
    }
     public function addAction()
    {
         $parc=new  Parc();
         $form=$this->createForm(new ParcType(),$parc);
         $request=$this->getRequest('request');
         
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($parc);
            $em->flush();
            $this->redirect($this->generateUrl("ocp_appli_showparc"));
             }
            
         }
        return $this->render('OCPAppliBundle:Parc:ajouter.html.twig',array("form"=>$form->createView()));
    }
     public function editAction(Parc $p)
    {
         
         $form=$this->createForm(new EditparcType(),$p);
         $request=$this->getRequest('request');
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid()){
             $em=$this->getDoctrine()->getManager();
             $em->persist($p);
             $em->flush();
            
             }
             return  $this->redirect($this->generateUrl("ocp_appli_showparc"));
         }
      
        return $this->render('OCPAppliBundle:Parc:modifier.html.twig',array("form"=>$form->createView(),"parc"=>$p));
    }
     public function deleteAction(Parc $p)
    {
         $form=$this->createFormBuilder()->getForm();
         $request=$this->getRequest("request");
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid())
             {
                 
                 $em=$this->getDoctrine()->getManager();
                 $em->remove($p);
                 $em->flush();
                 
            return $this->redirect($this->generateUrl("ocp_appli_showparc")); 
                 
             }
          
         }
         
        return $this->render('OCPAppliBundle:Parc:supprimer.html.twig',array("form"=>$form->createView(),"parc"=>$p));
    }
    
      public function showAction()
    {
        $em=$this->getDoctrine()->getManager();
        $parc=$em->getRepository("OCPAppliBundle:Parc")->findAll();
        return $this->render('OCPAppliBundle:Parc:show.html.twig',array("parc"=>$parc));
    }
        public function rechercheAction()
    {
             $form=$this->createForm(new RechercheparcType());
     
     
        return $this->render('OCPAppliBundle:Parc:recherche.html.twig',array("form"=>$form->createView()));
    }
      
      public function recherchetraitementAction()
    {
          $form=$this->createForm(new RechercheparcType());
           $request=$this->getRequest('request');
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
            // echo $form['recherche']->getData() ;
             //recherche($form['recherche']->getData());
        $em=$this->getDoctrine()->getManager();
        $parc=$em->getRepository("OCPAppliBundle:Parc")->recherche($form['recherche']->getData());
        return $this->render('OCPAppliBundle:Parc:afficheRecherche.html.twig',array("parc"=>$parc));
        //var_dump($parc);
    }
    }
    
}
