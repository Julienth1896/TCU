<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministratorController extends Controller{
    
    public function loginAction(){
        session_start();
        if (isset($_SESSION['usuario'])) {
            
        }//existe sesión abierta
        else{
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }
    
    public function logoutAction(){
        session_start();
        
        //se elimina la sesión
        $_SESSION['usuario'] = null;
        session_destroy();
        
        //se muestra la primer página del sitio de visitantes
        $em = $this->getDoctrine()->getEntityManager();
        $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre'=>'Liceo de Paraíso'));
        $history = str_replace("\n", "<br/>", current($institution)->getHistoria());
        $data = array('title' => 'Historia', 'information' => 'general', 'institution' => $history);
        return $this->render('CELiceoParaisoBundle:Default:index.html.twig', $data);
    }//cierra la sesión del usuario
    
}//ADMINISTRATOR CONTROLLER
