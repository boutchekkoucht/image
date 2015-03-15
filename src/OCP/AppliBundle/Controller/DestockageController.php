<?php

namespace OCP\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OCP\AppliBundle\Form\destockageType;
use OCP\AppliBundle\Form\editdestockageType;
use OCP\AppliBundle\Entity\destockage;



class DestockageController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('OCPAppliBundle:destckage:index.html.twig');
    }
     public function addAction()
    {
         $des=new destockage();
         $form=$this->createForm(new destockageType,$des);
         $request=$this->getRequest('request');
         
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($des);
            $em->flush();
         return  $this->redirect($this->generateUrl("ocp_appli_showdestockage"));
             }
            
         }
        return $this->render('OCPAppliBundle:Destockage:ajouter.html.twig',array("form"=>$form->createView()));
    }
     public function editAction(destockage  $p)
    {
         
         $form=$this->createForm(new editdestockageType(),$p);
         $request=$this->getRequest('request');
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid()){
             $em=$this->getDoctrine()->getManager();
             $em->persist($p);
             $em->flush();
              return  $this->redirect($this->generateUrl("ocp_appli_showdestockage"));
            
             }
            
         }
      
        return $this->render('OCPAppliBundle:Destockage:modifier.html.twig',array("form"=>$form->createView(),"destockage"=>$p));
    }
     public function deleteAction(destockage $p)
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
              return $this->redirect($this->generateUrl("ocp_appli_showdestockage"));
                 
                 
             }
           
     
         }
         
        return $this->render('OCPAppliBundle:Destockage:supprimer.html.twig',array("form"=>$form->createView(),"destockage"=>$p));
    }
    
      public function showAction()
    {
        $em=$this->getDoctrine()->getManager();
        $destockage=$em->getRepository("OCPAppliBundle:destockage")->findAll();
        return $this->render('OCPAppliBundle:Destockage:show.html.twig',array("destockage"=>$destockage));
    }
}
