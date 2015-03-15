<?php

namespace OCP\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OCP\AppliBundle\Form\EdittrainType;
use OCP\AppliBundle\Entity\train;
use OCP\AppliBundle\Form\trainType;
class TrainController extends Controller
{
    
    public  function indexAction(){
        return  $this->render("OCPAppliBundle:Train:index.html.twig");
    }
    
    public  function addAction(){
         
        $train=new train();
        $form=$this->createForm(new trainType(),$train);
        $request=$this->getRequest("request");
        if($request->getMethod()=="POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em=$this->getDoctrine()->getManager();
                $em->persist($train);
                $em->flush();
            }
            return $this->redirect($this->generateUrl("ocp_appli_showtrain"));
        }
         
        return  $this->render("OCPAppliBundle:Train:ajouter.html.twig",array("form"=>$form->createView()));
    }
     public  function editAction(train $train){
         
         $form=$this->createForm(new EdittrainType(), $train);
         $request=$this->getRequest();
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid())
             {
                 $em=$this->getDoctrine()->getManager();
                 $em->persist($train);
                 $em->flush();
             }
                     
             return $this->redirect($this->generateUrl("ocp_appli_showtrain"));
         }
        return  $this->render("OCPAppliBundle:train:modifier.html.twig",array("form"=>$form->createView(),"train"=>$train));
    }
      
  public function deleteAction(Train $train)
        {
        
        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
        $form->bind($request);
        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($train);
        $em->flush();
      
        $this->get('session')->getFlashBag()->add('info', 'Article
        bien supprimé');
        
        return $this->redirect($this->generateUrl('ocp_appli_showtrain'));
        }
        }
       
        return $this->render('OCPAppliBundle:Train:supprimer.html.twig',
        array('train' => $train,'form' => $form->createView()));
        }
   
    
     public  function showAction(){
         
         $em=$this->getDoctrine()->getManager();
         $train=$em->getRepository("OCPAppliBundle:train")->findAll();
        return  $this->render("OCPAppliBundle:Train:show.html.twig",array("train"=>$train));
    }
}
