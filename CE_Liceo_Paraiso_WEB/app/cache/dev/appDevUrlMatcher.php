<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // ce_liceo_paraiso_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ce_liceo_paraiso_homepage',);
        }

        // ce_liceo_paraiso_about_us
        if ($pathinfo === '/about_us') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\DefaultController::aboutUsAction',  '_route' => 'ce_liceo_paraiso_about_us',);
        }

        // ce_liceo_paraiso_ubication
        if ($pathinfo === '/ubication') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\DefaultController::showUbicationAction',  '_route' => 'ce_liceo_paraiso_ubication',);
        }

        // ce_liceo_paraiso_credits
        if ($pathinfo === '/credits') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\DefaultController::showCreditsAction',  '_route' => 'ce_liceo_paraiso_credits',);
        }

        // ce_liceo_paraiso_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::loginAction',  '_route' => 'ce_liceo_paraiso_login',);
        }

        // ce_liceo_paraiso_check_user
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::checkUserAction',  '_route' => 'ce_liceo_paraiso_check_user',);
        }

        // ce_liceo_paraiso_change_pass
        if ($pathinfo === '/pass') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::changePassAction',  '_route' => 'ce_liceo_paraiso_change_pass',);
        }

        // ce_liceo_paraiso_change_pass_form
        if ($pathinfo === '/form') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::changePassFormAction',  '_route' => 'ce_liceo_paraiso_change_pass_form',);
        }

        // ce_liceo_paraiso_dashboard
        if ($pathinfo === '/administrator') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::homeAdminAction',  '_route' => 'ce_liceo_paraiso_dashboard',);
        }

        if (0 === strpos($pathinfo, '/institution')) {
            // ce_liceo_paraiso_institution_admin
            if ($pathinfo === '/institution') {
                return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::institutionAction',  '_route' => 'ce_liceo_paraiso_institution_admin',);
            }

            if (0 === strpos($pathinfo, '/institution_')) {
                // ce_liceo_paraiso_institution_history
                if ($pathinfo === '/institution_history') {
                    return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::updateHistoryAction',  '_route' => 'ce_liceo_paraiso_institution_history',);
                }

                // ce_liceo_paraiso_institution_vision
                if ($pathinfo === '/institution_vision') {
                    return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::updateVisionAction',  '_route' => 'ce_liceo_paraiso_institution_vision',);
                }

                if (0 === strpos($pathinfo, '/institution_m')) {
                    // ce_liceo_paraiso_institution_mision
                    if ($pathinfo === '/institution_mision') {
                        return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::updateMisionAction',  '_route' => 'ce_liceo_paraiso_institution_mision',);
                    }

                    // ce_liceo_paraiso_institution_management
                    if ($pathinfo === '/institution_management') {
                        return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::updateManagementAction',  '_route' => 'ce_liceo_paraiso_institution_management',);
                    }

                }

            }

        }

        // ce_liceo_paraiso_area_nocturn
        if ($pathinfo === '/area_nocturn') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::areaNocturnAction',  '_route' => 'ce_liceo_paraiso_area_nocturn',);
        }

        // ce_liceo_paraiso_plan_national
        if ($pathinfo === '/plan_national') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::planNationalAction',  '_route' => 'ce_liceo_paraiso_plan_national',);
        }

        // ce_liceo_paraiso_responsable_area
        if (0 === strpos($pathinfo, '/area') && preg_match('#^/area/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ce_liceo_paraiso_responsable_area')), array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::responsableAreaAction',));
        }

        if (0 === strpos($pathinfo, '/de')) {
            // ce_liceo_paraiso_description_area
            if (0 === strpos($pathinfo, '/description_area') && preg_match('#^/description_area/(?P<codeArea>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ce_liceo_paraiso_description_area')), array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::descriptionAreaAction',));
            }

            // ce_liceo_paraiso_departaments
            if (0 === strpos($pathinfo, '/departaments') && preg_match('#^/departaments/(?P<area>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ce_liceo_paraiso_departaments')), array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::showDepartamentsOfAreaAction',));
            }

        }

        // ce_liceo_paraiso_add_department
        if (0 === strpos($pathinfo, '/new_department') && preg_match('#^/new_department/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ce_liceo_paraiso_add_department')), array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::addDepartmentAction',));
        }

        // ce_liceo_paraiso_show_personal
        if (0 === strpos($pathinfo, '/personal') && preg_match('#^/personal/(?P<area>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ce_liceo_paraiso_show_personal')), array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::showPersonalOfAreaAction',));
        }

        // ce_liceo_paraiso_detail_department
        if (0 === strpos($pathinfo, '/d/hsfbdhxeoo234asd823g') && preg_match('#^/d/hsfbdhxeoo234asd823g\\=(?P<area>[^/]+)&jsdhf88j3njfw\\=(?P<department>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ce_liceo_paraiso_detail_department')), array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::showDetailDepartmentAction',));
        }

        // ce_liceo_paraiso_new_personal
        if (0 === strpos($pathinfo, '/personal_new') && preg_match('#^/personal_new/(?P<area>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ce_liceo_paraiso_new_personal')), array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::newPersonalAction',));
        }

        // ce_liceo_paraiso_update_personal
        if (0 === strpos($pathinfo, '/update_personal') && preg_match('#^/update_personal/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ce_liceo_paraiso_update_personal')), array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::updatePersonalAction',));
        }

        // ce_liceo_paraiso_delete_personal_area
        if (0 === strpos($pathinfo, '/delete/hgctg') && preg_match('#^/delete/hgctg\\=(?P<area>[^/]+)&ytfvyhgc\\=(?P<codTeacher>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ce_liceo_paraiso_delete_personal_area')), array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::deletePersonalOfAreaAction',));
        }

        // ce_liceo_paraiso_services
        if (0 === strpos($pathinfo, '/services') && preg_match('#^/services/(?P<codeArea>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ce_liceo_paraiso_services')), array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::servicesOfAreaAction',));
        }

        // ce_liceo_paraiso_logout
        if ($pathinfo === '/login_') {
            return array (  '_controller' => 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Controller\\AdministratorController::logoutAction',  '_route' => 'ce_liceo_paraiso_logout',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
