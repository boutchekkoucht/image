<?php

namespace OCP\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OCP\AppliBundle\Form\recuType;
use OCP\AppliBundle\Entity\recu;
use OCP\AppliBundle\Form\EditrecuType;
use OCP\AppliBundle\Form\RechercherecuType;
class RecuController extends Controller

{
    
    public  function indexAction(){
        
        
        return $this->render("OCPAppliBundle:recu:index.html.twig",array("form"));
    }
    
    
    public  function addAction(){
        
        $recu=new  recu();
        $form=$this->createForm(new recuType(),$recu);
        $request=$this->getRequest('request');
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em=$this->getDoctrine()->getManager();
                $em->persist($recu);
                $em->flush();
            
            return $this->redirect($this->generateUrl("ocp_appli_showrecu"));
            }
        }
        return $this->render("OCPAppliBundle:recu:ajouter.html.twig",array("form"=>$form->createView()));
    }
    
    
    
     public function deleteAction(recu $p)
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
                 
            return $this->redirect($this->generateUrl("ocp_appli_showrecu")); 
                 
             }
          
         }
         
        return $this->render('OCPAppliBundle:recu:supprimer.html.twig',array("form"=>$form->createView(),"recu"=>$p));
    }
  
    
    public  function showAction(){
        
        $em=$this->getDoctrine()->getManager();
        $recu=$em->getRepository("OCPAppliBundle:recu")->findAll();
        
        return $this->render("OCPAppliBundle:recu:show.html.twig",array("recu"=>$recu));
    }
      public  function editAction(recu $recu){
        
        $form=$this->createForm(new EditrecuType(),$recu);
        $request=$this->getRequest('request');
        if($request->getMethod()=="POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em=$this->getDoctrine()->getManager();
                $em->persist($recu);
                $em->flush();
                 return $this->redirect($this->generateUrl("ocp_appli_showrecu"));
            }
           
        }
        return $this->render("OCPAppliBundle:recu:modifier.html.twig",array("form"=>$form->createView(),"recu"=>$recu));
    }
            public function rechercheAction()
    {
             $form=$this->createForm(new RechercherecuType());
     
     
        return $this->render('OCPAppliBundle:recu:recherche.html.twig',array("form"=>$form->createView()));
    }
      ///**
        //* @ParamConverter("date", options={"format": "Y-m-d"})
       // */
      public function recherchetraitementAction()
    {
          $form=$this->createForm(new RechercherecuType());
           $request=$this->getRequest('request');
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
            // echo $form['recherche']->getData() ;
             //recherche($form['recherche']->getData());
        $em=$this->getDoctrine()->getManager();
        $recu=$em->getRepository("OCPAppliBundle:recu")->recherche($form['Date']->getData());
        return $this->render('OCPAppliBundle:recu:afficheRecherche.html.twig',array("recu"=>$recu));
        //var_dump($parc);
    }
    }
    
}
