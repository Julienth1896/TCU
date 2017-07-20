<?php

class AdministratorController {
    
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
