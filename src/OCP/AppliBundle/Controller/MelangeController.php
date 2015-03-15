<?php

namespace OCP\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OCP\AppliBundle\Entity\Melange;
use OCP\AppliBundle\Form\MelangeType;
use OCP\AppliBundle\Form\EditMelangeType;

class MelangeController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCPAppliBundle:melange:index.html.twig');
    }
     public function addAction()
    {
         $mel=new Melange();
         $form=$this->createForm(new MelangeType,$mel);
         $request=$this->getRequest('request');
         
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($mel);
            $em->flush();
            $this->redirect($this->generateUrl("ocp_appli_melange"));
             }
            
         }
        return $this->render('OCPAppliBundle:Melange:ajouter.html.twig',array("form"=>$form->createView()));
    }
     public function editAction(Melange $p)
    {
         
         $form=$this->createForm(new EditMelangeType(),$p);
         $request=$this->getRequest('request');
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid()){
             $em=$this->getDoctrine()->getManager();
             $em->persist($p);
             $em->flush();
            
             }
             return  $this->redirect($this->generateUrl("ocp_appli_showmelange"));
         }
      
        return $this->render('OCPAppliBundle:Melange:modifier.html.twig',array("form"=>$form->createView(),"melange"=>$p));
    }
     public function deleteAction(Melange $p)
    {
         $form=$this->createFormBuilder()->getForm();
         $request=$this->getRequest("request");
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid())
             {
                 if($request->get("rep")=="oui"){
                 $em=$this->getDoctrine()->getManager();
                 $em->remove($p);
                 $em->flush();
                 }
                 
             }
           
            return $this->redirect($this->generateUrl("ocp_appli_showmelange"));
         }
         
        return $this->render('OCPAppliBundle:Melange:supprimer.html.twig',array("form"=>$form->createView(),"melange"=>$p));
    }
    
      public function showAction()
    {
        $em=$this->getDoctrine()->getManager();
        $Melange=$em->getRepository("OCPAppliBundle:Melange")->findAll();
        return $this->render('OCPAppliBundle:Melange:show.html.twig',array("melange"=>$Melange));
    }
}
