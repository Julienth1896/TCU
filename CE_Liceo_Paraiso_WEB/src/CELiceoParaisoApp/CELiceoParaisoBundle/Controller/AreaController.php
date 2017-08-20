<?php
namespace CELiceoParaisoApp\CELiceoParaisoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AreaController extends Controller{
    
    public function showVocationalAreaAction(){
        session_start();
        if (isset($_SESSION['usuario'])) {
            
        }//existe sesión abierta
        else{
            $em = $this->getDoctrine()->getEntityManager();
            $area = $em->getRepository('CELiceoParaisoBundle:Area')->findBy(array('nombre'=>'Vocacional'));
            $data = array('area'=>current($area));
            return $this->render('CELiceoParaisoBundle:Default:area_view.html.twig', $data);
        }//sesión cerrada
    }
    
    public function showNocturnalAreaAction(){
        session_start();
        if (isset($_SESSION['usuario'])) {
            
        }//existe sesión abierta
        else{
            $em = $this->getDoctrine()->getEntityManager();
            $area = $em->getRepository('CELiceoParaisoBundle:Area')->findBy(array('nombre'=>'Nocturna'));
            $data = array('subinformation'=>'description', 'area'=>current($area));
            return $this->render('CELiceoParaisoBundle:Default:area_view.html.twig', $data);
        }//sesión cerrada
    }
    
    public function showDiurnalAreaAction(){
        session_start();
        if (isset($_SESSION['usuario'])) {
            
        }//existe sesión abierta
        else{
            $em = $this->getDoctrine()->getEntityManager();
            $area = $em->getRepository('CELiceoParaisoBundle:Area')->findBy(array('nombre'=>'Diurna'));
            $data = array('subinformation'=>'description', 'area'=>current($area));
            return $this->render('CELiceoParaisoBundle:Default:area_view.html.twig', $data);
        }//sesión cerrada
    }
}//AREA CONTROLLER
