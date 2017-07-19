<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{
    
    public function indexAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
        $history = str_replace("\n", "<br/>", current($institution)->getHistoria());
        $data = array('title' => 'Historia', 'information' => 'general', 'institution' => $history);
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
    }
    
    public function showDescriptionAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
        $data = array('title' => 'Descripción General', 'information' => 'general', 'institution' => current($institution)->getDescripcion());
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
    }
    
    public function showObjectivesAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
        $data = array('title' => 'Objetivos', 'information' => 'general', 'institution' => current($institution)->getObjetivos());
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
    }
    
    public function showVisionAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
        $data = array('title' => 'Visión', 'information' => 'general', 'institution' => current($institution)->getVision());
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
    }
    
    public function showMisionAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
        $data = array('title' => 'Misión', 'information' => 'general', 'institution' => current($institution)->getMision());
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
    }
    
    public function showManagersAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
        $information = current($institution)->getEncargados() .'<h3>Teléfono</h3><p>'.current($institution)->getTelefono().'</p>';
        $data = array('title' => 'Encargados', 'information' => 'general', 'institution' => $information);
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
    }
    
    public function showGalleryAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
        $data = array('title' => 'Galería', 'information' => 'general');
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
    }
    
    public function showVocationalAreaAction(){
        return $this->render('CELiceoParaisoBundle:Default:area_view.html.twig');
    }
    
    public function showNocturnalAreaAction(){
        return $this->render('CELiceoParaisoBundle:Default:area_view.html.twig');
    }
    
    public function showDiurnalAreaAction(){
        return $this->render('CELiceoParaisoBundle:Default:area_view.html.twig');
    }
    
    public function showUbicationAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
        $data = array('title' => 'Ubicación', 'information' => 'map', 'institution' => current($institution));
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
    }
}
