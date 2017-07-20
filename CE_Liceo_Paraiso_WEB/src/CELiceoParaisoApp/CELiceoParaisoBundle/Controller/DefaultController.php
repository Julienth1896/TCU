<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{
    
    public function indexAction(){
        session_start();
        if (isset($_SESSION['usuario'])) {
            
        }//existe sesión abierta
        else{
            $em = $this->getDoctrine()->getEntityManager();
            $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
            $history = str_replace("\n", "<br/>", current($institution)->getHistoria());
            $data = array('title' => 'Historia', 'information' => 'general', 'institution' => $history);
            return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
        }//la sesión está cerrada
    }
    
    public function showDescriptionAction(){
        session_start();
        if (isset($_SESSION['usuario'])) {
            
        }//existe sesión abierta
        else{
            $em = $this->getDoctrine()->getEntityManager();
            $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
            $data = array('title' => 'Descripción General', 'information' => 'general', 'institution' => current($institution)->getDescripcion());
            return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
        }//la sesión está cerrada
    }
    
    public function showObjectivesAction(){
        session_start();
        if (isset($_SESSION['usuario'])) {
            
        }//existe sesión abierta
        else{
            $em = $this->getDoctrine()->getEntityManager();
            $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
            $data = array('title' => 'Objetivos', 'information' => 'general', 'institution' => current($institution)->getObjetivos());
            return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
        }//sesión cerrada
    }
    
    public function showVisionAction(){
        session_start();
        if (isset($_SESSION['usuario'])) {
            
        }//existe sesión abierta
        else{
            $em = $this->getDoctrine()->getEntityManager();
            $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
            $data = array('title' => 'Visión', 'information' => 'general', 'institution' => current($institution)->getVision());
            return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
        }//sesión cerrada
    }
    
    public function showMisionAction(){
        session_start();
        if (isset($_SESSION['usuario'])) {
            
        }//existe sesión abierta
        else{
            $em = $this->getDoctrine()->getEntityManager();
            $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
            $data = array('title' => 'Misión', 'information' => 'general', 'institution' => current($institution)->getMision());
            return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
        }//sesión cerrada
    }
    
    public function showManagersAction(){
        session_start();
        if (isset($_SESSION['usuario'])) {
            
        }//existe sesión abierta
        else{
            $em = $this->getDoctrine()->getEntityManager();
            $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
            $information = current($institution)->getEncargados() .'<h3>Teléfono</h3><p>'.current($institution)->getTelefono().'</p>';
            $data = array('title' => 'Encargados', 'information' => 'general', 'institution' => $information);
            return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);    
        }//la sesión está cerrada
    }
    
    public function showGalleryAction(){
        session_start();
        if (isset($_SESSION['usuario'])) {
            
        }//existe sesión abierta
        else{
            $em = $this->getDoctrine()->getEntityManager();
            $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
            $data = array('title' => 'Galería', 'information' => 'general');
            return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
        }//sesión cerrada
    }
        
    public function showUbicationAction(){
        session_start();
        if (isset($_SESSION['usuario'])) {
            
        }//existe sesión abierta
        else{
            $em = $this->getDoctrine()->getEntityManager();
            $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
            $data = array('title' => 'Ubicación', 'information' => 'map', 'institution' => current($institution));
            return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
        }//sesión cerrada
    }
}
