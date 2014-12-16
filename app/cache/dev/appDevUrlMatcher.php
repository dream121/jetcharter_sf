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

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/b91a3aa')) {
                // _assetic_b91a3aa
                if ($pathinfo === '/js/b91a3aa.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b91a3aa',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b91a3aa',);
                }

                // _assetic_b91a3aa_0
                if ($pathinfo === '/js/b91a3aa_livesearch_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b91a3aa',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b91a3aa_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/0c3257c')) {
                // _assetic_0c3257c
                if ($pathinfo === '/js/0c3257c.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0c3257c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0c3257c',);
                }

                if (0 === strpos($pathinfo, '/js/0c3257c_')) {
                    // _assetic_0c3257c_0
                    if ($pathinfo === '/js/0c3257c_select2.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0c3257c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0c3257c_0',);
                    }

                    // _assetic_0c3257c_1
                    if ($pathinfo === '/js/0c3257c_wysihtml5-0.3.0_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0c3257c',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_0c3257c_1',);
                    }

                    // _assetic_0c3257c_2
                    if ($pathinfo === '/js/0c3257c_bootstrap-wysihtml5-0.0.2_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0c3257c',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_0c3257c_2',);
                    }

                    // _assetic_0c3257c_3
                    if ($pathinfo === '/js/0c3257c_form_showcase_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0c3257c',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_0c3257c_3',);
                    }

                    if (0 === strpos($pathinfo, '/js/0c3257c_dropzone')) {
                        // _assetic_0c3257c_4
                        if ($pathinfo === '/js/0c3257c_dropzone_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0c3257c',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_0c3257c_4',);
                        }

                        // _assetic_0c3257c_5
                        if ($pathinfo === '/js/0c3257c_dropzone.custom_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0c3257c',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_0c3257c_5',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/3679ebe')) {
                // _assetic_3679ebe
                if ($pathinfo === '/js/3679ebe.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3679ebe',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3679ebe',);
                }

                if (0 === strpos($pathinfo, '/js/3679ebe_')) {
                    // _assetic_3679ebe_0
                    if ($pathinfo === '/js/3679ebe_jquery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3679ebe',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3679ebe_0',);
                    }

                    // _assetic_3679ebe_1
                    if ($pathinfo === '/js/3679ebe_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3679ebe',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_3679ebe_1',);
                    }

                    // _assetic_3679ebe_2
                    if ($pathinfo === '/js/3679ebe_jquery-ui-1.10.2.custom.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3679ebe',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_3679ebe_2',);
                    }

                    // _assetic_3679ebe_3
                    if ($pathinfo === '/js/3679ebe_theme_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3679ebe',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_3679ebe_3',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/4035656')) {
                // _assetic_4035656
                if ($pathinfo === '/js/4035656.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 4035656,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4035656',);
                }

                if (0 === strpos($pathinfo, '/js/4035656_')) {
                    if (0 === strpos($pathinfo, '/js/4035656_jquery.')) {
                        // _assetic_4035656_0
                        if ($pathinfo === '/js/4035656_jquery.flot_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 4035656,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4035656_0',);
                        }

                        // _assetic_4035656_1
                        if ($pathinfo === '/js/4035656_jquery.knob_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 4035656,  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_4035656_1',);
                        }

                    }

                    // _assetic_4035656_2
                    if ($pathinfo === '/js/4035656_dashboard_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 4035656,  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_4035656_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/9e668b1')) {
            // _assetic_9e668b1
            if ($pathinfo === '/css/9e668b1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9e668b1',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9e668b1',);
            }

            if (0 === strpos($pathinfo, '/css/9e668b1_')) {
                // _assetic_9e668b1_0
                if ($pathinfo === '/css/9e668b1_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9e668b1',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9e668b1_0',);
                }

                // _assetic_9e668b1_1
                if ($pathinfo === '/css/9e668b1_datepicker_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9e668b1',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_9e668b1_1',);
                }

                // _assetic_9e668b1_2
                if ($pathinfo === '/css/9e668b1_jquery-jvectormap_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9e668b1',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_9e668b1_2',);
                }

                if (0 === strpos($pathinfo, '/css/9e668b1_s')) {
                    // _assetic_9e668b1_3
                    if ($pathinfo === '/css/9e668b1_select2_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9e668b1',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_9e668b1_3',);
                    }

                    // _assetic_9e668b1_4
                    if ($pathinfo === '/css/9e668b1_styles_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9e668b1',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_9e668b1_4',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/406e6ca')) {
                // _assetic_406e6ca
                if ($pathinfo === '/js/406e6ca.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '406e6ca',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_406e6ca',);
                }

                if (0 === strpos($pathinfo, '/js/406e6ca_')) {
                    if (0 === strpos($pathinfo, '/js/406e6ca_j')) {
                        // _assetic_406e6ca_0
                        if ($pathinfo === '/js/406e6ca_js?key=AIzaSyBsQg5FgWm3D_V9GfTDGUCU_N2CyZ-tJDE&sensor=false_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '406e6ca',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_406e6ca_0',);
                        }

                        // _assetic_406e6ca_1
                        if ($pathinfo === '/js/406e6ca_jquery-1.10.2_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '406e6ca',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_406e6ca_1',);
                        }

                    }

                    // _assetic_406e6ca_2
                    if ($pathinfo === '/js/406e6ca_select2.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '406e6ca',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_406e6ca_2',);
                    }

                    // _assetic_406e6ca_3
                    if ($pathinfo === '/js/406e6ca_ekko-lightbox_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '406e6ca',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_406e6ca_3',);
                    }

                    // _assetic_406e6ca_4
                    if ($pathinfo === '/js/406e6ca_bootstrap.min_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '406e6ca',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_406e6ca_4',);
                    }

                    if (0 === strpos($pathinfo, '/js/406e6ca_custom-form')) {
                        // _assetic_406e6ca_5
                        if ($pathinfo === '/js/406e6ca_custom-form_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '406e6ca',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_406e6ca_5',);
                        }

                        if (0 === strpos($pathinfo, '/js/406e6ca_custom-form.')) {
                            // _assetic_406e6ca_6
                            if ($pathinfo === '/js/406e6ca_custom-form.select_7.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '406e6ca',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_406e6ca_6',);
                            }

                            // _assetic_406e6ca_7
                            if ($pathinfo === '/js/406e6ca_custom-form.checkbox_8.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '406e6ca',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_406e6ca_7',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/js/406e6ca_jquery')) {
                        // _assetic_406e6ca_8
                        if ($pathinfo === '/js/406e6ca_jquery-ui-1.10.4.custom.min_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '406e6ca',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_406e6ca_8',);
                        }

                        if (0 === strpos($pathinfo, '/js/406e6ca_jquery.')) {
                            // _assetic_406e6ca_9
                            if ($pathinfo === '/js/406e6ca_jquery.flexslider_10.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '406e6ca',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_406e6ca_9',);
                            }

                            // _assetic_406e6ca_10
                            if ($pathinfo === '/js/406e6ca_jquery.sticky_11.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '406e6ca',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_406e6ca_10',);
                            }

                            // _assetic_406e6ca_11
                            if ($pathinfo === '/js/406e6ca_jquery.vmap.min_12.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '406e6ca',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_406e6ca_11',);
                            }

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/352228d')) {
                // _assetic_352228d
                if ($pathinfo === '/js/352228d.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '352228d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_352228d',);
                }

                if (0 === strpos($pathinfo, '/js/352228d_')) {
                    // _assetic_352228d_0
                    if ($pathinfo === '/js/352228d_respond.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '352228d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_352228d_0',);
                    }

                    // _assetic_352228d_1
                    if ($pathinfo === '/js/352228d_PIE_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '352228d',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_352228d_1',);
                    }

                    // _assetic_352228d_2
                    if ($pathinfo === '/js/352228d_html5_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '352228d',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_352228d_2',);
                    }

                    // _assetic_352228d_3
                    if ($pathinfo === '/js/352228d_jquery.vmap_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '352228d',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_352228d_3',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/b37a39b')) {
                // _assetic_b37a39b
                if ($pathinfo === '/js/b37a39b.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b37a39b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b37a39b',);
                }

                if (0 === strpos($pathinfo, '/js/b37a39b_')) {
                    if (0 === strpos($pathinfo, '/js/b37a39b_jquery')) {
                        // _assetic_b37a39b_0
                        if ($pathinfo === '/js/b37a39b_jquery.vmap.usa_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b37a39b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b37a39b_0',);
                        }

                        // _assetic_b37a39b_1
                        if ($pathinfo === '/js/b37a39b_jquery-actionInView_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b37a39b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_b37a39b_1',);
                        }

                    }

                    // _assetic_b37a39b_2
                    if ($pathinfo === '/js/b37a39b_scripts_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b37a39b',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_b37a39b_2',);
                    }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        // public_air_ambulance
        if (rtrim($pathinfo, '/') === '/air-ambulance') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'public_air_ambulance');
            }

            return array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\AirAmbulanceController::indexAction',  '_route' => 'public_air_ambulance',);
        }

        if (0 === strpos($pathinfo, '/private-jets')) {
            // public_aircraft
            if (rtrim($pathinfo, '/') === '/private-jets') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'public_aircraft');
                }

                return array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\AircraftController::indexAction',  '_route' => 'public_aircraft',);
            }

            // public_aircraft_search_airport
            if ($pathinfo === '/private-jets/airport-search') {
                return array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\AircraftController::airportSearchAction',  '_route' => 'public_aircraft_search_airport',);
            }

            // public_aircraft_detail_cfm
            if (preg_match('#^/private\\-jets/(?P<slug>[^/\\.]++)\\.cfm$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_aircraft_detail_cfm')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\AircraftController::detailAction',));
            }

            // public_aircraft_detail
            if (preg_match('#^/private\\-jets/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_aircraft_detail')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\AircraftController::detailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/airports')) {
            // public_airports
            if (rtrim($pathinfo, '/') === '/airports') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'public_airports');
                }

                return array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\AirportController::indexAction',  '_route' => 'public_airports',);
            }

            // public_airports_list
            if (preg_match('#^/airports/(?P<location>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_airports_list')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\AirportController::airportListAction',));
            }

            // public_airport_detail
            if (preg_match('#^/airports/(?P<location>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_airport_detail')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\AirportController::detailAction',));
            }

            // public_airport_detail_cfm
            if (preg_match('#^/airports/(?P<location>[^/]++)/(?P<slug>[^/\\.]++)\\.cfm$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_airport_detail_cfm')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\AirportController::detailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            // public_blog_add_comment
            if (0 === strpos($pathinfo, '/blog/comment') && preg_match('#^/blog/comment/(?P<blogId>[^/]++)/add$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_blog_add_comment')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\BlogController::addCommentAction',));
            }

            // public_blog
            if (preg_match('#^/blog(?:/(?P<categorySlug>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_blog')), array (  'categorySlug' => NULL,  '_controller' => 'JetCharters\\PublicBundle\\Controller\\BlogController::indexAction',));
            }

            // recent_blog
            if ($pathinfo === '/blog/recent/blog') {
                return array (  'footer' => false,  '_controller' => 'JetCharters\\PublicBundle\\Controller\\BlogController::recentBlogAction',  '_route' => 'recent_blog',);
            }

            // popular_blog
            if ($pathinfo === '/blog/popular/blog') {
                return array (  'footer' => false,  '_controller' => 'JetCharters\\PublicBundle\\Controller\\BlogController::popularBlogAction',  '_route' => 'popular_blog',);
            }

            // public_blog_single
            if (preg_match('#^/blog/(?P<categorySlug>[^/]++)/(?P<postSlug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_blog_single')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\BlogController::singleAction',));
            }

        }

        if (0 === strpos($pathinfo, '/charter-aircraft')) {
            // public_charter_aircraft
            if (rtrim($pathinfo, '/') === '/charter-aircraft') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'public_charter_aircraft');
                }

                return array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\CharterAircraftController::indexAction',  '_route' => 'public_charter_aircraft',);
            }

            // public_charter_aircraft_by_type
            if (0 === strpos($pathinfo, '/charter-aircraft/by-type') && preg_match('#^/charter\\-aircraft/by\\-type/(?P<type_slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_charter_aircraft_by_type')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\CharterAircraftController::byModelTypeAction',));
            }

            // public_charter_aircraft_detail_old
            if (preg_match('#^/charter\\-aircraft/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_charter_aircraft_detail_old')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\CharterAircraftController::oldDetailAction',));
            }

            // public_charter_aircraft_detail_cfm
            if (preg_match('#^/charter\\-aircraft/(?P<slug>[^/\\.]++)\\.cfm$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_charter_aircraft_detail_cfm')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\CharterAircraftController::oldDetailAction',));
            }

            // public_charter_aircraft_detail
            if (preg_match('#^/charter\\-aircraft/(?P<operator>[^/]++)/(?P<aircraft>[^/]++)/(?P<tail>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_charter_aircraft_detail')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\CharterAircraftController::detailAction',));
            }

        }

        // public_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'public_index');
            }

            return array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\DefaultController::indexAction',  '_route' => 'public_index',);
        }

        if (0 === strpos($pathinfo, '/operator_sign_up/step')) {
            // public_operators_signup_step1
            if (rtrim($pathinfo, '/') === '/operator_sign_up/step1') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'public_operators_signup_step1');
                }

                return array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\DefaultController::operatorSignUpAction',  '_route' => 'public_operators_signup_step1',);
            }

            // public_operators_signup_step2
            if (rtrim($pathinfo, '/') === '/operator_sign_up/step2') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'public_operators_signup_step2');
                }

                return array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\DefaultController::operatorSignUpStep2Action',  '_route' => 'public_operators_signup_step2',);
            }

        }

        // public_advertise
        if ($pathinfo === '/advertise') {
            return array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\DefaultController::advertiseAction',  '_route' => 'public_advertise',);
        }

        // public_safety
        if ($pathinfo === '/safety') {
            return array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\DefaultController::safetyAction',  '_route' => 'public_safety',);
        }

        // public_why_charter
        if ($pathinfo === '/why-charter') {
            return array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\DefaultController::whyCharterAction',  '_route' => 'public_why_charter',);
        }

        // public_about_charter
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\DefaultController::aboutCharterAction',  '_route' => 'public_about_charter',);
        }

        // public_empty_leg_index
        if (rtrim($pathinfo, '/') === '/empty-legs') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'public_empty_leg_index');
            }

            return array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\EmptyLegController::indexAction',  '_route' => 'public_empty_leg_index',);
        }

        if (0 === strpos($pathinfo, '/get/image')) {
            // public_get_image
            if (preg_match('#^/get/image/(?P<imageId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_get_image')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\ImageController::getImageAction',));
            }

            // public_get_image_thumb
            if (preg_match('#^/get/image/(?P<imageId>[^/]++)/(?P<width>[^/]++)/(?P<height>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_get_image_thumb')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\ImageController::getThumbAction',));
            }

        }

        if (0 === strpos($pathinfo, '/operators')) {
            // public_operator_detail
            if (preg_match('#^/operators/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_operator_detail')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\OperatorController::detailAction',));
            }

            // public_operator_detail_cfm
            if (preg_match('#^/operators/(?P<slug>[^/\\.]++)\\.cfm$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_operator_detail_cfm')), array (  '_controller' => 'JetCharters\\PublicBundle\\Controller\\OperatorController::detailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/aircraft')) {
                // admin_aircraft_models
                if (rtrim($pathinfo, '/') === '/admin/aircraft') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_aircraft_models;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_aircraft_models');
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::indexAction',  '_route' => 'admin_aircraft_models',);
                }
                not_admin_aircraft_models:

                // admin_aircraft_models_edit
                if (0 === strpos($pathinfo, '/admin/aircraft/edit') && preg_match('#^/admin/aircraft/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_aircraft_models_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_models_edit')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::editAction',));
                }
                not_admin_aircraft_models_edit:

                if (0 === strpos($pathinfo, '/admin/aircraft/new')) {
                    // admin_aircraft_models_new
                    if (preg_match('#^/admin/aircraft/new(?:/(?P<op_username>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_aircraft_models_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_models_new')), array (  'op_username' => NULL,  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::newAction',));
                    }
                    not_admin_aircraft_models_new:

                    // admin_aircraft_models_create
                    if ($pathinfo === '/admin/aircraft/new') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_aircraft_models_create;
                        }

                        return array (  'op_username' => NULL,  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::createAction',  '_route' => 'admin_aircraft_models_create',);
                    }
                    not_admin_aircraft_models_create:

                }

                // admin_aircraft_models_update
                if (preg_match('#^/admin/aircraft/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_aircraft_models_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_models_update')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::updateAction',));
                }
                not_admin_aircraft_models_update:

                // admin_aircraft_models_delete
                if (preg_match('#^/admin/aircraft/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_aircraft_models_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_models_delete')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::deleteAction',));
                }
                not_admin_aircraft_models_delete:

                // admin_aircraft_upload_video
                if (preg_match('#^/admin/aircraft/(?P<id>[^/]++)/upload_video$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_aircraft_upload_video;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_upload_video')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::uploadVideoAction',));
                }
                not_admin_aircraft_upload_video:

                // admin_aircraft_get_videos
                if (preg_match('#^/admin/aircraft/(?P<id>[^/]++)/get_videos$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_get_videos')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::getVideosAction',));
                }

                // admin_aircraft_get_video_embed
                if (0 === strpos($pathinfo, '/admin/aircraft/get_video_embed') && preg_match('#^/admin/aircraft/get_video_embed(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_aircraft_get_video_embed;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_get_video_embed')), array (  'id' => NULL,  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::getVideoEmbedAction',));
                }
                not_admin_aircraft_get_video_embed:

                if (0 === strpos($pathinfo, '/admin/aircraft/de')) {
                    // admin_aircraft_delete_video
                    if (0 === strpos($pathinfo, '/admin/aircraft/delete_video') && preg_match('#^/admin/aircraft/delete_video(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_aircraft_delete_video;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_delete_video')), array (  'id' => NULL,  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::deletevideoAction',));
                    }
                    not_admin_aircraft_delete_video:

                    // admin_aircraft_deactivate
                    if (0 === strpos($pathinfo, '/admin/aircraft/deactivate') && preg_match('#^/admin/aircraft/deactivate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_aircraft_deactivate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_deactivate')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::deactivateAction',));
                    }
                    not_admin_aircraft_deactivate:

                }

                // admin_aircraft_models_upload_image
                if (0 === strpos($pathinfo, '/admin/aircraft/upload_image') && preg_match('#^/admin/aircraft/upload_image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_aircraft_models_upload_image;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_models_upload_image')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::uploadImageAction',));
                }
                not_admin_aircraft_models_upload_image:

                // admin_aircraft_models_get_images
                if (0 === strpos($pathinfo, '/admin/aircraft/get_images') && preg_match('#^/admin/aircraft/get_images/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_aircraft_models_get_images;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_models_get_images')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::getImagesAction',));
                }
                not_admin_aircraft_models_get_images:

                // admin_aircraft_models_delete_image
                if (0 === strpos($pathinfo, '/admin/aircraft/delete_image') && preg_match('#^/admin/aircraft/delete_image(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_aircraft_models_delete_image;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_models_delete_image')), array (  'id' => NULL,  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\AircraftModelController::deleteImageAction',));
                }
                not_admin_aircraft_models_delete_image:

            }

            if (0 === strpos($pathinfo, '/admin/b')) {
                // admin_badges
                if (rtrim($pathinfo, '/') === '/admin/badges') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_badges');
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BadgesController::defaultAction',  '_route' => 'admin_badges',);
                }

                if (0 === strpos($pathinfo, '/admin/billingplans')) {
                    // admin_billingplans
                    if (rtrim($pathinfo, '/') === '/admin/billingplans') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_billingplans;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_billingplans');
                        }

                        return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BillingPlanController::indexAction',  '_route' => 'admin_billingplans',);
                    }
                    not_admin_billingplans:

                    // admin_billingplans_create
                    if ($pathinfo === '/admin/billingplans/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_billingplans_create;
                        }

                        return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BillingPlanController::createAction',  '_route' => 'admin_billingplans_create',);
                    }
                    not_admin_billingplans_create:

                    // admin_billingplans_new
                    if ($pathinfo === '/admin/billingplans/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_billingplans_new;
                        }

                        return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BillingPlanController::newAction',  '_route' => 'admin_billingplans_new',);
                    }
                    not_admin_billingplans_new:

                    // admin_billingplans_show
                    if (preg_match('#^/admin/billingplans/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_billingplans_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_billingplans_show')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BillingPlanController::showAction',));
                    }
                    not_admin_billingplans_show:

                    // admin_billingplans_edit
                    if (preg_match('#^/admin/billingplans/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_billingplans_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_billingplans_edit')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BillingPlanController::editAction',));
                    }
                    not_admin_billingplans_edit:

                    // admin_billingplans_update
                    if (preg_match('#^/admin/billingplans/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_admin_billingplans_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_billingplans_update')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BillingPlanController::updateAction',));
                    }
                    not_admin_billingplans_update:

                    // admin_billingplans_delete
                    if (preg_match('#^/admin/billingplans/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_billingplans_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_billingplans_delete')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BillingPlanController::deleteAction',));
                    }
                    not_admin_billingplans_delete:

                }

                if (0 === strpos($pathinfo, '/admin/blog/post')) {
                    if (0 === strpos($pathinfo, '/admin/blog/post/category')) {
                        // admin_blog_post_category
                        if (rtrim($pathinfo, '/') === '/admin/blog/post/category') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_blog_post_category;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'admin_blog_post_category');
                            }

                            return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostCategoryController::indexAction',  '_route' => 'admin_blog_post_category',);
                        }
                        not_admin_blog_post_category:

                        // admin_blog_post_category_create
                        if ($pathinfo === '/admin/blog/post/category/') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_blog_post_category_create;
                            }

                            return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostCategoryController::createAction',  '_route' => 'admin_blog_post_category_create',);
                        }
                        not_admin_blog_post_category_create:

                        // admin_blog_post_category_new
                        if ($pathinfo === '/admin/blog/post/category/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_blog_post_category_new;
                            }

                            return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostCategoryController::newAction',  '_route' => 'admin_blog_post_category_new',);
                        }
                        not_admin_blog_post_category_new:

                        // admin_blog_post_category_show
                        if (preg_match('#^/admin/blog/post/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_blog_post_category_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_category_show')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostCategoryController::showAction',));
                        }
                        not_admin_blog_post_category_show:

                        // admin_blog_post_category_edit
                        if (preg_match('#^/admin/blog/post/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_blog_post_category_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_category_edit')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostCategoryController::editAction',));
                        }
                        not_admin_blog_post_category_edit:

                        // admin_blog_post_category_update
                        if (preg_match('#^/admin/blog/post/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_admin_blog_post_category_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_category_update')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostCategoryController::updateAction',));
                        }
                        not_admin_blog_post_category_update:

                        // admin_blog_post_category_delete
                        if (0 === strpos($pathinfo, '/admin/blog/post/category/delete') && preg_match('#^/admin/blog/post/category/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_blog_post_category_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_category_delete')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostCategoryController::deleteAction',));
                        }
                        not_admin_blog_post_category_delete:

                    }

                    // admin_blog_post
                    if (rtrim($pathinfo, '/') === '/admin/blog/post') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_blog_post;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_blog_post');
                        }

                        return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostController::indexAction',  '_route' => 'admin_blog_post',);
                    }
                    not_admin_blog_post:

                    // admin_blog_post_create
                    if ($pathinfo === '/admin/blog/post/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_blog_post_create;
                        }

                        return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostController::createAction',  '_route' => 'admin_blog_post_create',);
                    }
                    not_admin_blog_post_create:

                    // admin_blog_post_new
                    if (0 === strpos($pathinfo, '/admin/blog/post/new') && preg_match('#^/admin/blog/post/new(?:/(?P<categoryId>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_blog_post_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_new')), array (  'categoryId' => NULL,  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostController::newAction',));
                    }
                    not_admin_blog_post_new:

                    // admin_blog_post_show
                    if (preg_match('#^/admin/blog/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_blog_post_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_show')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostController::showAction',));
                    }
                    not_admin_blog_post_show:

                    // admin_blog_post_edit
                    if (preg_match('#^/admin/blog/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_blog_post_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_edit')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostController::editAction',));
                    }
                    not_admin_blog_post_edit:

                    // admin_blog_post_update
                    if (preg_match('#^/admin/blog/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_admin_blog_post_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_update')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostController::updateAction',));
                    }
                    not_admin_blog_post_update:

                    // admin_blog_post_delete
                    if (0 === strpos($pathinfo, '/admin/blog/post/delete') && preg_match('#^/admin/blog/post/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_blog_post_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_delete')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BlogPostController::deleteAction',));
                    }
                    not_admin_blog_post_delete:

                }

                if (0 === strpos($pathinfo, '/admin/bulkmailer')) {
                    // admin_bulkmailer
                    if (rtrim($pathinfo, '/') === '/admin/bulkmailer') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_bulkmailer;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_bulkmailer');
                        }

                        return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BulkMailerController::indexAction',  '_route' => 'admin_bulkmailer',);
                    }
                    not_admin_bulkmailer:

                    // admin_bulkmailer_create
                    if ($pathinfo === '/admin/bulkmailer/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_bulkmailer_create;
                        }

                        return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BulkMailerController::createAction',  '_route' => 'admin_bulkmailer_create',);
                    }
                    not_admin_bulkmailer_create:

                    // admin_bulkmailer_new
                    if ($pathinfo === '/admin/bulkmailer/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_bulkmailer_new;
                        }

                        return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BulkMailerController::newAction',  '_route' => 'admin_bulkmailer_new',);
                    }
                    not_admin_bulkmailer_new:

                    // admin_bulkmailer_show
                    if (preg_match('#^/admin/bulkmailer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_bulkmailer_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bulkmailer_show')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BulkMailerController::showAction',));
                    }
                    not_admin_bulkmailer_show:

                    // admin_bulkmailer_edit
                    if (preg_match('#^/admin/bulkmailer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_bulkmailer_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bulkmailer_edit')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BulkMailerController::editAction',));
                    }
                    not_admin_bulkmailer_edit:

                    // admin_bulkmailer_update
                    if (preg_match('#^/admin/bulkmailer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_admin_bulkmailer_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bulkmailer_update')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BulkMailerController::updateAction',));
                    }
                    not_admin_bulkmailer_update:

                    // admin_bulkmailer_delete
                    if (preg_match('#^/admin/bulkmailer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_bulkmailer_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bulkmailer_delete')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BulkMailerController::deleteAction',));
                    }
                    not_admin_bulkmailer_delete:

                    // admin_bulkmailer_send_preview
                    if (preg_match('#^/admin/bulkmailer/(?P<id>[^/]++)/send_preview$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_bulkmailer_send_preview;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bulkmailer_send_preview')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BulkMailerController::sendPreviewAction',));
                    }
                    not_admin_bulkmailer_send_preview:

                    // admin_bulkmailer_send
                    if (preg_match('#^/admin/bulkmailer/(?P<id>[^/]++)/send$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_bulkmailer_send;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bulkmailer_send')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\BulkMailerController::sendAction',));
                    }
                    not_admin_bulkmailer_send:

                }

            }

            if (0 === strpos($pathinfo, '/admin/charter-aircraft')) {
                // admin_aircraft
                if (0 === strpos($pathinfo, '/admin/charter-aircraft/list') && preg_match('#^/admin/charter\\-aircraft/list(?:/(?P<op_username>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_aircraft;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft')), array (  'op_username' => NULL,  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\CharterAircraftController::defaultAction',));
                }
                not_admin_aircraft:

                if (0 === strpos($pathinfo, '/admin/charter-aircraft/new')) {
                    // admin_aircraft_create
                    if (preg_match('#^/admin/charter\\-aircraft/new(?:/(?P<op_username>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_aircraft_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_create')), array (  'op_username' => NULL,  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\CharterAircraftController::createAction',));
                    }
                    not_admin_aircraft_create:

                    // admin_aircraft_new
                    if (preg_match('#^/admin/charter\\-aircraft/new(?:/(?P<op_username>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_aircraft_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_new')), array (  'op_username' => NULL,  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\CharterAircraftController::newAction',));
                    }
                    not_admin_aircraft_new:

                }

                // admin_aircraft_show
                if (preg_match('#^/admin/charter\\-aircraft/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_aircraft_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_show')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\CharterAircraftController::showAction',));
                }
                not_admin_aircraft_show:

                // admin_aircraft_edit
                if (preg_match('#^/admin/charter\\-aircraft/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_aircraft_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_edit')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\CharterAircraftController::editAction',));
                }
                not_admin_aircraft_edit:

                // admin_aircraft_update
                if (preg_match('#^/admin/charter\\-aircraft/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_aircraft_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_update')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\CharterAircraftController::updateAction',));
                }
                not_admin_aircraft_update:

                // admin_aircraft_delete
                if (preg_match('#^/admin/charter\\-aircraft/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_aircraft_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_delete')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\CharterAircraftController::deleteAction',));
                }
                not_admin_aircraft_delete:

                // admin_aircraft_upload_image
                if (preg_match('#^/admin/charter\\-aircraft/(?P<id>[^/]++)/upload_image$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_aircraft_upload_image;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_upload_image')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\CharterAircraftController::uploadImageAction',));
                }
                not_admin_aircraft_upload_image:

                // admin_aircraft_get_images
                if (preg_match('#^/admin/charter\\-aircraft/(?P<id>[^/]++)/get_images$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_get_images')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\CharterAircraftController::getImagesAction',));
                }

                // admin_aircraft_delete_image
                if (0 === strpos($pathinfo, '/admin/charter-aircraft/delete_image') && preg_match('#^/admin/charter\\-aircraft/delete_image(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_aircraft_delete_image;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aircraft_delete_image')), array (  'id' => NULL,  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\CharterAircraftController::deleteImageAction',));
                }
                not_admin_aircraft_delete_image:

            }

            // admin_dashboard
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_dashboard');
                }

                return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\DefaultController::dashboardAction',  '_route' => 'admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/empty-legs')) {
                // admin_emptylegs
                if (rtrim($pathinfo, '/') === '/admin/empty-legs') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_emptylegs;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_emptylegs');
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\EmptyLegController::indexAction',  '_route' => 'admin_emptylegs',);
                }
                not_admin_emptylegs:

                // admin_emptylegs_create
                if ($pathinfo === '/admin/empty-legs/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_emptylegs_create;
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\EmptyLegController::createAction',  '_route' => 'admin_emptylegs_create',);
                }
                not_admin_emptylegs_create:

                // admin_emptylegs_new
                if ($pathinfo === '/admin/empty-legs/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_emptylegs_new;
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\EmptyLegController::newAction',  '_route' => 'admin_emptylegs_new',);
                }
                not_admin_emptylegs_new:

                // admin_emptylegs_show
                if (preg_match('#^/admin/empty\\-legs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_emptylegs_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emptylegs_show')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\EmptyLegController::showAction',));
                }
                not_admin_emptylegs_show:

                // admin_emptylegs_edit
                if (preg_match('#^/admin/empty\\-legs/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_emptylegs_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emptylegs_edit')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\EmptyLegController::editAction',));
                }
                not_admin_emptylegs_edit:

                // admin_emptylegs_update
                if (preg_match('#^/admin/empty\\-legs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_emptylegs_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emptylegs_update')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\EmptyLegController::updateAction',));
                }
                not_admin_emptylegs_update:

                // admin_emptylegs_delete
                if (preg_match('#^/admin/empty\\-legs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_emptylegs_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emptylegs_delete')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\EmptyLegController::deleteAction',));
                }
                not_admin_emptylegs_delete:

            }

            if (0 === strpos($pathinfo, '/admin/operators')) {
                // admin_operators
                if (rtrim($pathinfo, '/') === '/admin/operators') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_operators;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_operators');
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\OperatorsController::indexAction',  '_route' => 'admin_operators',);
                }
                not_admin_operators:

                // admin_operators_create
                if ($pathinfo === '/admin/operators/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_operators_create;
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\OperatorsController::createAction',  '_route' => 'admin_operators_create',);
                }
                not_admin_operators_create:

                // admin_operators_new
                if ($pathinfo === '/admin/operators/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_operators_new;
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\OperatorsController::newAction',  '_route' => 'admin_operators_new',);
                }
                not_admin_operators_new:

                // admin_operators_edit
                if (preg_match('#^/admin/operators/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_operators_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operators_edit')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\OperatorsController::editAction',));
                }
                not_admin_operators_edit:

                // admin_operators_update
                if (preg_match('#^/admin/operators/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_operators_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operators_update')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\OperatorsController::updateAction',));
                }
                not_admin_operators_update:

                // admin_operators_delete
                if (preg_match('#^/admin/operators/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_operators_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operators_delete')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\OperatorsController::deleteAction',));
                }
                not_admin_operators_delete:

                // admin_operators_billing
                if (preg_match('#^/admin/operators/(?P<op_username>[^/]++)/billing$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operators_billing')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\OperatorsController::billingAction',));
                }

                if (0 === strpos($pathinfo, '/admin/operators/a')) {
                    // admin_operators_assign_aircraft
                    if (0 === strpos($pathinfo, '/admin/operators/assign_aircraft') && preg_match('#^/admin/operators/assign_aircraft/(?P<op_username>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operators_assign_aircraft')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\OperatorsController::assignAircraftAction',));
                    }

                    // admin_aircraft_status_log
                    if ($pathinfo === '/admin/operators/aircraftlog') {
                        return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Admin\\OperatorsController::aircraftStatusLogAction',  '_route' => 'admin_aircraft_status_log',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/operator-admin')) {
            if (0 === strpos($pathinfo, '/operator-admin/aircraft')) {
                // operator_aircraft
                if (rtrim($pathinfo, '/') === '/operator-admin/aircraft') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_operator_aircraft;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'operator_aircraft');
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::defaultAction',  '_route' => 'operator_aircraft',);
                }
                not_operator_aircraft:

                // operator_aircraft_create
                if ($pathinfo === '/operator-admin/aircraft/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_operator_aircraft_create;
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::createAction',  '_route' => 'operator_aircraft_create',);
                }
                not_operator_aircraft_create:

                // operator_aircraft_new
                if ($pathinfo === '/operator-admin/aircraft/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_operator_aircraft_new;
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::newAction',  '_route' => 'operator_aircraft_new',);
                }
                not_operator_aircraft_new:

                // operator_aircraft_show
                if (preg_match('#^/operator\\-admin/aircraft/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_operator_aircraft_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_aircraft_show')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::showAction',));
                }
                not_operator_aircraft_show:

                // operator_aircraft_edit
                if (preg_match('#^/operator\\-admin/aircraft/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_operator_aircraft_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_aircraft_edit')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::editAction',));
                }
                not_operator_aircraft_edit:

                // operator_aircraft_update
                if (preg_match('#^/operator\\-admin/aircraft/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_operator_aircraft_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_aircraft_update')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::updateAction',));
                }
                not_operator_aircraft_update:

                // operator_aircraft_delete
                if (preg_match('#^/operator\\-admin/aircraft/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_operator_aircraft_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_aircraft_delete')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::deleteAction',));
                }
                not_operator_aircraft_delete:

                // operator_aircraft_upload_image
                if (preg_match('#^/operator\\-admin/aircraft/(?P<id>[^/]++)/upload_image$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_operator_aircraft_upload_image;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_aircraft_upload_image')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::uploadImageAction',));
                }
                not_operator_aircraft_upload_image:

                // operator_aircraft_get_images
                if (preg_match('#^/operator\\-admin/aircraft/(?P<id>[^/]++)/get_images$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_aircraft_get_images')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::getImagesAction',));
                }

                // operator_aircraft_delete_image
                if (0 === strpos($pathinfo, '/operator-admin/aircraft/delete_image') && preg_match('#^/operator\\-admin/aircraft/delete_image(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_operator_aircraft_delete_image;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_aircraft_delete_image')), array (  'id' => NULL,  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::deleteImageAction',));
                }
                not_operator_aircraft_delete_image:

                // operator_aircraft_upload_video
                if (preg_match('#^/operator\\-admin/aircraft/(?P<id>[^/]++)/upload_video$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_operator_aircraft_upload_video;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_aircraft_upload_video')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::uploadVideoAction',));
                }
                not_operator_aircraft_upload_video:

                // operator_aircraft_get_videos
                if (preg_match('#^/operator\\-admin/aircraft/(?P<id>[^/]++)/get_videos$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_operator_aircraft_get_videos;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_aircraft_get_videos')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::getVideosAction',));
                }
                not_operator_aircraft_get_videos:

                // operator_aircraft_get_video_embed
                if (0 === strpos($pathinfo, '/operator-admin/aircraft/get_video_embed') && preg_match('#^/operator\\-admin/aircraft/get_video_embed(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_operator_aircraft_get_video_embed;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_aircraft_get_video_embed')), array (  'id' => NULL,  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::getVideoEmbedAction',));
                }
                not_operator_aircraft_get_video_embed:

                if (0 === strpos($pathinfo, '/operator-admin/aircraft/de')) {
                    // operator_aircraft_delete_video
                    if (0 === strpos($pathinfo, '/operator-admin/aircraft/delete_video') && preg_match('#^/operator\\-admin/aircraft/delete_video(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_operator_aircraft_delete_video;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_aircraft_delete_video')), array (  'id' => NULL,  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::deletevideoAction',));
                    }
                    not_operator_aircraft_delete_video:

                    // operator_aircraft_deactivate
                    if (0 === strpos($pathinfo, '/operator-admin/aircraft/deactivate') && preg_match('#^/operator\\-admin/aircraft/deactivate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_operator_aircraft_deactivate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_aircraft_deactivate')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::deactivateAction',));
                    }
                    not_operator_aircraft_deactivate:

                }

                // operator_aircraft_activate
                if (0 === strpos($pathinfo, '/operator-admin/aircraft/activate') && preg_match('#^/operator\\-admin/aircraft/activate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_operator_aircraft_activate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_aircraft_activate')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\AircraftController::activateAction',));
                }
                not_operator_aircraft_activate:

            }

            if (0 === strpos($pathinfo, '/operator-admin/billing')) {
                // operator_billing_options
                if (rtrim($pathinfo, '/') === '/operator-admin/billing') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'operator_billing_options');
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\BillingController::billingOptionsAction',  '_route' => 'operator_billing_options',);
                }

                // operator_billing_history
                if ($pathinfo === '/operator-admin/billing/history') {
                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\BillingController::billingHistoryAction',  '_route' => 'operator_billing_history',);
                }

            }

            // operator_dashboard
            if (rtrim($pathinfo, '/') === '/operator-admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'operator_dashboard');
                }

                return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\DefaultController::dashboardAction',  '_route' => 'operator_dashboard',);
            }

            // operator_terms
            if ($pathinfo === '/operator-admin/terms') {
                return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\DefaultController::termsAction',  '_route' => 'operator_terms',);
            }

            // operator_dashboard_chart_data
            if ($pathinfo === '/operator-admin/dashboard/chart_data') {
                return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\DefaultController::chartDataAction',  '_route' => 'operator_dashboard_chart_data',);
            }

            // operator_dashboard_company
            if ($pathinfo === '/operator-admin/company') {
                return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\DefaultController::companyAction',  '_route' => 'operator_dashboard_company',);
            }

            if (0 === strpos($pathinfo, '/operator-admin/empty-leg')) {
                // operator_emptylegs
                if (rtrim($pathinfo, '/') === '/operator-admin/empty-leg') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_operator_emptylegs;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'operator_emptylegs');
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\EmptyLegController::indexAction',  '_route' => 'operator_emptylegs',);
                }
                not_operator_emptylegs:

                // operator_emptylegs_create
                if ($pathinfo === '/operator-admin/empty-leg/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_operator_emptylegs_create;
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\EmptyLegController::createAction',  '_route' => 'operator_emptylegs_create',);
                }
                not_operator_emptylegs_create:

                // operator_emptylegs_new
                if ($pathinfo === '/operator-admin/empty-leg/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_operator_emptylegs_new;
                    }

                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\EmptyLegController::newAction',  '_route' => 'operator_emptylegs_new',);
                }
                not_operator_emptylegs_new:

                // operator_emptylegs_show
                if (preg_match('#^/operator\\-admin/empty\\-leg/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_operator_emptylegs_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_emptylegs_show')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\EmptyLegController::showAction',));
                }
                not_operator_emptylegs_show:

                // operator_emptylegs_edit
                if (preg_match('#^/operator\\-admin/empty\\-leg/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_operator_emptylegs_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_emptylegs_edit')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\EmptyLegController::editAction',));
                }
                not_operator_emptylegs_edit:

                // operator_emptylegs_update
                if (preg_match('#^/operator\\-admin/empty\\-leg/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_operator_emptylegs_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_emptylegs_update')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\EmptyLegController::updateAction',));
                }
                not_operator_emptylegs_update:

                // operator_emptylegs_delete
                if (preg_match('#^/operator\\-admin/empty\\-leg/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_operator_emptylegs_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_emptylegs_delete')), array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\EmptyLegController::deleteAction',));
                }
                not_operator_emptylegs_delete:

            }

            // operator_inbox
            if (rtrim($pathinfo, '/') === '/operator-admin/inbox') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'operator_inbox');
                }

                return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\InboxController::defaultAction',  '_route' => 'operator_inbox',);
            }

            if (0 === strpos($pathinfo, '/operator-admin/profile')) {
                if (0 === strpos($pathinfo, '/operator-admin/profile/co')) {
                    // operator_profile_contact
                    if ($pathinfo === '/operator-admin/profile/contact') {
                        return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\ProfileController::contactAction',  '_route' => 'operator_profile_contact',);
                    }

                    if (0 === strpos($pathinfo, '/operator-admin/profile/company')) {
                        // operator_profile_company_info
                        if ($pathinfo === '/operator-admin/profile/company/info') {
                            return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\ProfileController::companyInfoAction',  '_route' => 'operator_profile_company_info',);
                        }

                        // operator_profile_company_logo
                        if ($pathinfo === '/operator-admin/profile/company/logo') {
                            return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\ProfileController::companyLogoAction',  '_route' => 'operator_profile_company_logo',);
                        }

                        // operator_profile_company_video
                        if ($pathinfo === '/operator-admin/profile/company/video') {
                            return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\ProfileController::companyVideoAction',  '_route' => 'operator_profile_company_video',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/operator-admin/profile/s')) {
                    // operator_profile_social
                    if ($pathinfo === '/operator-admin/profile/social') {
                        return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\ProfileController::socialAction',  '_route' => 'operator_profile_social',);
                    }

                    // operator_profile_salesforce
                    if ($pathinfo === '/operator-admin/profile/salesforce') {
                        return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\ProfileController::salesforceAction',  '_route' => 'operator_profile_salesforce',);
                    }

                }

                // operator_profile_callrecording
                if ($pathinfo === '/operator-admin/profile/callrecording') {
                    return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Operator\\ProfileController::callRecordingAction',  '_route' => 'operator_profile_callrecording',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // register_administrator
            if ($pathinfo === '/register/administrator') {
                return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Registration\\AdministratorController::registerAction',  '_route' => 'register_administrator',);
            }

            // register_operator
            if ($pathinfo === '/register/operator') {
                return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Registration\\OperatorController::registerAction',  '_route' => 'register_operator',);
            }

            // register_siteuser
            if ($pathinfo === '/register/user') {
                return array (  '_controller' => 'JetCharters\\AppBundle\\Controller\\Registration\\SiteUserController::registerAction',  '_route' => 'register_siteuser',);
            }

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

        // gregwar_captcha.generate_captcha
        if (0 === strpos($pathinfo, '/_gcb/generate-captcha') && preg_match('#^/_gcb/generate\\-captcha/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gregwar_captcha.generate_captcha')), array (  '_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
