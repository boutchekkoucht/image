<?php

namespace OCP\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OCP\AppliBundle\Entity\CorDes;
use OCP\AppliBundle\Form\CorDesType;
use OCP\AppliBundle\Form\EditCorType;

class CorDesController extends Controller
{
public function indexAction()
    {
        return $this->render('OCPAppliBundle:cordes:index.html.twig');
    }
     public function addAction()
    {
         $des=new CorDes();
         $form=$this->createForm(new CorDesType(),$des);
         $request=$this->getRequest('request');
         
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($des);
            $em->flush();
            return  $this->redirect($this->generateUrl("ocp_appli_showCorDes"));
             }
            
         }
        return $this->render('OCPAppliBundle:cordes:ajouter.html.twig',array("form"=>$form->createView()));
    }
     public function editAction(CorDes $p)
    {
         
         $form=$this->createForm(new EditCorType(),$p);
         $request=$this->getRequest('request');
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid()){
             $em=$this->getDoctrine()->getManager();
             $em->persist($p);
             $em->flush();
             return  $this->redirect($this->generateUrl("ocp_appli_showCorDes"));
             }
            
         }
      
        return $this->render('OCPAppliBundle:cordes:modifier.html.twig',array("form"=>$form->createView(),"cordes"=>$p));
    }
     public function deleteAction(CorDes $p)
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
                  return $this->redirect($this->generateUrl("ocp_appli_showCorDes"));
                 
             }
           
           
         }
         
        return $this->render('OCPAppliBundle:CorDes:supprimer.html.twig',array("form"=>$form->createView(),"cordes"=>$p));
    }
    
      public function showAction()
    {
        $em=$this->getDoctrine()->getManager();
        $cordes=$em->getRepository("OCPAppliBundle:CorDes")->findAll();
        return $this->render('OCPAppliBundle:CorDes:show.html.twig',array("cordes"=>$cordes));
    }
}
