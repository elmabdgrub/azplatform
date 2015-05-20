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

        if (0 === strpos($pathinfo, '/platform')) {
            // back_office_homepage
            if (rtrim($pathinfo, '/') === '/platform') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'back_office_homepage');
                }

                return array (  '_controller' => 'BackOfficeBundle\\Controller\\IndexController::indexAction',  '_route' => 'back_office_homepage',);
            }

            if (0 === strpos($pathinfo, '/platform/ad')) {
                // admin-profil
                if ($pathinfo === '/platform/admin-profil') {
                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\CollaborateurController::profilAction',  '_route' => 'admin-profil',);
                }

                // ajouter-hebergement
                if ($pathinfo === '/platform/add-heb') {
                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\HebergementController::addAction',  '_route' => 'ajouter-hebergement',);
                }

            }

            // liste-hebergement
            if ($pathinfo === '/platform/list-heb') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\HebergementController::listerAction',  '_route' => 'liste-hebergement',);
            }

            // view-hebergement
            if (0 === strpos($pathinfo, '/platform/view-heb') && preg_match('#^/platform/view\\-heb/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'view-hebergement')), array (  '_controller' => 'BackOfficeBundle\\Controller\\HebergementController::viewAction',));
            }

            // notifier-hebergement
            if (0 === strpos($pathinfo, '/platform/notifier-heb') && preg_match('#^/platform/notifier\\-heb/(?P<id>[^/]++)/(?P<client>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notifier-hebergement')), array (  '_controller' => 'BackOfficeBundle\\Controller\\HebergementController::notifierAction',));
            }

            // edit-hebergement
            if (0 === strpos($pathinfo, '/platform/edit-heb') && preg_match('#^/platform/edit\\-heb/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit-hebergement')), array (  '_controller' => 'BackOfficeBundle\\Controller\\HebergementController::editAction',));
            }

            // delete-hebergement
            if (0 === strpos($pathinfo, '/platform/delete-heb') && preg_match('#^/platform/delete\\-heb/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete-hebergement')), array (  '_controller' => 'BackOfficeBundle\\Controller\\HebergementController::deleteAction',));
            }

            // ajouter-projet
            if ($pathinfo === '/platform/add-projet') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\ProjetController::addAction',  '_route' => 'ajouter-projet',);
            }

            // encours-projet
            if ($pathinfo === '/platform/encours-projet') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\ProjetController::encoursAction',  '_route' => 'encours-projet',);
            }

            // liste-projet
            if ($pathinfo === '/platform/liste-projet') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\ProjetController::listerAction',  '_route' => 'liste-projet',);
            }

            // edit-projet
            if (0 === strpos($pathinfo, '/platform/edit-projet') && preg_match('#^/platform/edit\\-projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit-projet')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ProjetController::editAction',));
            }

            // view-projet
            if (0 === strpos($pathinfo, '/platform/view-projet') && preg_match('#^/platform/view\\-projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'view-projet')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ProjetController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/platform/messages-')) {
                // messages-projet
                if (0 === strpos($pathinfo, '/platform/messages-projet') && preg_match('#^/platform/messages\\-projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'messages-projet')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ProjetController::messagesAction',));
                }

                // messages-notification
                if ($pathinfo === '/platform/messages-notification') {
                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\NotificationController::messagesAction',  '_route' => 'messages-notification',);
                }

            }

            // fichiers-notification
            if ($pathinfo === '/platform/fichiers-notification') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\NotificationController::fichiersAction',  '_route' => 'fichiers-notification',);
            }

            if (0 === strpos($pathinfo, '/platform/a')) {
                // ajouter-tache
                if (0 === strpos($pathinfo, '/platform/add-tache') && preg_match('#^/platform/add\\-tache/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter-tache')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TacheController::addAction',));
                }

                // affect-collaborateur
                if (0 === strpos($pathinfo, '/platform/affect-collab') && preg_match('#^/platform/affect\\-collab/(?P<id>[^/]++)/(?P<tache>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'affect-collaborateur')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TacheController::affectAction',));
                }

            }

            // desaffect-collaborateur
            if (0 === strpos($pathinfo, '/platform/desaffect-collab') && preg_match('#^/platform/desaffect\\-collab/(?P<id>[^/]++)/(?P<tache>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'desaffect-collaborateur')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TacheController::desaffectAction',));
            }

            // edit-tache
            if (0 === strpos($pathinfo, '/platform/edit-tache') && preg_match('#^/platform/edit\\-tache/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit-tache')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TacheController::editAction',));
            }

            // delete-tache
            if (0 === strpos($pathinfo, '/platform/delete-tache') && preg_match('#^/platform/delete\\-tache/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete-tache')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TacheController::deleteAction',));
            }

            // view-tache
            if (0 === strpos($pathinfo, '/platform/view-tache') && preg_match('#^/platform/view\\-tache/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'view-tache')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TacheController::viewAction',));
            }

            // messages-taches
            if (0 === strpos($pathinfo, '/platform/messages-tache') && preg_match('#^/platform/messages\\-tache/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'messages-taches')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TacheController::messagesAction',));
            }

            // ajouter-depense
            if (0 === strpos($pathinfo, '/platform/add-depense') && preg_match('#^/platform/add\\-depense/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter-depense')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DepenseController::addAction',));
            }

            // edit-depense
            if (0 === strpos($pathinfo, '/platform/edit-depense') && preg_match('#^/platform/edit\\-depense/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit-depense')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DepenseController::editAction',));
            }

            // delete-depense
            if (0 === strpos($pathinfo, '/platform/delete-depense') && preg_match('#^/platform/delete\\-depense/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete-depense')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DepenseController::deleteAction',));
            }

            // ajouter-tranche
            if (0 === strpos($pathinfo, '/platform/add-tranche') && preg_match('#^/platform/add\\-tranche/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter-tranche')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TrancheController::addAction',));
            }

            // edit-tranche
            if (0 === strpos($pathinfo, '/platform/edit-tranche') && preg_match('#^/platform/edit\\-tranche/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit-tranche')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TrancheController::editAction',));
            }

            // delete-tranche
            if (0 === strpos($pathinfo, '/platform/delete-tranche') && preg_match('#^/platform/delete\\-tranche/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete-tranche')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TrancheController::deleteAction',));
            }

            // ajouter-client
            if ($pathinfo === '/platform/add-client') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\ClientController::addAction',  '_route' => 'ajouter-client',);
            }

            // liste-client
            if ($pathinfo === '/platform/liste-client') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\ClientController::listerAction',  '_route' => 'liste-client',);
            }

            // show-client
            if (0 === strpos($pathinfo, '/platform/show-client') && preg_match('#^/platform/show\\-client/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show-client')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ClientController::showAction',));
            }

            // edit-client
            if (0 === strpos($pathinfo, '/platform/edit-client') && preg_match('#^/platform/edit\\-client/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit-client')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ClientController::editAction',));
            }

            // delete-client
            if (0 === strpos($pathinfo, '/platform/delete-client') && preg_match('#^/platform/delete\\-client/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete-client')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ClientController::deleteAction',));
            }

            // ajouter-collaborateur
            if ($pathinfo === '/platform/add-collaborateur') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\CollaborateurController::addAction',  '_route' => 'ajouter-collaborateur',);
            }

            // liste-collaborateur
            if ($pathinfo === '/platform/liste-collaborateur') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\CollaborateurController::listerAction',  '_route' => 'liste-collaborateur',);
            }

            // edit-collaborateur
            if (0 === strpos($pathinfo, '/platform/edit-collaborateur') && preg_match('#^/platform/edit\\-collaborateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit-collaborateur')), array (  '_controller' => 'BackOfficeBundle\\Controller\\CollaborateurController::editAction',));
            }

            // delete-collaborateur
            if (0 === strpos($pathinfo, '/platform/delete-collaborateur') && preg_match('#^/platform/delete\\-collaborateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete-collaborateur')), array (  '_controller' => 'BackOfficeBundle\\Controller\\CollaborateurController::deleteAction',));
            }

            // reset-collaborateur
            if (0 === strpos($pathinfo, '/platform/reset-collaborateur') && preg_match('#^/platform/reset\\-collaborateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reset-collaborateur')), array (  '_controller' => 'BackOfficeBundle\\Controller\\CollaborateurController::resetAction',));
            }

            // view-collaborateur
            if (0 === strpos($pathinfo, '/platform/view-collaborateur') && preg_match('#^/platform/view\\-collaborateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'view-collaborateur')), array (  '_controller' => 'BackOfficeBundle\\Controller\\CollaborateurController::viewAction',));
            }

            // ajouter-poste-col
            if ($pathinfo === '/platform/add-poste-col') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\PosteCollaborateurController::addAction',  '_route' => 'ajouter-poste-col',);
            }

            // liste-poste-col
            if ($pathinfo === '/platform/liste-poste-col') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\PosteCollaborateurController::listerAction',  '_route' => 'liste-poste-col',);
            }

            // edit-poste-col
            if (0 === strpos($pathinfo, '/platform/edit-poste') && preg_match('#^/platform/edit\\-poste/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit-poste-col')), array (  '_controller' => 'BackOfficeBundle\\Controller\\PosteCollaborateurController::editAction',));
            }

            // delete-poste-col
            if (0 === strpos($pathinfo, '/platform/delete-poste') && preg_match('#^/platform/delete\\-poste/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete-poste-col')), array (  '_controller' => 'BackOfficeBundle\\Controller\\PosteCollaborateurController::deleteAction',));
            }

            // ajouter-type-projet
            if ($pathinfo === '/platform/platform/add-type-projet') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeProjetController::addAction',  '_route' => 'ajouter-type-projet',);
            }

            // liste-type-projet
            if ($pathinfo === '/platform/liste-type-projet') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeProjetController::listerAction',  '_route' => 'liste-type-projet',);
            }

            // edit-type-projet
            if (0 === strpos($pathinfo, '/platform/edit-type-projet') && preg_match('#^/platform/edit\\-type\\-projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit-type-projet')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeProjetController::editAction',));
            }

            // delete-type-projet
            if (0 === strpos($pathinfo, '/platform/delete-type-projet') && preg_match('#^/platform/delete\\-type\\-projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete-type-projet')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeProjetController::deleteAction',));
            }

            // ajouter-statut-projet
            if ($pathinfo === '/platform/add-statut-projet') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\StatutProjetController::addAction',  '_route' => 'ajouter-statut-projet',);
            }

            // liste-statut-projet
            if ($pathinfo === '/platform/liste-statut-projet') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\StatutProjetController::listerAction',  '_route' => 'liste-statut-projet',);
            }

            // edit-statut-projet
            if (0 === strpos($pathinfo, '/platform/edit-statut-projet') && preg_match('#^/platform/edit\\-statut\\-projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit-statut-projet')), array (  '_controller' => 'BackOfficeBundle\\Controller\\StatutProjetController::editAction',));
            }

            // ajouter-statut-tache
            if ($pathinfo === '/platform/add-statut-tache') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\StatutTacheController::addAction',  '_route' => 'ajouter-statut-tache',);
            }

            // liste-statut-tache
            if ($pathinfo === '/platform/liste-statut-tache') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\StatutTacheController::listerAction',  '_route' => 'liste-statut-tache',);
            }

            // edit-statut-tache
            if (0 === strpos($pathinfo, '/platform/edit-statut-tache') && preg_match('#^/platform/edit\\-statut\\-tache/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit-statut-tache')), array (  '_controller' => 'BackOfficeBundle\\Controller\\StatutTacheController::editAction',));
            }

            // ajouter-type-depense
            if ($pathinfo === '/platform/add-type-depense') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeDepenseController::addAction',  '_route' => 'ajouter-type-depense',);
            }

            // liste-type-depense
            if ($pathinfo === '/platform/liste-type-depense') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeDepenseController::listerAction',  '_route' => 'liste-type-depense',);
            }

            // edit-type-depense
            if (0 === strpos($pathinfo, '/platform/edit-type-depense') && preg_match('#^/platform/edit\\-type\\-depense/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit-type-depense')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeDepenseController::editAction',));
            }

            // delete-type-depense
            if (0 === strpos($pathinfo, '/platform/delete-type-depense') && preg_match('#^/platform/delete\\-type\\-depense/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete-type-depense')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeDepenseController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/platform/log')) {
                if (0 === strpos($pathinfo, '/platform/login')) {
                    // backlogin
                    if ($pathinfo === '/platform/login') {
                        return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'backlogin',);
                    }

                    // backlogin_check
                    if ($pathinfo === '/platform/login_check') {
                        return array('_route' => 'backlogin_check');
                    }

                }

                // backlogout
                if ($pathinfo === '/platform/logout') {
                    return array('_route' => 'backlogout');
                }

            }

        }

        if (0 === strpos($pathinfo, '/collaborateur')) {
            // front_office_homepage
            if (rtrim($pathinfo, '/') === '/collaborateur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'front_office_homepage');
                }

                return array (  '_controller' => 'FrontOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_office_homepage',);
            }

            // detail-tache
            if (0 === strpos($pathinfo, '/collaborateur/view-tache') && preg_match('#^/collaborateur/view\\-tache/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail-tache')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\TacheController::viewAction',));
            }

            // edit-profil
            if (rtrim($pathinfo, '/') === '/collaborateur/edit-profil') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'edit-profil');
                }

                return array (  '_controller' => 'FrontOfficeBundle\\Controller\\CollaborateurController::editAction',  '_route' => 'edit-profil',);
            }

            // detail-projet
            if (0 === strpos($pathinfo, '/collaborateur/view-projet') && preg_match('#^/collaborateur/view\\-projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail-projet')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\ProjetController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/collaborateur/message')) {
                // msg-projet
                if (0 === strpos($pathinfo, '/collaborateur/messages-projet') && preg_match('#^/collaborateur/messages\\-projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'msg-projet')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\ProjetController::messagesAction',));
                }

                // messages-tache
                if (0 === strpos($pathinfo, '/collaborateur/message-tache') && preg_match('#^/collaborateur/message\\-tache/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'messages-tache')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\TacheController::messagesAction',));
                }

                // notification-collaborateur-message
                if ($pathinfo === '/collaborateur/messages-notification') {
                    return array (  '_controller' => 'FrontOfficeBundle\\Controller\\NotificationController::messagesAction',  '_route' => 'notification-collaborateur-message',);
                }

            }

            // taches-en-cours
            if ($pathinfo === '/collaborateur/taches-notification') {
                return array (  '_controller' => 'FrontOfficeBundle\\Controller\\NotificationController::tachesencoursAction',  '_route' => 'taches-en-cours',);
            }

            // notification-collaborateur-fichier
            if ($pathinfo === '/collaborateur/fichier-notification') {
                return array (  '_controller' => 'FrontOfficeBundle\\Controller\\NotificationController::fichiersAction',  '_route' => 'notification-collaborateur-fichier',);
            }

            if (0 === strpos($pathinfo, '/collaborateur/log')) {
                if (0 === strpos($pathinfo, '/collaborateur/login')) {
                    // frontlogin
                    if ($pathinfo === '/collaborateur/login') {
                        return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::cloginAction',  '_route' => 'frontlogin',);
                    }

                    // frontlogin_check
                    if ($pathinfo === '/collaborateur/login_check') {
                        return array('_route' => 'frontlogin_check');
                    }

                }

                // frontlogout
                if ($pathinfo === '/collaborateur/logout') {
                    return array('_route' => 'frontlogout');
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
