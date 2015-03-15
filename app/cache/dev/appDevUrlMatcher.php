<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/a002e74')) {
            // _assetic_a002e74
            if ($pathinfo === '/css/a002e74.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a002e74',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a002e74',);
            }

            if (0 === strpos($pathinfo, '/css/a002e74_bootstrap')) {
                // _assetic_a002e74_0
                if ($pathinfo === '/css/a002e74_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a002e74',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a002e74_0',);
                }

                // _assetic_a002e74_1
                if ($pathinfo === '/css/a002e74_bootstrap-theme.min_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a002e74',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_a002e74_1',);
                }

                // _assetic_a002e74_2
                if ($pathinfo === '/css/a002e74_bootstrap.min_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a002e74',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_a002e74_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/94a7b44')) {
            // _assetic_94a7b44
            if ($pathinfo === '/js/94a7b44.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '94a7b44',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_94a7b44',);
            }

            if (0 === strpos($pathinfo, '/js/94a7b44_')) {
                // _assetic_94a7b44_0
                if ($pathinfo === '/js/94a7b44_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '94a7b44',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_94a7b44_0',);
                }

                // _assetic_94a7b44_1
                if ($pathinfo === '/js/94a7b44_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '94a7b44',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_94a7b44_1',);
                }

            }

        }

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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // user_user_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_user_homepage');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'user_user_homepage',);
        }

        // user_user_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_user_index');
            }

            return array (  '_controller' => 'User\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_user_index',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ($pathinfo === '/group/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_list;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ($pathinfo === '/group/new') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupName>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',));
            }

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupName>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        // ocp_appli_acceuil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_acceuil');
            }

            return array (  '_controller' => 'OCPAppliBundle:GestionStock:index',  '_route' => 'ocp_appli_acceuil',);
        }

        // ocp_appli_parc
        if (rtrim($pathinfo, '/') === '/parc') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_parc');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\ParcController::indexAction',  '_route' => 'ocp_appli_parc',);
        }

        // ocp_appli_addparc
        if (rtrim($pathinfo, '/') === '/addparc') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_addparc');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\ParcController::addAction',  '_route' => 'ocp_appli_addparc',);
        }

        // ocp_appli_editparc
        if (0 === strpos($pathinfo, '/editparc') && preg_match('#^/editparc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_editparc')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\ParcController::editAction',));
        }

        // ocp_appli_deleteparc
        if (0 === strpos($pathinfo, '/deleteparc') && preg_match('#^/deleteparc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_deleteparc')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\ParcController::deleteAction',));
        }

        // ocp_appli_showparc
        if (rtrim($pathinfo, '/') === '/showparc') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_showparc');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\ParcController::showAction',  '_route' => 'ocp_appli_showparc',);
        }

        // ocp_appli_train
        if (rtrim($pathinfo, '/') === '/train') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_train');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\TrainController::indexAction',  '_route' => 'ocp_appli_train',);
        }

        // ocp_appli_addtrain
        if (rtrim($pathinfo, '/') === '/addtrain') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_addtrain');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\TrainController::addAction',  '_route' => 'ocp_appli_addtrain',);
        }

        // ocp_appli_edittrain
        if (0 === strpos($pathinfo, '/edittrain') && preg_match('#^/edittrain/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_edittrain')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\TrainController::editAction',));
        }

        // ocp_appli_deletetrain
        if (0 === strpos($pathinfo, '/deletetrain') && preg_match('#^/deletetrain/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_deletetrain')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\TrainController::deleteAction',));
        }

        // ocp_appli_showtrain
        if (rtrim($pathinfo, '/') === '/showtrain') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_showtrain');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\TrainController::showAction',  '_route' => 'ocp_appli_showtrain',);
        }

        // ocp_appli_recu
        if (rtrim($pathinfo, '/') === '/recu') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_recu');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\RecuController::indexAction',  '_route' => 'ocp_appli_recu',);
        }

        // ocp_appli_addrecu
        if (rtrim($pathinfo, '/') === '/addrecu') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_addrecu');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\RecuController::addAction',  '_route' => 'ocp_appli_addrecu',);
        }

        // ocp_appli_editrecu
        if (0 === strpos($pathinfo, '/editrecu') && preg_match('#^/editrecu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_editrecu')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\RecuController::editAction',));
        }

        // ocp_appli_deleterecu
        if (0 === strpos($pathinfo, '/deleterecu') && preg_match('#^/deleterecu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_deleterecu')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\RecuController::deleteAction',));
        }

        // ocp_appli_showrecu
        if (rtrim($pathinfo, '/') === '/showrecu') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_showrecu');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\RecuController::showAction',  '_route' => 'ocp_appli_showrecu',);
        }

        if (0 === strpos($pathinfo, '/recherche')) {
            // ocp_appli_rechercherecu
            if (rtrim($pathinfo, '/') === '/rechercherecu') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ocp_appli_rechercherecu');
                }

                return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\RecuController::rechercheAction',  '_route' => 'ocp_appli_rechercherecu',);
            }

            // ocp_appli_recherchetrarecu
            if (rtrim($pathinfo, '/') === '/recherchetra') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ocp_appli_recherchetrarecu');
                }

                return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\RecuController::recherchetraitementAction',  '_route' => 'ocp_appli_recherchetrarecu',);
            }

        }

        // ocp_appli_terrain
        if (rtrim($pathinfo, '/') === '/terrain') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_terrain');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\TerrainController::indexAction',  '_route' => 'ocp_appli_terrain',);
        }

        // ocp_appli_addterrain
        if (rtrim($pathinfo, '/') === '/addterrain') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_addterrain');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\TerrainController::addAction',  '_route' => 'ocp_appli_addterrain',);
        }

        // ocp_appli_editterrain
        if (0 === strpos($pathinfo, '/editterrain') && preg_match('#^/editterrain/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_editterrain')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\TerrainController::editAction',));
        }

        // ocp_appli_deleteterrain
        if (0 === strpos($pathinfo, '/deleteterrain') && preg_match('#^/deleteterrain/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_deleteterrain')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\TerrainController::deleteAction',));
        }

        if (0 === strpos($pathinfo, '/s')) {
            // ocp_appli_showterrain
            if (rtrim($pathinfo, '/') === '/showterrain') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ocp_appli_showterrain');
                }

                return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\TerrainController::showAction',  '_route' => 'ocp_appli_showterrain',);
            }

            // ocp_appli_serachtrain
            if (rtrim($pathinfo, '/') === '/searchtrain') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ocp_appli_serachtrain');
                }

                return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\TrainController::searchAction',  '_route' => 'ocp_appli_serachtrain',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // ocp_appli_analyse
            if (rtrim($pathinfo, '/') === '/analyse') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ocp_appli_analyse');
                }

                return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\AnalyseController::indexAction',  '_route' => 'ocp_appli_analyse',);
            }

            // ocp_appli_addanalyse
            if (rtrim($pathinfo, '/') === '/addanalyse') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ocp_appli_addanalyse');
                }

                return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\AnalyseController::addAction',  '_route' => 'ocp_appli_addanalyse',);
            }

        }

        // ocp_appli_editanalyse
        if (0 === strpos($pathinfo, '/editanalyse') && preg_match('#^/editanalyse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_editanalyse')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\AnalyseController::editAction',));
        }

        // ocp_appli_deleteanalyse
        if (0 === strpos($pathinfo, '/deleteanalyse') && preg_match('#^/deleteanalyse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_deleteanalyse')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\AnalyseController::deleteAction',));
        }

        // ocp_appli_showanalyse
        if (rtrim($pathinfo, '/') === '/showanalyse') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_showanalyse');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\AnalyseController::showAction',  '_route' => 'ocp_appli_showanalyse',);
        }

        // ocp_appli_Destockage
        if (rtrim($pathinfo, '/') === '/destockage') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_Destockage');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\DestockageController::indexAction',  '_route' => 'ocp_appli_Destockage',);
        }

        // ocp_appli_adddestockage
        if (rtrim($pathinfo, '/') === '/adddestockage') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_adddestockage');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\DestockageController::addAction',  '_route' => 'ocp_appli_adddestockage',);
        }

        // ocp_appli_editdestockage
        if (0 === strpos($pathinfo, '/editdestockage') && preg_match('#^/editdestockage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_editdestockage')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\DestockageController::editAction',));
        }

        // ocp_appli_deletedestockage
        if (0 === strpos($pathinfo, '/deletedestockage') && preg_match('#^/deletedestockage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_deletedestockage')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\DestockageController::deleteAction',));
        }

        // ocp_appli_showdestockage
        if (rtrim($pathinfo, '/') === '/showdestockage') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_showdestockage');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\DestockageController::showAction',  '_route' => 'ocp_appli_showdestockage',);
        }

        // ocp_appli_melange
        if (rtrim($pathinfo, '/') === '/melange') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_melange');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\MelangeController::indexAction',  '_route' => 'ocp_appli_melange',);
        }

        // ocp_appli_addmelange
        if (rtrim($pathinfo, '/') === '/addmelange') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_addmelange');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\MelangeController::addAction',  '_route' => 'ocp_appli_addmelange',);
        }

        // ocp_appli_editmelange
        if (0 === strpos($pathinfo, '/editmelange') && preg_match('#^/editmelange/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_editmelange')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\MelangeController::editAction',));
        }

        // ocp_appli_deletemelange
        if (0 === strpos($pathinfo, '/deletemelange') && preg_match('#^/deletemelange/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_deletemelange')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\MelangeController::deleteAction',));
        }

        // ocp_appli_showmelange
        if (rtrim($pathinfo, '/') === '/showmelange') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_showmelange');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\MelangeController::showAction',  '_route' => 'ocp_appli_showmelange',);
        }

        // ocp_appli_CorDes
        if (rtrim($pathinfo, '/') === '/cordes') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_CorDes');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\CorDesController::indexAction',  '_route' => 'ocp_appli_CorDes',);
        }

        // ocp_appli_addCorDes
        if (rtrim($pathinfo, '/') === '/addcordes') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_addCorDes');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\CorDesController::addAction',  '_route' => 'ocp_appli_addCorDes',);
        }

        // ocp_appli_editCorDes
        if (0 === strpos($pathinfo, '/editcordes') && preg_match('#^/editcordes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_editCorDes')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\CorDesController::editAction',));
        }

        // ocp_appli_deleteCorDes
        if (0 === strpos($pathinfo, '/deletecordes') && preg_match('#^/deletecordes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocp_appli_deleteCorDes')), array (  '_controller' => 'OCP\\AppliBundle\\Controller\\CorDesController::deleteAction',));
        }

        // ocp_appli_showCorDes
        if (rtrim($pathinfo, '/') === '/showcordes') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ocp_appli_showCorDes');
            }

            return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\CorDesController::showAction',  '_route' => 'ocp_appli_showCorDes',);
        }

        if (0 === strpos($pathinfo, '/rech')) {
            // ocp_appli_rech
            if (rtrim($pathinfo, '/') === '/rech') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ocp_appli_rech');
                }

                return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\RechController::addAction',  '_route' => 'ocp_appli_rech',);
            }

            if (0 === strpos($pathinfo, '/recherche')) {
                // ocp_appli_rechercheparc
                if (rtrim($pathinfo, '/') === '/recherche') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ocp_appli_rechercheparc');
                    }

                    return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\ParcController::rechercheAction',  '_route' => 'ocp_appli_rechercheparc',);
                }

                // ocp_appli_recherchetraparc
                if (rtrim($pathinfo, '/') === '/recherchetra') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ocp_appli_recherchetraparc');
                    }

                    return array (  '_controller' => 'OCP\\AppliBundle\\Controller\\ParcController::recherchetraitementAction',  '_route' => 'ocp_appli_recherchetraparc',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
