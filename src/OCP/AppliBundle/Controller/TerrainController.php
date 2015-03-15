<?php

namespace OCP\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OCP\AppliBundle\Entity\terrain;
use OCP\AppliBundle\Form\terrainType;
use OCP\AppliBundle\Form\EditTerrainType;

class TerrainController extends Controller
{
    public  function indexAction(){
        return  $this->render("OCPAppliBundle:terrain:index.html.twig");
    }
    
    public  function addAction(){
         
        $terrain=new terrain();
        $form=$this->createForm(new terrainType(),$terrain);
        $request=$this->getRequest("request");
        if($request->getMethod()=="POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em=$this->getDoctrine()->getManager();
                $em->persist($terrain);
                $em->flush();
            }
            return $this->redirect($this->generateUrl("ocp_appli_showterrain"));
        }
         
        return  $this->render("OCPAppliBundle:terrain:ajouter.html.twig",array("form"=>$form->createView()));
    }
     public  function editAction(terrain $terrain){
         
         $form=$this->createForm(new EditTerrainType(), $terrain);
         $request=$this->getRequest();
         if($request->getMethod()=="POST")
         {
             $form->bind($request);
             if($form->isValid())
             {
                 $em=$this->getDoctrine()->getManager();
                 $em->persist($terrain);
                 $em->flush();
             }
                     
             return $this->redirect($this->generateUrl("ocp_appli_showterrain"));
         }
        return  $this->render("OCPAppliBundle:terrain:modifier.html.twig",array("form"=>$form->createView(),"terrain"=>$terrain));
    }
     public function deleteAction(terrain $p)
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
                 
            return $this->redirect($this->generateUrl("ocp_appli_showterrain")); 
                 
             }
          
         }
         
        return $this->render('OCPAppliBundle:terrain:supprimer.html.twig',array("form"=>$form->createView(),"terrain"=>$p));
    }
  
    
    
     public  function showAction(){
         
         $em=$this->getDoctrine()->getManager();
         $train=$em->getRepository("OCPAppliBundle:terrain")->findAll();
        return  $this->render("OCPAppliBundle:terrain:show.html.twig",array("terrain"=>$train));
    }
    
    
    public  function searchAction()
    {
        return array(
          'reselt'=>$this->getRequest()->get("nom"),
            
        );
    }
    
    
}
