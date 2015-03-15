<?php

namespace OCP\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use  OCP\AppliBundle\Form\EditAnalyseType;
use OCP\AppliBundle\Entity\analyse;
use OCP\AppliBundle\Form\analyseType;


class AnalyseController extends Controller
{
    
    
    public function indexAction()
    {
        return $this->render('OCPAppliBundle:analyse:index.html.twig');
    }
     public function addAction()
    {
         $ana=new analyse();
         $form=$this->createForm(new analyseType(),$ana);
         $request=$this->getRequest('request');
         
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($ana);
            $em->flush();
             return  $this->redirect($this->generateUrl("ocp_appli_showanalyse"));
             }
            
         }
        return $this->render('OCPAppliBundle:analyse:ajouter.html.twig',array("form"=>$form->createView()));
    }
     public function editAction(analyse $p)
    {
         
         $form=$this->createForm(new EditAnalyseType(),$p);
         $request=$this->getRequest('request');
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid()){
             $em=$this->getDoctrine()->getManager();
             $em->persist($p);
             $em->flush();
              return  $this->redirect($this->generateUrl("ocp_appli_showanalyse"));
             }
           
         }
      
        return $this->render('OCPAppliBundle:analyse:modifier.html.twig',array("form"=>$form->createView(),"analyse"=>$p));
    }
     public function deleteAction(analyse $p)
    {
         $form=$this->createFormBuilder()->getForm();
         $request=$this->getRequest("request");
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid())
            
                 $em=$this->getDoctrine()->getManager();
                 $em->remove($p);
                 $em->flush();
                 
               
            return $this->redirect($this->generateUrl("ocp_appli_showanalyse"));   
             
          
         }
         
        return $this->render('OCPAppliBundle:analyse:supprimer.html.twig',array("form"=>$form->createView(),"analyse"=>$p));
    }
    
      public function showAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ana=$em->getRepository("OCPAppliBundle:analyse")->findAll();
        return $this->render('OCPAppliBundle:Analyse:show.html.twig',array("analyse"=>$ana));
    }
}
