<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // ce_liceo_paraiso_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ce_liceo_paraiso_homepage',);
        }

        // ce_liceo_paraiso_description
        if ($pathinfo === '/description') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\DefaultController::showDescriptionAction',  '_route' => 'ce_liceo_paraiso_description',);
        }

        // ce_liceo_paraiso_objectives
        if ($pathinfo === '/objectives') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\DefaultController::showObjectivesAction',  '_route' => 'ce_liceo_paraiso_objectives',);
        }

        // ce_liceo_paraiso_vision
        if ($pathinfo === '/vision') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\DefaultController::showVisionAction',  '_route' => 'ce_liceo_paraiso_vision',);
        }

        // ce_liceo_paraiso_mision
        if ($pathinfo === '/mision') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\DefaultController::showMisionAction',  '_route' => 'ce_liceo_paraiso_mision',);
        }

        // ce_liceo_paraiso_managers
        if ($pathinfo === '/information') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\DefaultController::showManagersAction',  '_route' => 'ce_liceo_paraiso_managers',);
        }

        // ce_liceo_paraiso_gallery
        if ($pathinfo === '/gallery') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\DefaultController::showGalleryAction',  '_route' => 'ce_liceo_paraiso_gallery',);
        }

        // ce_liceo_paraiso_vocational
        if ($pathinfo === '/vocational_area') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AreaController::showVocationalAreaAction',  '_route' => 'ce_liceo_paraiso_vocational',);
        }

        // ce_liceo_paraiso_nocturnal
        if ($pathinfo === '/nocturnal_area') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AreaController::showNocturnalAreaAction',  '_route' => 'ce_liceo_paraiso_nocturnal',);
        }

        // ce_liceo_paraiso_diurnal
        if ($pathinfo === '/diurnal_area') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AreaController::showDiurnalAreaAction',  '_route' => 'ce_liceo_paraiso_diurnal',);
        }

        // ce_liceo_paraiso_ubication
        if ($pathinfo === '/ubication') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\DefaultController::showUbicationAction',  '_route' => 'ce_liceo_paraiso_ubication',);
        }

        // ce_liceo_paraiso_login
        if ($pathinfo === '/singup') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::loginAction',  '_route' => 'ce_liceo_paraiso_login',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
