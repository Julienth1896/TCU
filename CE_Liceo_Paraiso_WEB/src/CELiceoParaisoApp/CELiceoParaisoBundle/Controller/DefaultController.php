<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        $data = array('title' => '¡Bienvenido a nuestro sitio!', 'information' => 'home');
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
    }

    public function aboutUsAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre' => 'Liceo de Paraíso'));
        $data = array('history' => nl2br(current($institution)->getHistoria()),
            'vision' => current($institution)->getVision(),
            'mision' => current($institution)->getMision());
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', array('title' => '¿Quiénes Somos?', 'information' => 'about', 'institution' => $data));
    }

    public function showUbicationAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre' => 'Liceo de Paraíso'));
        $data = array('title' => 'Ubicación', 'information' => 'map', 'institution' => current($institution));
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
    }

    public function showCreditsAction() {
        $data = array('title' => 'Créditos', 'information' => 'credits');
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
    }
    
    public function showGalleryAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre' => 'Liceo de Paraíso'));
        $data = array('title' => 'Galería', 'information' => 'general');
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
    }

}
