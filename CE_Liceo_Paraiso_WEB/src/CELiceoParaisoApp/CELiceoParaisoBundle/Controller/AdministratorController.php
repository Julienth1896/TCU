<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Administrador;
use CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Usuario;
use CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Departamento;
use CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Personal;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use CELiceoParaisoApp\CELiceoParaisoBundle\Models\Document;

class AdministratorController extends Controller {

    public function loginAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $em = $this->getDoctrine()->getEntityManager();
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
            switch ($type) {
                case 'general':
                    $data = array('title' => 'Inicio', 'user'=>$user);
                    return $this->render('CELiceoParaisoBundle:Administrator:administration_general.html.twig', $data);
                case 'area':
                    return $this->render('CELiceoParaisoBundle:Adm_Area:administration_area.html.twig', $data);
                case 'departament':
                    return $this->render('CELiceoParaisoBundle:Adm_Dep:administration_departament.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function changePassFormAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            return $this->render('CELiceoParaisoBundle:Administrator:changePassword.html.twig', array('passOld'=>$_SESSION['pass']));
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }
    
    public function checkUserAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            $em = $this->getDoctrine()->getEntityManager();
            $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
            switch ($type) {
                case 'general':
                    $data = array('title' => 'Inicio', 'user'=>$user);
                    return $this->render('CELiceoParaisoBundle:Administrator:administration_general.html.twig', $data);
                case 'area':
                    return $this->render('CELiceoParaisoBundle:Adm_Area:administration_area.html.twig', $data);
                case 'departament':
                    return $this->render('CELiceoParaisoBundle:Adm_Dep:administration_departament.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            $username = $_POST['form-username'];
            $pass = $_POST['form-password'];

            $data = array('usuario' => $username, 'clave' => $pass);

            $em = $this->getDoctrine()->getEntityManager();
            $users = $em->getRepository('CELiceoParaisoBundle:Usuario')->findBy($data);
            $user = current($users);

            if (isset($user)) {
                #guardar los datos del usuario
                $_SESSION['user'] = $username;
                $_SESSION['pass'] = $pass;
                $_SESSION['administrator'] = $user->getAdministrador()->getCodigo();
                $_SESSION['codPersonal'] = $user->getAdministrador()->getCodigoPersonal()->getCodigo();
                if(substr($user->getClave(), -4) === 'T3MP'){
                    return $this->render('CELiceoParaisoBundle:Administrator:changePassword.html.twig', array('passOld'=>$_SESSION['pass']));
                }
                $type = $this->getTypeAdministrator($user->getAdministrador()->getCodigo());
                $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                switch ($type) {
                    case 'general':
                        $data = array('title' => 'Inicio', 'user'=>$user);
                        return $this->render('CELiceoParaisoBundle:Administrator:administration_general.html.twig', $data);
                    case 'area':
                        return $this->render('CELiceoParaisoBundle:Adm_Area:administration_area.html.twig', $data);
                    case 'departament':
                        return $this->render('CELiceoParaisoBundle:Adm_Dep:administration_departament.html.twig', $data);
                    default:
                        return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
                }
            }//el usuario existe

            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig', array('alert' => 'ERROR'));
        }//la sesión está cerrada
    }
    
    public function changePassAction() {
        session_start();
        $passOld = $_POST['passOld'];
        $newPass = $_POST['passNew'];
        $confirmPass = $_POST['confirmPass'];

        if($passOld === $_SESSION['pass']){
            if($newPass === $confirmPass){
                $_SESSION['pass'] = $newPass;
                $em = $this->getDoctrine()->getEntityManager();
                $users = $em->getRepository('CELiceoParaisoBundle:Usuario')->findBy(array('usuario'=>$_SESSION['user']));
                $user = current($users);
                $user->setClave($newPass);
                $em->persist($user);
                $em->flush();
                $_SESSION['user'] = null;
                session_destroy();
                return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig', array('alert'=>'success'));
            }else{
                return $this->render('CELiceoParaisoBundle:Administrator:changePassword.html.twig', array('alert'=>'La nueva contraseña no es la misma', 'passOld'=>$_SESSION['pass']));
            }
        }else{
            return $this->render('CELiceoParaisoBundle:Administrator:changePassword.html.twig', array('alert'=>'La contraseña temporal no es correcta', 'passOld'=>$_SESSION['pass']));
        }
    }

    public function homeAdminAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $em = $this->getDoctrine()->getEntityManager();
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
            switch ($type) {
                case 'general':
                    $data = array('title' => 'Inicio', 'user'=>$user);
                    return $this->render('CELiceoParaisoBundle:Administrator:administration_general.html.twig', $data);
                case 'area':
                    return $this->render('CELiceoParaisoBundle:Adm_Area:administration_area.html.twig', $data);
                case 'departament':
                    return $this->render('CELiceoParaisoBundle:Adm_Dep:administration_departament.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function institutionAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre' => 'Liceo de Paraíso'));
                    $data = array('title' => 'Liceo Paraíso', 'institution' => current($institution), 'user'=>$user);
                    return $this->render('CELiceoParaisoBundle:Administrator:institution.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function updateHistoryAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $institutions = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre' => 'Liceo de Paraíso'));
                    $institution = current($institutions);
                    $institution->setHistoria($_POST['history']);
                    $em->flush();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $data = array('title' => 'Liceo Paraíso', 'institution' => $institution, 'alert' => 'success', 'user'=>$user);
                    return $this->render('CELiceoParaisoBundle:Administrator:institution.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function updateVisionAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $institutions = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre' => 'Liceo de Paraíso'));
                    $institution = current($institutions);
                    $institution->setVision($_POST['vision']);
                    $em->flush();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $data = array('title' => 'Liceo Paraíso', 'institution' => $institution, 'alert' => 'success','user'=>$user);
                    return $this->render('CELiceoParaisoBundle:Administrator:institution.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function updateMisionAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $institutions = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre' => 'Liceo de Paraíso'));
                    $institution = current($institutions);
                    $institution->setMision($_POST['mision']);
                    $em->flush();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $data = array('title' => 'Liceo Paraíso', 'institution' => $institution, 'alert' => 'success','user'=>$user);
                    return $this->render('CELiceoParaisoBundle:Administrator:institution.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function updateManagementAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $institutions = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre' => 'Liceo de Paraíso'));
                    $institution = current($institutions);
                    $institution->setEncargados($_POST['managers']);
                    $institution->setTelefono($_POST['telephone']);
                    $em->flush();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $data = array('title' => 'Liceo Paraíso', 'institution' => $institution, 'alert' => 'success', 'user'=>$user);
                    return $this->render('CELiceoParaisoBundle:Administrator:institution.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function areaNocturnAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $area = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo'=>1));
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $data = array();
                    if($this->isAdministratorOfArea($area, $_SESSION['administrator'])){
                        $data = array('title' => 'Área Nocturna', 'area' => $area, 'teachers'=>$teachers, 'administrator'=>'true', 'adm'=>$_SESSION['administrator'], 'user'=>$user);
                    }else{
                        $data = array('title' => 'Área Nocturna', 'area' => $area, 'teachers'=>$teachers, 'adm'=>$_SESSION['administrator'], 'user'=>$user);
                    }
                    return $this->render('CELiceoParaisoBundle:Administrator:section.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }
    
    public function planNationalAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $area = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo'=>2));
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $data = array();
                    if($this->isAdministratorOfArea($area, $_SESSION['administrator'])){
                        $data = array('title' => 'Plan Nacional', 'area' => $area, 'teachers'=>$teachers, 'administrator'=>'true', 'adm'=>$_SESSION['administrator'], 'user'=>$user);
                    }else{
                        $data = array('title' => 'Plan Nacional', 'area' => $area, 'teachers'=>$teachers, 'adm'=>$_SESSION['administrator'], 'user'=>$user);
                    }
                    return $this->render('CELiceoParaisoBundle:Administrator:section.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }
    
    public function responsableAreaAction($code) {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $area = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo'=>$code));
                    $teacher = $em->getRepository('CELiceoParaisoBundle:Personal')->find(array('codigo'=>$_POST['codeTeacher']));
                    $oldAdministrator = $area->getAdministrador();
                    
                    #Almaceno el correo del profesor
                    $teacher->setCorreo($_POST['emailTeacher']);
                    $em->flush();
                    
                    $this->setResponsableArea($area, $teacher, $_POST['telephoneTeacher']);
                    $this->removeAdministrator($oldAdministrator, $oldAdministrator->getCodigoPersonal());
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $title='Plan Nacional';
                    if($code == 1){
                        $title = 'Área Nocturna';
                    }
                    $data = array('title' => $title, 'area' => $area, 'teachers'=>$teachers, 'alert'=>'success', 'adm'=>$_SESSION['administrator'], 'user'=>$user);
                    if($this->isAdministratorOfArea($area, $_SESSION['administrator'])){
                        $data = array('title' => $title, 'area' => $area, 'teachers'=>$teachers, 'alert'=>'success', 'administrator'=>'true', 'adm'=>$_SESSION['administrator'], 'user'=>$user);
                    }
                    return $this->render('CELiceoParaisoBundle:Administrator:section.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function descriptionAreaAction($codeArea) {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $area = $em->getRepository('CELiceoParaisoBundle:Area')->findOneBy(array('codigo' =>$codeArea));
                    $area->setDescripcion($_POST['description']);
                    $em->flush();
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    $title='Plan Nacional';
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    if($codeArea == 1){
                        $title = 'Área Nocturna';
                    }
                    $data = array('title' => $title, 'area' => $area, 'teachers'=>$teachers, 'alert'=>'success', 'adm'=>$_SESSION['administrator'], 'user'=>$user);
                    if($this->isAdministratorOfArea($area, $_SESSION['administrator'])){
                        $data = array('title' => $title, 'area' => $area, 'teachers'=>$teachers, 'alert'=>'success', 'administrator'=>'true', 'adm'=>$_SESSION['administrator'], 'user'=>$user);
                    }
                    
                    return $this->render('CELiceoParaisoBundle:Administrator:section.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }
    
    public function showDepartamentsOfAreaAction($area) {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $areaTemp = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo'=>$area));
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $data = array();
                    $title = "Área Nocturna";
                    if($area == 2)
                        $title = "Plan Nacional";
                    if($this->isAdministratorOfArea($areaTemp, $_SESSION['administrator'])){
                        $data = array('title' => $title, 'area' => $areaTemp, 'teachers'=>$teachers, 'administrator'=>'true', 'adm'=>$_SESSION['administrator'], 'user'=>$user);
                    }else{
                        $data = array('title' => $title, 'area' => $areaTemp, 'teachers'=>$teachers, 'adm'=>$_SESSION['administrator'], 'user'=>$user);
                    }
                    return $this->render('CELiceoParaisoBundle:Administrator:departments_area.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }
    
    public function addDepartmentAction($code) {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $teacher = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo' =>$_POST['codTeach']));
                    $teacher->setCorreo($_POST['emailTeach']);
                    $em->persist($teacher);
                    $em->flush();
                    $telephone = $_POST['telephoneTeach'];
                    $department = new Departamento();
                    $department->setNombre($_POST['nameDepart']);
                    $department->setDescripcion($_POST['descriptionDepart']);
                    $department->setAdministrador($this->setAdministrator($teacher, $telephone));
                    $alert = "";
                    try{
                        $em->persist($department);
                        $alert = "success";
                        $area = $em->getRepository('CELiceoParaisoBundle:Area')->findOneBy(array('codigo' =>$code));
                        $area->addDepartamento($department);
                    } catch (Exception $ex) {
                        //El departamento ya existe
                        $alert = "El departamento ya se encuentra registrado";
                    }
                    $em->flush();             
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $title='Plan Nacional';
                    if($code == 1){
                        $title = 'Área Nocturna';
                    }
                    $data = array('title' => $title, 'area' => $area, 'teachers'=>$teachers, 'alert'=>$alert, 'adm'=>$_SESSION['administrator'], 'user'=>$user);
                    if($this->isAdministratorOfArea($area, $_SESSION['administrator'])){
                        $data = array('title' => $title, 'area' => $area, 'teachers'=>$teachers, 'alert'=>$alert, 'administrator'=>'true', 'adm'=>$_SESSION['administrator'], 'user'=>$user);
                    }
                    return $this->render('CELiceoParaisoBundle:Administrator:section.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }
    
    public function showDetailDepartmentAction($area, $department) {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $areaTemp = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo'=>$area));
                    $areas = $em->getRepository('CELiceoParaisoBundle:Area')->findAll();
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $departm = $em->getRepository('CELiceoParaisoBundle:Departamento')->find(array('codigo'=>$department));
                    $data = array();
                    $title = "Área Nocturna";
                    if($area == 2)
                        $title = "Plan Nacional";
                    if($this->isAdministratorOfArea($areaTemp, $_SESSION['administrator'])){
                        $data = array('title' => $title, 'area' => $areaTemp, 'teachers'=>$teachers, 
                            'administrator'=>'true', 'adm'=>$_SESSION['administrator'], 'user'=>$user, 
                            "areas"=>$areas, 'department'=>$departm);
                    }else{
                        $data = array('title' => $title, 'area' => $areaTemp, 'teachers'=>$teachers, 
                            'adm'=>$_SESSION['administrator'], 'user'=>$user, "areas"=>$areas, 'department'=>$departm);
                    }
                    return $this->render('CELiceoParaisoBundle:Administrator:detail_department.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrad
    }
    
    public function showPersonalOfAreaAction($area) {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $areaTemp = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo'=>$area));
                    $areas = $em->getRepository('CELiceoParaisoBundle:Area')->findAll();
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $data = array();
                    $title = "Área Nocturna";
                    if($area == 2)
                        $title = "Plan Nacional";
                    if($this->isAdministratorOfArea($areaTemp, $_SESSION['administrator'])){
                        $data = array('title' => $title, 'area' => $areaTemp, 'teachers'=>$teachers, 'administrator'=>'true', 'adm'=>$_SESSION['administrator'], 'user'=>$user, "areas"=>$areas);
                    }else{
                        $data = array('title' => $title, 'area' => $areaTemp, 'teachers'=>$teachers, 'adm'=>$_SESSION['administrator'], 'user'=>$user, "areas"=>$areas);
                    }
                    return $this->render('CELiceoParaisoBundle:Administrator:personal_area.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrad
    }
    
    public function newPersonalAction($area) {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $areaTemp = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo'=>$area));
                    $personal = new Personal();
                    $personal->setNombre($_POST['name']);
                    $personal->setApellidos($_POST['lastname']);
                    $personal->setCorreo($_POST['email']);
                    $areaTemp->addPersonal($personal);
                    
                    $alert = "success";
                    try {
                        $em->persist($personal);
                        $em->flush();
                    } catch (Exception $ex) {
                        $alert = "El docente ya se encuentra registrado en la base de datos.";
                    } 
                                        
                    $areas = $em->getRepository('CELiceoParaisoBundle:Area')->findAll();
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $data = array();
                    $title = "Área Nocturna";
                    if($area == 2)
                        $title = "Plan Nacional";
                    if($this->isAdministratorOfArea($areaTemp, $_SESSION['administrator'])){
                        $data = array('title' => $title, 'alert'=>$alert, 'area' => $areaTemp, 'teachers'=>$teachers, 'administrator'=>'true', 'adm'=>$_SESSION['administrator'], 'user'=>$user, "areas"=>$areas);
                    }else{
                        $data = array('title' => $title, 'alert'=>$alert, 'area' => $areaTemp, 'teachers'=>$teachers, 'adm'=>$_SESSION['administrator'], 'user'=>$user, "areas"=>$areas);
                    }
                    return $this->render('CELiceoParaisoBundle:Administrator:personal_area.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrad
    }
    
    public function deletePersonalOfAreaAction($area, $codTeacher) {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $areaTemp = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo'=>$area));
                    $teacher = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$codTeacher));
                    $alert = "success";
                    try{
                        $em->remove($teacher);
                        $areaTemp->removePersonal($teacher);
                        $em->flush();
                    } catch (Exception $ex) {
                        $alert = "El personal es administrador, por favor retirelo de esos cargos y luego elimínelo.";
                        $areaTemp->removePersonal($teacher);
                        $em->flush();
                    }
                    
                    $areas = $em->getRepository('CELiceoParaisoBundle:Area')->findAll();
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $data = array();
                    $title = "Área Nocturna";
                    if($area == 2)
                        $title = "Plan Nacional";
                    if($this->isAdministratorOfArea($areaTemp, $_SESSION['administrator'])){
                        $data = array('title' => $title, 'alert'=>$alert, 'area' => $areaTemp, 'teachers'=>$teachers, 'administrator'=>'true', 'adm'=>$_SESSION['administrator'], 'user'=>$user, "areas"=>$areas);
                    }else{
                        $data = array('title' => $title, 'alert'=>$alert, 'area' => $areaTemp, 'teachers'=>$teachers, 'adm'=>$_SESSION['administrator'], 'user'=>$user, "areas"=>$areas);
                    }
                    return $this->render('CELiceoParaisoBundle:Administrator:personal_area.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrad
    }
    
    public function updatePersonalAction($area) {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    
                    $teacher = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_POST['codeTeacher']));
                    $teacher->setCorreo($_POST['emailTeacher']);
                    $em->flush();
                    $alert = "success";
                    $areaTemp = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo'=>$area));
                    $areas = $em->getRepository('CELiceoParaisoBundle:Area')->findAll();
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    $user = $em->getRepository('CELiceoParaisoBundle:Personal')->findOneBy(array('codigo'=>$_SESSION['codPersonal']));
                    $data = array();
                    $title = "Área Nocturna";
                    if($area == 2)
                        $title = "Plan Nacional";
                    if($this->isAdministratorOfArea($areaTemp, $_SESSION['administrator'])){
                        $data = array('title' => $title, 'alert'=>$alert, 'area' => $areaTemp, 'teachers'=>$teachers, 'administrator'=>'true', 'adm'=>$_SESSION['administrator'], 'user'=>$user, "areas"=>$areas);
                    }else{
                        $data = array('title' => $title, 'alert'=>$alert, 'area' => $areaTemp, 'teachers'=>$teachers, 'adm'=>$_SESSION['administrator'], 'user'=>$user, "areas"=>$areas);
                    }
                    return $this->render('CELiceoParaisoBundle:Administrator:personal_area.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrad
    }
    
    public function logoutAction() {
        session_start();
        //se elimina la sesión
        $_SESSION['user'] = null;
        session_destroy();

        return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
    }/* cierra la sesión del usuario */

    private function getTypeAdministrator($administrator) {
        $em = $this->getDoctrine()->getEntityManager();
        $typeAdministration = "departament";
        $areas = $em->getRepository('CELiceoParaisoBundle:Area')->findBy(array('administrador' => $administrator));
        foreach($areas as $area){
            if ($area->getCodigo() === 3) {
                $typeAdministration = "general";
                return $typeAdministration;
            } else {
                $typeAdministration = "area";
            }
        }
        return $typeAdministration;
    }
    
    private function isAdministratorOfArea($area, $administrator){
        if($area->getAdministrador()->getCodigo() === $administrator)
            return true;
        return false;
    }
    
    private function setResponsableArea($area, $teacher, $telephone){
        $em = $this->getDoctrine()->getEntityManager();
        $areaTemp = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo' => $area->getCodigo(), 'nombre'=>$area->getNombre()));
        $administrators = $em->getRepository('CELiceoParaisoBundle:Administrador')->findBy(array('codigoPersonal' => $teacher));
        $administrator = current($administrators);
        
        if($administrator != null){
            $areaTemp->setAdministrador($administrator);
            $em->flush();
        }//el profesor es administrador
        else{
            $administrator = new Administrador();
            $administrator->setTelefono($telephone);
            $administrator->setCodigoPersonal($teacher);
            $em->persist($administrator);
            
            $areaTemp->setAdministrador($administrator);
            
            $em->flush();
            
            #se crea un nuevo usuario
            $this->createNewUser($teacher, $administrator);
        }//el administrador no existe
    }
    
    private function removeAdministrator($administrator, $teacher){
        $em = $this->getDoctrine()->getEntityManager();
        $areas = $em->getRepository('CELiceoParaisoBundle:Area')->findAll();
        foreach ($areas as $areaTemp){
            if($areaTemp->getAdministrador() === $administrator)
                return false;
        }//reviso que el administrador no sea administrador de otra area
        $departments = $em->getRepository('CELiceoParaisoBundle:Departamento')->findAll();
        foreach ($departments as $departmentTemp){
            if($departmentTemp->getAdministrador() === $administrator)
                return false;
        }//reviso que el administrador no sea administrador de otro departamento
        
        //si llega hasta aquí no es administrador de otra área ni otro departamento por lo que se debe eliminar de
        //los usuarios y la tabla de administradores
        $users = $em->getRepository('CELiceoParaisoBundle:Usuario')->findBy(array('administrador'=>$administrator));
        $user = current($users);
        $em->remove($user);
        $em->flush();
        $em->remove($administrator);
        $em->flush();   
        
        #validar que el usuario tiene correo
        if($teacher->getCorreo() != null){
            //Enviar un correo para avisar que ha sido removido del cargo
            $this->sendEmailRemovePosition($administrator->getCodigoPersonal());
        }
    }
                   
    private function createNewUser($teacher, $administrator){
        $em = $this->getDoctrine()->getEntityManager();
        $user = new Usuario();
        
        $username = strtolower(strstr($teacher->getNombre(), " ", true)) . "." . strtolower(strstr($teacher->getApellidos(), " ", true));
        $pass = $this->generateTempPass();
        $user->setAdministrador($administrator);
        $user->setUsuario($username);
        $user->setClave($pass);
        $em->persist($user);
        $em->flush();
        
        $this->sendEmailAddPosition($user, $teacher);
    }
    
    private function setAdministrator($teacher, $telephone){
        $em = $this->getDoctrine()->getEntityManager();
        $administrator = $em->getRepository('CELiceoParaisoBundle:Administrador')->findOneBy(array('codigoPersonal' => $teacher));
        if($administrator != null){
            $administrator->setTelefono($telephone);
            $em->flush();
        }else{
            $administrator = new Administrador();
            $administrator->setCodigoPersonal($teacher);
            $administrator->setTelefono($telephone);
            $em->persist($administrator);
            $em->flush();
            $this->createNewUser($teacher, $administrator);
        }
        return $administrator;
    }
    
    private function sendEmailAddPosition($user, $teacher){
        $datos = "Estimado docente, usted ha sido registrado en el Sistema CELIPA Admin, del Liceo de Paraíso,"
                . " por lo cual a través de este correo se le envía el usuario y la contraseña temporal que deberá "
                . "utilizar para ingresar en el sistema. \n"
                . "Recuerde que la contraseña es temporal por lo que deberá cambiarla la primera vez que inicie sesión "
                . " a su respectiva contraseña personal. Muchas gracias.\n\n\n"
                . "Usuario: " . $user->getUsuario() . "\n"
                . "Contraseña: " . $user->getClave() . "\n"
                . "Nota: Por su seguridad no mantenga esta información al acceso de terceras personas.\n\n\n"
                . "Atentamente;\n"
                . "Administración del Sistema CELIPA Admin\n"
                . "Paraíso, Cartago";
        
        $mailer = $this->container->get('mailer');
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername('ce.liceo.paraiso@gmail.com')
                ->setPassword('paraiso.2016');
        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Mensaje Administración CELIPA Admin')
                ->setSubject('CELIPA Admin')
                ->setFrom('ce.liceo.paraiso@gmail.com')
                ->setTo($teacher->getCorreo())
                ->setBody($datos);
        $this->get('mailer')->send($message);
    }
    
    private function sendEmailRemovePosition($teacher) {
        $datos = "Estimado docente, usted ha sido removido como administrador del sistema CELIPA Admin del colegio Liceo de "
                . "Paraíso, por lo cual no podrá ingresar como administrador a dicho sistema."
                . "\n\nSi tiene alguna duda por favor consulte con el adminitrador del sitio."
                . "Nota: No responda a este mensaje.\n\n\n"
                . "Atentamente;\n"
                . "Administración CELIPA Admin\n"
                . "Paraíso, Cartago";

        $mailer = $this->container->get('mailer');
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername('ce.liceo.paraiso@gmail.com')
                ->setPassword('paraiso.2016');
        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Mensaje Administración CELIPA Admin')
                ->setSubject('CELIPA Admin')
                ->setFrom('ce.liceo.paraiso@gmail.com')
                ->setTo($teacher->getCorreo())
                ->setBody($datos);
        $this->get('mailer')->send($message);
    } 
    
    private function generateTempPass(){
        $ABC = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longitudABC = strlen($ABC);
        $passTemp = "";

        $posLetraAleatoria = rand(0, $longitudABC - 1);
        $passTemp .= substr($ABC, $posLetraAleatoria, 1);
        for ($i = 0; $i <= 5; $i++) {
            $pos = rand(1, 100);
            $passTemp .= $pos;
        }//se genera una contraseña
        
        $passTemp .= 'T3MP';
        
        return $passTemp;
    }  
}/*ADMINISTRATOR CONTROLLER*/
