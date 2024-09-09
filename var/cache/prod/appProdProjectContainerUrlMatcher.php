<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // web_home_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'WebBundle\\Controller\\HomeController::indexAction',  '_route' => 'web_home_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_web_home_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'web_home_index'));
            }

            return $ret;
        }
        not_web_home_index:

        if (0 === strpos($pathinfo, '/m')) {
            // wep_home_mylist
            if ('/mylist.html' === $pathinfo) {
                return array (  '_controller' => 'WebBundle\\Controller\\HomeController::mylistAction',  '_route' => 'wep_home_mylist',);
            }

            if (0 === strpos($pathinfo, '/movie')) {
                // wep_movie_view
                if (preg_match('#^/movie/(?P<id>\\d+)/(?P<slug>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_movie_view']), array (  '_controller' => 'WebBundle\\Controller\\MovieController::viewAction',));
                }

                // wep_movie_index
                if (0 === strpos($pathinfo, '/movies') && preg_match('#^/movies/(?P<genre>[^/]++)/(?P<order>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_movie_index']), array (  '_controller' => 'WebBundle\\Controller\\MovieController::indexAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/medias')) {
                // media_index
                if ('/medias' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'MediaBundle\\Controller\\MediaController::indexAction',  '_route' => 'media_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_media_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'media_index'));
                    }

                    return $ret;
                }
                not_media_index:

                // media_add
                if ('/medias/add' === $pathinfo) {
                    return array (  '_controller' => 'MediaBundle\\Controller\\MediaController::addAction',  '_route' => 'media_add',);
                }

                // media_delete
                if (0 === strpos($pathinfo, '/medias/delete') && preg_match('#^/medias/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'media_delete']), array (  '_controller' => 'MediaBundle\\Controller\\MediaController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/media/cache/resolve')) {
                // liip_imagine_filter_runtime
                if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'liip_imagine_filter_runtime']), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_liip_imagine_filter_runtime;
                    }

                    return $ret;
                }
                not_liip_imagine_filter_runtime:

                // liip_imagine_filter
                if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'liip_imagine_filter']), array (  '_controller' => 'liip_imagine.controller:filterAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_liip_imagine_filter;
                    }

                    return $ret;
                }
                not_liip_imagine_filter:

            }

        }

        elseif (0 === strpos($pathinfo, '/pr')) {
            // wep_home_privacy
            if ('/privacy-policy.html' === $pathinfo) {
                return array (  '_controller' => 'WebBundle\\Controller\\HomeController::privacyAction',  '_route' => 'wep_home_privacy',);
            }

            // app_home_privacypolicy
            if ('/privacy_policy.html' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\HomeController::privacypolicyAction',  '_route' => 'app_home_privacypolicy',);
            }

            if (0 === strpos($pathinfo, '/profile')) {
                // user_user_subscriptions
                if ('/profile/subscriptions.html' === $pathinfo) {
                    return array (  '_controller' => 'UserBundle\\Controller\\UserController::subscriptionsAction',  '_route' => 'user_user_subscriptions',);
                }

                // fos_user_myprofile_edit
                if ('/profile/edit.html' === $pathinfo) {
                    return array (  '_controller' => 'UserBundle\\Controller\\UserController::myeditAction',  '_route' => 'fos_user_myprofile_edit',);
                }

                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

        }

        elseif (0 === strpos($pathinfo, '/player')) {
            // wep_player_channel
            if (0 === strpos($pathinfo, '/player/c') && preg_match('#^/player/c/(?P<id>\\d+)/(?P<slug>[^/]++)/(?P<source>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_player_channel']), array (  '_controller' => 'WebBundle\\Controller\\PlayerController::channelAction',));
            }

            // wep_player_movie
            if (0 === strpos($pathinfo, '/player/m') && preg_match('#^/player/m/(?P<id>\\d+)/(?P<slug>[^/]++)/(?P<source>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_player_movie']), array (  '_controller' => 'WebBundle\\Controller\\PlayerController::movieAction',));
            }

            // wep_player_pre_episode
            if (0 === strpos($pathinfo, '/player/pre/e') && preg_match('#^/player/pre/e/(?P<id>\\d+)/(?P<slug>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_player_pre_episode']), array (  '_controller' => 'WebBundle\\Controller\\PlayerController::preepisodeAction',));
            }

            // wep_player_episode
            if (0 === strpos($pathinfo, '/player/e') && preg_match('#^/player/e/(?P<id>\\d+)/(?P<slug>[^/]++)/(?P<source>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_player_episode']), array (  '_controller' => 'WebBundle\\Controller\\PlayerController::episodeAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            // wep_home_contact
            if ('/contact-us.html' === $pathinfo) {
                return array (  '_controller' => 'WebBundle\\Controller\\HomeController::contactAction',  '_route' => 'wep_home_contact',);
            }

            if (0 === strpos($pathinfo, '/connect')) {
                // hwi_oauth_service_redirect
                if (preg_match('#^/connect/(?P<service>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'hwi_oauth_service_redirect']), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
                }

                // hwi_oauth_connect_service
                if (0 === strpos($pathinfo, '/connect/service') && preg_match('#^/connect/service/(?P<service>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'hwi_oauth_connect_service']), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',));
                }

                // hwi_oauth_connect_registration
                if (0 === strpos($pathinfo, '/connect/registration') && preg_match('#^/connect/registration/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'hwi_oauth_connect_registration']), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/channel')) {
                // wep_channel_view
                if (preg_match('#^/channel/(?P<id>\\d+)/(?P<slug>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_channel_view']), array (  '_controller' => 'WebBundle\\Controller\\ChannelController::viewAction',));
                }

                // wep_channel_index
                if (0 === strpos($pathinfo, '/channels') && preg_match('#^/channels/(?P<category>[^/]++)/(?P<country>[^/]++)/(?P<order>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_channel_index']), array (  '_controller' => 'WebBundle\\Controller\\ChannelController::indexAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/c/share')) {
                // wep_channel_share
                if (preg_match('#^/c/share/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_channel_share']), array (  '_controller' => 'WebBundle\\Controller\\ChannelController::shareAction',));
                }

                // app_channel_share
                if (preg_match('#^/c/share/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_channel_share']), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::shareAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            // wep_home_refund
            if ('/refund-policy.html' === $pathinfo) {
                return array (  '_controller' => 'WebBundle\\Controller\\HomeController::refund_privacyAction',  '_route' => 'wep_home_refund',);
            }

            if (0 === strpos($pathinfo, '/resetting')) {
                if (0 === strpos($pathinfo, '/resetting/reset')) {
                    // fos_user_resetting_reseted
                    if ('/resetting/reseted' === $pathinfo) {
                        return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::resetedAction',  '_route' => 'fos_user_resetting_reseted',);
                    }

                    // fos_user_resetting_reset
                    if (preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_fos_user_resetting_reset;
                        }

                        return $ret;
                    }
                    not_fos_user_resetting_reset:

                }

                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        // wep_home_faq
        if ('/faq-support.html' === $pathinfo) {
            return array (  '_controller' => 'WebBundle\\Controller\\HomeController::faqAction',  '_route' => 'wep_home_faq',);
        }

        // wep_poster_filter
        if (0 === strpos($pathinfo, '/filter') && preg_match('#^/filter/(?P<genre>[^/]++)/(?P<order>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_poster_filter']), array (  '_controller' => 'WebBundle\\Controller\\MovieController::filterAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/ajax')) {
                if (0 === strpos($pathinfo, '/ajax/m')) {
                    // wep_home_mylist_add
                    if ('/ajax/mylist/add.html' === $pathinfo) {
                        return array (  '_controller' => 'WebBundle\\Controller\\HomeController::ajaxMyListAction',  '_route' => 'wep_home_mylist_add',);
                    }

                    // wep_movie_subtitles
                    if (0 === strpos($pathinfo, '/ajax/movie/subtitles') && preg_match('#^/ajax/movie/subtitles/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_movie_subtitles']), array (  '_controller' => 'WebBundle\\Controller\\MovieController::subtitlesAction',));
                    }

                    // wep_movie_downloads
                    if (0 === strpos($pathinfo, '/ajax/movie/downloads') && preg_match('#^/ajax/movie/downloads/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_movie_downloads']), array (  '_controller' => 'WebBundle\\Controller\\MovieController::downloadsAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/ajax/s')) {
                    // wep_subscription_charge
                    if ('/ajax/subscription/charge.html' === $pathinfo) {
                        return array (  '_controller' => 'WebBundle\\Controller\\SubscriptionController::charge_ajaxAction',  '_route' => 'wep_subscription_charge',);
                    }

                    // wep_serie_subtitles
                    if (0 === strpos($pathinfo, '/ajax/serie/subtitles') && preg_match('#^/ajax/serie/subtitles/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_serie_subtitles']), array (  '_controller' => 'WebBundle\\Controller\\SerieController::subtitlesAction',));
                    }

                    // wep_serie_downloads
                    if (0 === strpos($pathinfo, '/ajax/serie/downloads') && preg_match('#^/ajax/serie/downloads/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_serie_downloads']), array (  '_controller' => 'WebBundle\\Controller\\SerieController::downloadsAction',));
                    }

                }

                // ajax_home_theme
                if ('/ajax/theme' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'WebBundle\\Controller\\HomeController::ajaxThemeAction',  '_route' => 'ajax_home_theme',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_ajax_home_theme;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ajax_home_theme'));
                    }

                    return $ret;
                }
                not_ajax_home_theme:

                // wep_serie_episodes
                if (0 === strpos($pathinfo, '/ajax/episodes') && preg_match('#^/ajax/episodes/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_serie_episodes']), array (  '_controller' => 'WebBundle\\Controller\\SerieController::episodesAction',));
                }

                // wep_comment_add
                if ('/ajax/comment/add.html' === $pathinfo) {
                    return array (  '_controller' => 'WebBundle\\Controller\\CommentController::ajaxAddAction',  '_route' => 'wep_comment_add',);
                }

                // wep_rate_add
                if ('/ajax/rating/add.html' === $pathinfo) {
                    return array (  '_controller' => 'WebBundle\\Controller\\RateController::ajaxAddAction',  '_route' => 'wep_rate_add',);
                }

                // ajax_login
                if ('/ajax' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'UserBundle\\Controller\\SecurityController::ajaxloginAction',  '_route' => 'ajax_login',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_ajax_login;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ajax_login'));
                    }

                    return $ret;
                }
                not_ajax_login:

            }

            elseif (0 === strpos($pathinfo, '/actor')) {
                // wep_actor_view
                if (preg_match('#^/actor/(?P<id>\\d+)/(?P<slug>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_actor_view']), array (  '_controller' => 'WebBundle\\Controller\\ActorController::viewAction',));
                }

                // wep_actor_index
                if ('/actors.html' === $pathinfo) {
                    return array (  '_controller' => 'WebBundle\\Controller\\ActorController::indexAction',  '_route' => 'wep_actor_index',);
                }

            }

            elseif (0 === strpos($pathinfo, '/api')) {
                if (0 === strpos($pathinfo, '/api/user')) {
                    if (0 === strpos($pathinfo, '/api/user/re')) {
                        // api_user_register
                        if (0 === strpos($pathinfo, '/api/user/register') && preg_match('#^/api/user/register/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_user_register']), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_registerAction',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_api_user_register;
                            }

                            return $ret;
                        }
                        not_api_user_register:

                        // api_user_request
                        if (0 === strpos($pathinfo, '/api/user/request') && preg_match('#^/api/user/request/(?P<key>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_user_request']), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::api_requestAction',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_user_request;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_user_request'));
                            }

                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_api_user_request;
                            }

                            return $ret;
                        }
                        not_api_user_request:

                        // api_user_reset
                        if (0 === strpos($pathinfo, '/api/user/reset') && preg_match('#^/api/user/reset/(?P<id>[^/]++)/(?P<key>[^/]++)/(?P<new_password>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_user_reset']), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::api_resetAction',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_user_reset;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_user_reset'));
                            }

                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_api_user_reset;
                            }

                            return $ret;
                        }
                        not_api_user_reset:

                    }

                    // api_user_edit
                    if (0 === strpos($pathinfo, '/api/user/edit') && preg_match('#^/api/user/edit/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_user_edit']), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_editAction',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_api_user_edit;
                        }

                        return $ret;
                    }
                    not_api_user_edit:

                    // api_user_email
                    if (0 === strpos($pathinfo, '/api/user/email') && preg_match('#^/api/user/email/(?P<email>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_user_email']), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::api_emailAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_user_email;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_user_email'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_api_user_email;
                        }

                        return $ret;
                    }
                    not_api_user_email:

                    // api_user_token
                    if (0 === strpos($pathinfo, '/api/user/token') && preg_match('#^/api/user/token/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_user_token']), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_tokenAction',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_api_user_token;
                        }

                        return $ret;
                    }
                    not_api_user_token:

                    // api_user_login
                    if (0 === strpos($pathinfo, '/api/user/login') && preg_match('#^/api/user/login/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_user_login']), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_loginAction',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_api_user_login;
                        }

                        return $ret;
                    }
                    not_api_user_login:

                    // api_user_check
                    if (0 === strpos($pathinfo, '/api/user/check') && preg_match('#^/api/user/check/(?P<id>[^/]++)/(?P<key>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_user_check']), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_checkAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_user_check;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_user_check'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_api_user_check;
                        }

                        return $ret;
                    }
                    not_api_user_check:

                    // api_user_change_password
                    if (0 === strpos($pathinfo, '/api/user/password') && preg_match('#^/api/user/password/(?P<id>[^/]++)/(?P<password>[^/]++)/(?P<new_password>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_user_change_password']), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_change_passwordAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_user_change_password;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_user_change_password'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_api_user_change_password;
                        }

                        return $ret;
                    }
                    not_api_user_change_password:

                }

                // api_home_api_first
                if (0 === strpos($pathinfo, '/api/first') && preg_match('#^/api/first/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_home_api_first']), array (  '_controller' => 'AppBundle\\Controller\\HomeController::api_firstAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_api_home_api_first;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_home_api_first'));
                    }

                    return $ret;
                }
                not_api_home_api_first:

                if (0 === strpos($pathinfo, '/api/m')) {
                    // api_home_api_my_list
                    if (0 === strpos($pathinfo, '/api/mylist') && preg_match('#^/api/mylist/(?P<id>[^/]++)/(?P<key>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_home_api_my_list']), array (  '_controller' => 'AppBundle\\Controller\\HomeController::api_mylistAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_home_api_my_list;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_home_api_my_list'));
                        }

                        return $ret;
                    }
                    not_api_home_api_my_list:

                    if (0 === strpos($pathinfo, '/api/movie')) {
                        // api_movie_random
                        if (0 === strpos($pathinfo, '/api/movie/random') && preg_match('#^/api/movie/random/(?P<genres>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_movie_random']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::api_randomAction',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_movie_random;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_movie_random'));
                            }

                            return $ret;
                        }
                        not_api_movie_random:

                        if (0 === strpos($pathinfo, '/api/movie/by')) {
                            // api_movie_by_filtres
                            if (0 === strpos($pathinfo, '/api/movie/by/filtres') && preg_match('#^/api/movie/by/filtres/(?P<genre>\\d+)/(?P<order>[^/]++)/(?P<page>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_movie_by_filtres']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::api_by_filtresAction',));
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif ('GET' !== $canonicalMethod) {
                                    goto not_api_movie_by_filtres;
                                } else {
                                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_movie_by_filtres'));
                                }

                                return $ret;
                            }
                            not_api_movie_by_filtres:

                            // api_movie_by_user
                            if (0 === strpos($pathinfo, '/api/movie/by/actor') && preg_match('#^/api/movie/by/actor/(?P<id>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_movie_by_user']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::api_by_actorAction',));
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif ('GET' !== $canonicalMethod) {
                                    goto not_api_movie_by_user;
                                } else {
                                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_movie_by_user'));
                                }

                                return $ret;
                            }
                            not_api_movie_by_user:

                            // api_movie_by_id
                            if (preg_match('#^/api/movie/by/(?P<id>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_movie_by_id']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::api_by_idAction',));
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif ('GET' !== $canonicalMethod) {
                                    goto not_api_movie_by_id;
                                } else {
                                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_movie_by_id'));
                                }

                                return $ret;
                            }
                            not_api_movie_by_id:

                        }

                        // api_movie_add_download
                        if (0 === strpos($pathinfo, '/api/movie/add/download') && preg_match('#^/api/movie/add/download/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_movie_add_download']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::api_add_downloadAction',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_movie_add_download;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_movie_add_download'));
                            }

                            return $ret;
                        }
                        not_api_movie_add_download:

                        // api_movie_add_view
                        if (0 === strpos($pathinfo, '/api/movie/add/view') && preg_match('#^/api/movie/add/view/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_movie_add_view']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::api_add_viewAction',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_movie_add_view;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_movie_add_view'));
                            }

                            return $ret;
                        }
                        not_api_movie_add_view:

                    }

                    // api_media_delete
                    if (0 === strpos($pathinfo, '/api/medias/delete') && preg_match('#^/api/medias/delete/(?P<id>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_media_delete']), array (  '_controller' => 'MediaBundle\\Controller\\MediaController::api_deleteAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_media_delete;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_media_delete'));
                        }

                        return $ret;
                    }
                    not_api_media_delete:

                    // media_api_upload
                    if (0 === strpos($pathinfo, '/api/medias/upload') && preg_match('#^/api/medias/upload/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'media_api_upload']), array (  '_controller' => 'MediaBundle\\Controller\\MediaController::api_uploadAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_media_api_upload;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'media_api_upload'));
                        }

                        return $ret;
                    }
                    not_media_api_upload:

                }

                // api_home_api_addlist
                if (0 === strpos($pathinfo, '/api/add/mylist') && preg_match('#^/api/add/mylist/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_home_api_addlist']), array (  '_controller' => 'AppBundle\\Controller\\HomeController::api_addlistAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_api_home_api_addlist;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_home_api_addlist'));
                    }

                    return $ret;
                }
                not_api_home_api_addlist:

                // api_actor_all
                if (0 === strpos($pathinfo, '/api/actor/all') && preg_match('#^/api/actor/all/(?P<page>\\d+)/(?P<search>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_actor_all']), array (  '_controller' => 'AppBundle\\Controller\\ActorController::api_allAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_api_actor_all;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_actor_all'));
                    }

                    return $ret;
                }
                not_api_actor_all:

                if (0 === strpos($pathinfo, '/api/c')) {
                    // api_home_api_check
                    if (0 === strpos($pathinfo, '/api/check/mylist') && preg_match('#^/api/check/mylist/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_home_api_check']), array (  '_controller' => 'AppBundle\\Controller\\HomeController::api_checklistAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_home_api_check;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_home_api_check'));
                        }

                        return $ret;
                    }
                    not_api_home_api_check:

                    if (0 === strpos($pathinfo, '/api/channel')) {
                        // api_channel_random
                        if (0 === strpos($pathinfo, '/api/channel/random') && preg_match('#^/api/channel/random/(?P<categories>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_channel_random']), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::api_randomAction',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_channel_random;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_channel_random'));
                            }

                            return $ret;
                        }
                        not_api_channel_random:

                        if (0 === strpos($pathinfo, '/api/channel/by')) {
                            // api_channel_by_filtres
                            if (0 === strpos($pathinfo, '/api/channel/by/filtres') && preg_match('#^/api/channel/by/filtres/(?P<category>\\d+)/(?P<country>\\d+)/(?P<page>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_channel_by_filtres']), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::api_by_filtresAction',));
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif ('GET' !== $canonicalMethod) {
                                    goto not_api_channel_by_filtres;
                                } else {
                                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_channel_by_filtres'));
                                }

                                return $ret;
                            }
                            not_api_channel_by_filtres:

                            // api_channel_by_id
                            if (preg_match('#^/api/channel/by/(?P<id>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_channel_by_id']), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::api_by_idAction',));
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif ('GET' !== $canonicalMethod) {
                                    goto not_api_channel_by_id;
                                } else {
                                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_channel_by_id'));
                                }

                                return $ret;
                            }
                            not_api_channel_by_id:

                        }

                        // api_channel_add_share
                        if (0 === strpos($pathinfo, '/api/channel/add/share') && preg_match('#^/api/channel/add/share/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_channel_add_share']), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::api_add_shareAction',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_channel_add_share;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_channel_add_share'));
                            }

                            return $ret;
                        }
                        not_api_channel_add_share:

                        // api_channel_add_view
                        if (0 === strpos($pathinfo, '/api/channel/add/view') && preg_match('#^/api/channel/add/view/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_channel_add_view']), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::api_add_viewAction',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_channel_add_view;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_channel_add_view'));
                            }

                            return $ret;
                        }
                        not_api_channel_add_view:

                    }

                    // api_category_all
                    if (0 === strpos($pathinfo, '/api/category/all') && preg_match('#^/api/category/all/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_category_all']), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::api_allAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_category_all;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_category_all'));
                        }

                        return $ret;
                    }
                    not_api_category_all:

                    // api_category_popular
                    if (0 === strpos($pathinfo, '/api/category/popular') && preg_match('#^/api/category/popular/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_category_popular']), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::api_popularAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_category_popular;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_category_popular'));
                        }

                        return $ret;
                    }
                    not_api_category_popular:

                    // api_country_all
                    if (0 === strpos($pathinfo, '/api/country/all') && preg_match('#^/api/country/all/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_country_all']), array (  '_controller' => 'AppBundle\\Controller\\CountryController::api_allAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_country_all;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_country_all'));
                        }

                        return $ret;
                    }
                    not_api_country_all:

                    if (0 === strpos($pathinfo, '/api/comment')) {
                        // api_comment_add
                        if (0 === strpos($pathinfo, '/api/comment/add') && preg_match('#^/api/comment/add/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_comment_add']), array (  '_controller' => 'AppBundle\\Controller\\CommentController::api_addAction',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_api_comment_add;
                            }

                            return $ret;
                        }
                        not_api_comment_add:

                        // api_comment_poster_add
                        if (0 === strpos($pathinfo, '/api/comment/poster/add') && preg_match('#^/api/comment/poster/add/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_comment_poster_add']), array (  '_controller' => 'AppBundle\\Controller\\CommentController::api_add_posterAction',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_api_comment_poster_add;
                            }

                            return $ret;
                        }
                        not_api_comment_poster_add:

                        // api_comment_by_poster
                        if (0 === strpos($pathinfo, '/api/comments/by/poster') && preg_match('#^/api/comments/by/poster/(?P<id>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_comment_by_poster']), array (  '_controller' => 'AppBundle\\Controller\\CommentController::api_by_posterAction',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_comment_by_poster;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_comment_by_poster'));
                            }

                            return $ret;
                        }
                        not_api_comment_by_poster:

                        // api_comment_by_channel
                        if (0 === strpos($pathinfo, '/api/comments/by/channel') && preg_match('#^/api/comments/by/channel/(?P<id>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_comment_by_channel']), array (  '_controller' => 'AppBundle\\Controller\\CommentController::api_by_channelAction',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_comment_by_channel;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_comment_by_channel'));
                            }

                            return $ret;
                        }
                        not_api_comment_by_channel:

                        // api_comment_channel_add
                        if (0 === strpos($pathinfo, '/api/comment/channel/add') && preg_match('#^/api/comment/channel/add/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_comment_channel_add']), array (  '_controller' => 'AppBundle\\Controller\\CommentController::api_add_channelAction',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_api_comment_channel_add;
                            }

                            return $ret;
                        }
                        not_api_comment_channel_add:

                    }

                }

                elseif (0 === strpos($pathinfo, '/api/s')) {
                    if (0 === strpos($pathinfo, '/api/se')) {
                        // api_home_api_search
                        if (0 === strpos($pathinfo, '/api/search') && preg_match('#^/api/search/(?P<query>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_home_api_search']), array (  '_controller' => 'AppBundle\\Controller\\HomeController::api_searchAction',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_home_api_search;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_home_api_search'));
                            }

                            return $ret;
                        }
                        not_api_home_api_search:

                        // api_season_by_serie
                        if (0 === strpos($pathinfo, '/api/season/by/serie') && preg_match('#^/api/season/by/serie/(?P<id>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_season_by_serie']), array (  '_controller' => 'AppBundle\\Controller\\SeasonController::api_by_serieAction',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_season_by_serie;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_season_by_serie'));
                            }

                            return $ret;
                        }
                        not_api_season_by_serie:

                        // api_serie_by_filtres
                        if (0 === strpos($pathinfo, '/api/serie/by/filtres') && preg_match('#^/api/serie/by/filtres/(?P<genre>\\d+)/(?P<order>[^/]++)/(?P<page>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_serie_by_filtres']), array (  '_controller' => 'AppBundle\\Controller\\SerieController::api_by_filtresAction',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_serie_by_filtres;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_serie_by_filtres'));
                            }

                            return $ret;
                        }
                        not_api_serie_by_filtres:

                    }

                    elseif (0 === strpos($pathinfo, '/api/su')) {
                        // api_support_add
                        if (0 === strpos($pathinfo, '/api/support/add') && preg_match('#^/api/support/add/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_support_add']), array (  '_controller' => 'AppBundle\\Controller\\SupportController::api_addAction',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_api_support_add;
                            }

                            return $ret;
                        }
                        not_api_support_add:

                        if (0 === strpos($pathinfo, '/api/subscription')) {
                            // api_subscription_paypal
                            if (0 === strpos($pathinfo, '/api/subscription/paypal') && preg_match('#^/api/subscription/paypal/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_subscription_paypal']), array (  '_controller' => 'AppBundle\\Controller\\SubscriptionController::api_paypalAction',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_api_subscription_paypal;
                                }

                                return $ret;
                            }
                            not_api_subscription_paypal:

                            // api_subscription_stripe
                            if (0 === strpos($pathinfo, '/api/subscription/stripe') && preg_match('#^/api/subscription/stripe/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_subscription_stripe']), array (  '_controller' => 'AppBundle\\Controller\\SubscriptionController::api_stripeAction',));
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif ('GET' !== $canonicalMethod) {
                                    goto not_api_subscription_stripe;
                                } else {
                                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_subscription_stripe'));
                                }

                                return $ret;
                            }
                            not_api_subscription_stripe:

                            // api_subscription_cash
                            if (0 === strpos($pathinfo, '/api/subscription/cash') && preg_match('#^/api/subscription/cash/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_subscription_cash']), array (  '_controller' => 'AppBundle\\Controller\\SubscriptionController::api_cashAction',));
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif ('GET' !== $canonicalMethod) {
                                    goto not_api_subscription_cash;
                                } else {
                                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_subscription_cash'));
                                }

                                return $ret;
                            }
                            not_api_subscription_cash:

                            // api_subscription_intent
                            if (0 === strpos($pathinfo, '/api/subscription/intent') && preg_match('#^/api/subscription/intent/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_subscription_intent']), array (  '_controller' => 'AppBundle\\Controller\\SubscriptionController::api_intentAction',));
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif ('GET' !== $canonicalMethod) {
                                    goto not_api_subscription_intent;
                                } else {
                                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_subscription_intent'));
                                }

                                return $ret;
                            }
                            not_api_subscription_intent:

                        }

                        elseif (0 === strpos($pathinfo, '/api/subtitle')) {
                            // api_subtitle_by_movie
                            if (0 === strpos($pathinfo, '/api/subtitles/by/movie') && preg_match('#^/api/subtitles/by/movie/(?P<id>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_subtitle_by_movie']), array (  '_controller' => 'AppBundle\\Controller\\SubtitleController::api_by_movieAction',));
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif ('GET' !== $canonicalMethod) {
                                    goto not_api_subtitle_by_movie;
                                } else {
                                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_subtitle_by_movie'));
                                }

                                return $ret;
                            }
                            not_api_subtitle_by_movie:

                            // api_subtitle_by_episode
                            if (0 === strpos($pathinfo, '/api/subtitles/by/episode') && preg_match('#^/api/subtitles/by/episode/(?P<id>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_subtitle_by_episode']), array (  '_controller' => 'AppBundle\\Controller\\SubtitleController::api_by_episodeAction',));
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif ('GET' !== $canonicalMethod) {
                                    goto not_api_subtitle_by_episode;
                                } else {
                                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_subtitle_by_episode'));
                                }

                                return $ret;
                            }
                            not_api_subtitle_by_episode:

                            // api_subtitle_by_id
                            if (preg_match('#^/api/subtitle/(?P<token>[^/]++)/(?P<purchase>[^/]++)/(?P<id>\\d+)_subtitle\\.vtt$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_subtitle_by_id']), array (  '_controller' => 'AppBundle\\Controller\\SubtitleController::api_by_idAction',));
                            }

                        }

                    }

                    // api_slide_all
                    if (0 === strpos($pathinfo, '/api/slide/all') && preg_match('#^/api/slide/all/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_slide_all']), array (  '_controller' => 'AppBundle\\Controller\\SlideController::api_allAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_slide_all;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_slide_all'));
                        }

                        return $ret;
                    }
                    not_api_slide_all:

                }

                // api_home_api_device
                if (0 === strpos($pathinfo, '/api/device') && preg_match('#^/api/device/(?P<tkn>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_home_api_device']), array (  '_controller' => 'AppBundle\\Controller\\HomeController::api_deviceAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_api_home_api_device;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_home_api_device'));
                    }

                    return $ret;
                }
                not_api_home_api_device:

                if (0 === strpos($pathinfo, '/api/p')) {
                    // api_pack_all
                    if (0 === strpos($pathinfo, '/api/pack/all') && preg_match('#^/api/pack/all/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_pack_all']), array (  '_controller' => 'AppBundle\\Controller\\PackController::api_allAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_pack_all;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_pack_all'));
                        }

                        return $ret;
                    }
                    not_api_pack_all:

                    // api_poster_by_filtres
                    if (0 === strpos($pathinfo, '/api/poster/by/filtres') && preg_match('#^/api/poster/by/filtres/(?P<genre>\\d+)/(?P<order>[^/]++)/(?P<page>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_poster_by_filtres']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::api_poster_by_filtresAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_poster_by_filtres;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_poster_by_filtres'));
                        }

                        return $ret;
                    }
                    not_api_poster_by_filtres:

                    // api_poster_add_share
                    if (0 === strpos($pathinfo, '/api/poster/add/share') && preg_match('#^/api/poster/add/share/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_poster_add_share']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::api_add_shareAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_poster_add_share;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_poster_add_share'));
                        }

                        return $ret;
                    }
                    not_api_poster_add_share:

                }

                // api_genre_all
                if (0 === strpos($pathinfo, '/api/genre/all') && preg_match('#^/api/genre/all/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_genre_all']), array (  '_controller' => 'AppBundle\\Controller\\GenreController::api_allAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_api_genre_all;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_genre_all'));
                    }

                    return $ret;
                }
                not_api_genre_all:

                // api_episode_add_download
                if (0 === strpos($pathinfo, '/api/episode/add/download') && preg_match('#^/api/episode/add/download/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_episode_add_download']), array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::api_add_downloadAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_api_episode_add_download;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_episode_add_download'));
                    }

                    return $ret;
                }
                not_api_episode_add_download:

                // api_episode_add_view
                if (0 === strpos($pathinfo, '/api/episode/add/view') && preg_match('#^/api/episode/add/view/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_episode_add_view']), array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::api_add_viewAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_api_episode_add_view;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_episode_add_view'));
                    }

                    return $ret;
                }
                not_api_episode_add_view:

                if (0 === strpos($pathinfo, '/api/r')) {
                    // api_rate_poster_add
                    if (0 === strpos($pathinfo, '/api/rate/poster/add') && preg_match('#^/api/rate/poster/add/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_rate_poster_add']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::api_add_rateAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_rate_poster_add;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_rate_poster_add'));
                        }

                        return $ret;
                    }
                    not_api_rate_poster_add:

                    // api_rate_channel_add
                    if (0 === strpos($pathinfo, '/api/rate/channel/add') && preg_match('#^/api/rate/channel/add/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_rate_channel_add']), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::api_add_rateAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_rate_channel_add;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_rate_channel_add'));
                        }

                        return $ret;
                    }
                    not_api_rate_channel_add:

                    // app_role_by_poster
                    if (0 === strpos($pathinfo, '/api/role/by/poster') && preg_match('#^/api/role/by/poster/(?P<id>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'app_role_by_poster']), array (  '_controller' => 'AppBundle\\Controller\\RoleController::api_by_posterAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_app_role_by_poster;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_role_by_poster'));
                        }

                        return $ret;
                    }
                    not_app_role_by_poster:

                }

                elseif (0 === strpos($pathinfo, '/api/v')) {
                    // api_version_check
                    if (0 === strpos($pathinfo, '/api/version/check') && preg_match('#^/api/version/check/(?P<code>\\d+)/(?P<user>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_version_check']), array (  '_controller' => 'AppBundle\\Controller\\VersionController::api_checkAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_version_check;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_version_check'));
                        }

                        return $ret;
                    }
                    not_api_version_check:

                    if (0 === strpos($pathinfo, '/api/video/add')) {
                        // api_video_add_like
                        if (0 === strpos($pathinfo, '/api/video/add/like') && preg_match('#^/api/video/add/like/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_video_add_like']), array (  '_controller' => 'AppBundle:Status:api_add_like',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_video_add_like;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_video_add_like'));
                            }

                            return $ret;
                        }
                        not_api_video_add_like:

                        // api_video_add_love
                        if (0 === strpos($pathinfo, '/api/video/add/love') && preg_match('#^/api/video/add/love/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_video_add_love']), array (  '_controller' => 'AppBundle:Status:api_add_love',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_video_add_love;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_video_add_love'));
                            }

                            return $ret;
                        }
                        not_api_video_add_love:

                        // api_video_add_angry
                        if (0 === strpos($pathinfo, '/api/video/add/angry') && preg_match('#^/api/video/add/angry/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_video_add_angry']), array (  '_controller' => 'AppBundle:Status:api_add_angry',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_video_add_angry;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_video_add_angry'));
                            }

                            return $ret;
                        }
                        not_api_video_add_angry:

                        // api_video_add_sad
                        if (0 === strpos($pathinfo, '/api/video/add/sad') && preg_match('#^/api/video/add/sad/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_video_add_sad']), array (  '_controller' => 'AppBundle:Status:api_add_sad',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_video_add_sad;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_video_add_sad'));
                            }

                            return $ret;
                        }
                        not_api_video_add_sad:

                        // api_video_add_haha
                        if (0 === strpos($pathinfo, '/api/video/add/haha') && preg_match('#^/api/video/add/haha/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_video_add_haha']), array (  '_controller' => 'AppBundle:Status:api_add_haha',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_video_add_haha;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_video_add_haha'));
                            }

                            return $ret;
                        }
                        not_api_video_add_haha:

                        // api_video_add_woow
                        if (0 === strpos($pathinfo, '/api/video/add/woow') && preg_match('#^/api/video/add/woow/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_video_add_woow']), array (  '_controller' => 'AppBundle:Status:api_add_woow',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_video_add_woow;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_video_add_woow'));
                            }

                            return $ret;
                        }
                        not_api_video_add_woow:

                    }

                    elseif (0 === strpos($pathinfo, '/api/video/delete')) {
                        // api_video_delete_like
                        if (0 === strpos($pathinfo, '/api/video/delete/like') && preg_match('#^/api/video/delete/like/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_video_delete_like']), array (  '_controller' => 'AppBundle:Status:api_delete_like',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_video_delete_like;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_video_delete_like'));
                            }

                            return $ret;
                        }
                        not_api_video_delete_like:

                        // api_video_delete_love
                        if (0 === strpos($pathinfo, '/api/video/delete/love') && preg_match('#^/api/video/delete/love/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_video_delete_love']), array (  '_controller' => 'AppBundle:Status:api_delete_love',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_video_delete_love;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_video_delete_love'));
                            }

                            return $ret;
                        }
                        not_api_video_delete_love:

                        // api_video_delete_angry
                        if (0 === strpos($pathinfo, '/api/video/delete/angry') && preg_match('#^/api/video/delete/angry/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_video_delete_angry']), array (  '_controller' => 'AppBundle:Status:api_delete_angry',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_video_delete_angry;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_video_delete_angry'));
                            }

                            return $ret;
                        }
                        not_api_video_delete_angry:

                        // api_video_delete_sad
                        if (0 === strpos($pathinfo, '/api/video/delete/sad') && preg_match('#^/api/video/delete/sad/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_video_delete_sad']), array (  '_controller' => 'AppBundle:Status:api_delete_sad',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_video_delete_sad;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_video_delete_sad'));
                            }

                            return $ret;
                        }
                        not_api_video_delete_sad:

                        // api_video_delete_haha
                        if (0 === strpos($pathinfo, '/api/video/delete/haha') && preg_match('#^/api/video/delete/haha/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_video_delete_haha']), array (  '_controller' => 'AppBundle:Status:api_delete_haha',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_video_delete_haha;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_video_delete_haha'));
                            }

                            return $ret;
                        }
                        not_api_video_delete_haha:

                        // api_video_delete_woow
                        if (0 === strpos($pathinfo, '/api/video/delete/woow') && preg_match('#^/api/video/delete/woow/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_video_delete_woow']), array (  '_controller' => 'AppBundle:Status:api_delete_woow',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_api_video_delete_woow;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_video_delete_woow'));
                            }

                            return $ret;
                        }
                        not_api_video_delete_woow:

                    }

                }

                // api_language_all
                if (0 === strpos($pathinfo, '/api/language/all') && preg_match('#^/api/language/all/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_language_all']), array (  '_controller' => 'AppBundle\\Controller\\LanguageController::api_allAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_api_language_all;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_language_all'));
                    }

                    return $ret;
                }
                not_api_language_all:

            }

            // app_home_app_refundpolicy
            if ('/app_refund_policy.html' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\HomeController::apprefundpolicyAction',  '_route' => 'app_home_app_refundpolicy',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/users')) {
                    // user_user_index
                    if ('/admin/users/index.html' === $pathinfo) {
                        return array (  '_controller' => 'UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user_user_index',);
                    }

                    // user_user_edit
                    if (0 === strpos($pathinfo, '/admin/users/edit') && preg_match('#^/admin/users/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_user_edit']), array (  '_controller' => 'UserBundle\\Controller\\UserController::editAction',));
                    }

                    // user_user_comments
                    if (0 === strpos($pathinfo, '/admin/users/comments') && preg_match('#^/admin/users/comments/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_user_comments']), array (  '_controller' => 'UserBundle\\Controller\\UserController::commentsAction',));
                    }

                    // user_admin_user_subscriptions
                    if (0 === strpos($pathinfo, '/admin/users/subscriptions') && preg_match('#^/admin/users/subscriptions/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_admin_user_subscriptions']), array (  '_controller' => 'UserBundle\\Controller\\UserController::admin_subscriptionsAction',));
                    }

                    // user_user_ratings
                    if (0 === strpos($pathinfo, '/admin/users/ratings') && preg_match('#^/admin/users/ratings/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_user_ratings']), array (  '_controller' => 'UserBundle\\Controller\\UserController::ratingsAction',));
                    }

                    // user_user_delete
                    if (0 === strpos($pathinfo, '/admin/users/delete') && preg_match('#^/admin/users/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_user_delete']), array (  '_controller' => 'UserBundle\\Controller\\UserController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/login')) {
                    // admin_login
                    if ('/admin/login' === $pathinfo) {
                        return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'admin_login',);
                    }

                    // admin_check
                    if ('/admin/login_check' === $pathinfo) {
                        return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'admin_check',);
                    }

                }

                // admin_logout
                if ('/admin/logout' === $pathinfo) {
                    return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'admin_logout',);
                }

                // admin_change_password
                if ('/admin/change-password' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::adminchangePasswordAction',  '_route' => 'admin_change_password',);
                }

                // app_home_index
                if ('/admin' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'app_home_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_app_home_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_home_index'));
                    }

                    return $ret;
                }
                not_app_home_index:

                // app_home_websettings
                if ('/admin/websettings.html' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\HomeController::websettingsAction',  '_route' => 'app_home_websettings',);
                }

                // app_home_webads
                if ('/admin/webads.html' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\HomeController::webadsAction',  '_route' => 'app_home_webads',);
                }

                if (0 === strpos($pathinfo, '/admin/s')) {
                    if (0 === strpos($pathinfo, '/admin/se')) {
                        // app_home_settings
                        if ('/admin/settings.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::settingsAction',  '_route' => 'app_home_settings',);
                        }

                        if (0 === strpos($pathinfo, '/admin/season')) {
                            // app_season_add
                            if (0 === strpos($pathinfo, '/admin/season/add') && preg_match('#^/admin/season/add/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_season_add']), array (  '_controller' => 'AppBundle\\Controller\\SeasonController::addAction',));
                            }

                            // app_season_edit
                            if (0 === strpos($pathinfo, '/admin/season/edit') && preg_match('#^/admin/season/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_season_edit']), array (  '_controller' => 'AppBundle\\Controller\\SeasonController::editAction',));
                            }

                            // app_season_delete
                            if (0 === strpos($pathinfo, '/admin/season/delete') && preg_match('#^/admin/season/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_season_delete']), array (  '_controller' => 'AppBundle\\Controller\\SeasonController::deleteAction',));
                            }

                            // app_season_down
                            if (0 === strpos($pathinfo, '/admin/season/down') && preg_match('#^/admin/season/down/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_season_down']), array (  '_controller' => 'AppBundle\\Controller\\SeasonController::downAction',));
                            }

                            // app_season_up
                            if (0 === strpos($pathinfo, '/admin/season/up') && preg_match('#^/admin/season/up/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_season_up']), array (  '_controller' => 'AppBundle\\Controller\\SeasonController::upAction',));
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/serie')) {
                            // app_serie_index
                            if ('/admin/serie/index.html' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\SerieController::indexAction',  '_route' => 'app_serie_index',);
                            }

                            if (0 === strpos($pathinfo, '/admin/serie/import')) {
                                // app_serie_import
                                if ('/admin/serie/import.html' === $pathinfo) {
                                    return array (  '_controller' => 'AppBundle\\Controller\\SerieController::importAction',  '_route' => 'app_serie_import',);
                                }

                                // app_serie_import_keywords
                                if (0 === strpos($pathinfo, '/admin/serie/import/keywords') && preg_match('#^/admin/serie/import/keywords/(?P<id>\\d+)/(?P<serie>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_serie_import_keywords']), array (  '_controller' => 'AppBundle\\Controller\\SerieController::import_keywordsAction',));
                                }

                                // app_serie_import_casts
                                if (0 === strpos($pathinfo, '/admin/serie/import/casts') && preg_match('#^/admin/serie/import/casts/(?P<id>\\d+)/(?P<serie>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_serie_import_casts']), array (  '_controller' => 'AppBundle\\Controller\\SerieController::import_castsAction',));
                                }

                                // app_serie_import_trailer
                                if (0 === strpos($pathinfo, '/admin/serie/import/trailer') && preg_match('#^/admin/serie/import/trailer/(?P<id>\\d+)/(?P<serie>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_serie_import_trailer']), array (  '_controller' => 'AppBundle\\Controller\\SerieController::import_trailerAction',));
                                }

                                if (0 === strpos($pathinfo, '/admin/serie/import/episodes')) {
                                    // app_serie_import_episodes
                                    if (preg_match('#^/admin/serie/import/episodes/(?P<id>\\d+)/(?P<serie>\\d+)/(?P<season>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_serie_import_episodes']), array (  '_controller' => 'AppBundle\\Controller\\SerieController::import_episodesAction',));
                                    }

                                    // app_serie_import_done
                                    if (preg_match('#^/admin/serie/import/episodes/(?P<id>\\d+)/(?P<serie>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_serie_import_done']), array (  '_controller' => 'AppBundle\\Controller\\SerieController::import_doneAction',));
                                    }

                                }

                            }

                            // app_serie_add
                            if ('/admin/serie/add.html' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\SerieController::addAction',  '_route' => 'app_serie_add',);
                            }

                            // app_serie_edit
                            if (0 === strpos($pathinfo, '/admin/serie/edit') && preg_match('#^/admin/serie/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_serie_edit']), array (  '_controller' => 'AppBundle\\Controller\\SerieController::editAction',));
                            }

                            // app_serie_delete
                            if (0 === strpos($pathinfo, '/admin/serie/delete') && preg_match('#^/admin/serie/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_serie_delete']), array (  '_controller' => 'AppBundle\\Controller\\SerieController::deleteAction',));
                            }

                            // app_serie_cast
                            if (0 === strpos($pathinfo, '/admin/serie/cast') && preg_match('#^/admin/serie/cast/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_serie_cast']), array (  '_controller' => 'AppBundle\\Controller\\SerieController::castAction',));
                            }

                            // app_serie_comments
                            if (0 === strpos($pathinfo, '/admin/serie/comments') && preg_match('#^/admin/serie/comments/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_serie_comments']), array (  '_controller' => 'AppBundle\\Controller\\SerieController::commentsAction',));
                            }

                            // app_serie_trailer
                            if (0 === strpos($pathinfo, '/admin/serie/trailer') && preg_match('#^/admin/serie/trailer/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_serie_trailer']), array (  '_controller' => 'AppBundle\\Controller\\SerieController::trailerAction',));
                            }

                            // app_serie_seasons
                            if (0 === strpos($pathinfo, '/admin/serie/seasons') && preg_match('#^/admin/serie/seasons/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_serie_seasons']), array (  '_controller' => 'AppBundle\\Controller\\SerieController::seasonsAction',));
                            }

                            // app_serie_ratings
                            if (0 === strpos($pathinfo, '/admin/serie/ratings') && preg_match('#^/admin/serie/ratings/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_serie_ratings']), array (  '_controller' => 'AppBundle\\Controller\\SerieController::ratingsAction',));
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/su')) {
                        // app_support_index
                        if ('/admin/support/index.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\SupportController::indexAction',  '_route' => 'app_support_index',);
                        }

                        // app_support_view
                        if (0 === strpos($pathinfo, '/admin/support/view') && preg_match('#^/admin/support/view/(?P<id>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_support_view']), array (  '_controller' => 'AppBundle\\Controller\\SupportController::viewAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/subscription')) {
                            // app_subscription_index
                            if ('/admin/subscription/index.html' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\SubscriptionController::indexAction',  '_route' => 'app_subscription_index',);
                            }

                            // app_subscription_add
                            if ('/admin/subscription/add.html' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\SubscriptionController::addAction',  '_route' => 'app_subscription_add',);
                            }

                            // app_subscription_edit
                            if (0 === strpos($pathinfo, '/admin/subscription/edit') && preg_match('#^/admin/subscription/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_subscription_edit']), array (  '_controller' => 'AppBundle\\Controller\\SubscriptionController::editAction',));
                            }

                            // app_subscription_delete
                            if (0 === strpos($pathinfo, '/admin/subscription/delete') && preg_match('#^/admin/subscription/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_subscription_delete']), array (  '_controller' => 'AppBundle\\Controller\\SubscriptionController::deleteAction',));
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/subtitle')) {
                            // app_subtitle_edit
                            if (0 === strpos($pathinfo, '/admin/subtitle/edit') && preg_match('#^/admin/subtitle/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_subtitle_edit']), array (  '_controller' => 'AppBundle\\Controller\\SubtitleController::editAction',));
                            }

                            if (0 === strpos($pathinfo, '/admin/subtitle/add')) {
                                // app_subtitle_add
                                if (preg_match('#^/admin/subtitle/add/(?P<poster>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_subtitle_add']), array (  '_controller' => 'AppBundle\\Controller\\SubtitleController::addAction',));
                                }

                                // app_subtitle_add_episode
                                if (0 === strpos($pathinfo, '/admin/subtitle/add/episode') && preg_match('#^/admin/subtitle/add/episode/(?P<episode>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_subtitle_add_episode']), array (  '_controller' => 'AppBundle\\Controller\\SubtitleController::add_episodeAction',));
                                }

                            }

                            // app_subtitle_delete
                            if (0 === strpos($pathinfo, '/admin/subtitle/delete') && preg_match('#^/admin/subtitle/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_subtitle_delete']), array (  '_controller' => 'AppBundle\\Controller\\SubtitleController::deleteAction',));
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/slide')) {
                        // app_slide_add
                        if ('/admin/slide/add.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\SlideController::addAction',  '_route' => 'app_slide_add',);
                        }

                        // app_slide_index
                        if ('/admin/slide/index.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\SlideController::indexAction',  '_route' => 'app_slide_index',);
                        }

                        // app_slide_edit
                        if (preg_match('#^/admin/slide/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_slide_edit']), array (  '_controller' => 'AppBundle\\Controller\\SlideController::editAction',));
                        }

                        // app_slide_delete
                        if (0 === strpos($pathinfo, '/admin/slide/delete') && preg_match('#^/admin/slide/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_slide_delete']), array (  '_controller' => 'AppBundle\\Controller\\SlideController::deleteAction',));
                        }

                        // app_slide_down
                        if (0 === strpos($pathinfo, '/admin/slide/down') && preg_match('#^/admin/slide/down/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_slide_down']), array (  '_controller' => 'AppBundle\\Controller\\SlideController::downAction',));
                        }

                        // app_slide_up
                        if (0 === strpos($pathinfo, '/admin/slide/up') && preg_match('#^/admin/slide/up/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_slide_up']), array (  '_controller' => 'AppBundle\\Controller\\SlideController::upAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/source')) {
                        // app_source_trailer
                        if (0 === strpos($pathinfo, '/admin/source/trailer') && preg_match('#^/admin/source/trailer/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_source_trailer']), array (  '_controller' => 'AppBundle\\Controller\\SourceController::trailerAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/source/edit')) {
                            // app_source_edit
                            if (preg_match('#^/admin/source/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_source_edit']), array (  '_controller' => 'AppBundle\\Controller\\SourceController::editAction',));
                            }

                            // app_source_edit_episode
                            if (0 === strpos($pathinfo, '/admin/source/edit/episode') && preg_match('#^/admin/source/edit/episode/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_source_edit_episode']), array (  '_controller' => 'AppBundle\\Controller\\SourceController::edit_episodeAction',));
                            }

                            // app_source_edit_channel
                            if (0 === strpos($pathinfo, '/admin/source/edit/channel') && preg_match('#^/admin/source/edit/channel/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_source_edit_channel']), array (  '_controller' => 'AppBundle\\Controller\\SourceController::edit_channelAction',));
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/source/add')) {
                            // app_source_add
                            if (preg_match('#^/admin/source/add/(?P<poster>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_source_add']), array (  '_controller' => 'AppBundle\\Controller\\SourceController::addAction',));
                            }

                            // app_source_add_episode
                            if (0 === strpos($pathinfo, '/admin/source/add/episode') && preg_match('#^/admin/source/add/episode/(?P<episode>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_source_add_episode']), array (  '_controller' => 'AppBundle\\Controller\\SourceController::add_episodeAction',));
                            }

                            // app_source_add_channel
                            if (0 === strpos($pathinfo, '/admin/source/add/channel') && preg_match('#^/admin/source/add/channel/(?P<channel>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_source_add_channel']), array (  '_controller' => 'AppBundle\\Controller\\SourceController::add_channelAction',));
                            }

                        }

                        // app_source_delete
                        if (0 === strpos($pathinfo, '/admin/source/delete') && preg_match('#^/admin/source/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_source_delete']), array (  '_controller' => 'AppBundle\\Controller\\SourceController::deleteAction',));
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/p')) {
                    // app_home_payment
                    if ('/admin/payment.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\HomeController::paymentAction',  '_route' => 'app_home_payment',);
                    }

                    if (0 === strpos($pathinfo, '/admin/pack')) {
                        // app_pack_index
                        if ('/admin/pack/index.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PackController::indexAction',  '_route' => 'app_pack_index',);
                        }

                        // app_pack_add
                        if ('/admin/pack/add.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PackController::addAction',  '_route' => 'app_pack_add',);
                        }

                        // app_pack_edit
                        if (0 === strpos($pathinfo, '/admin/pack/edit') && preg_match('#^/admin/pack/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_pack_edit']), array (  '_controller' => 'AppBundle\\Controller\\PackController::editAction',));
                        }

                        // app_pack_delete
                        if (0 === strpos($pathinfo, '/admin/pack/delete') && preg_match('#^/admin/pack/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_pack_delete']), array (  '_controller' => 'AppBundle\\Controller\\PackController::deleteAction',));
                        }

                    }

                    // app_home_edit_privacypolicy
                    if ('/admin/privacypolicy.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\HomeController::edit_privacypolicyAction',  '_route' => 'app_home_edit_privacypolicy',);
                    }

                }

                // app_home_faq
                if ('/admin/faq.html' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\HomeController::faqAction',  '_route' => 'app_home_faq',);
                }

                // app_home_refundpolicy
                if ('/admin/refundpolicy.html' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\HomeController::refundpolicyAction',  '_route' => 'app_home_refundpolicy',);
                }

                if (0 === strpos($pathinfo, '/admin/role')) {
                    // app_role_edit
                    if (0 === strpos($pathinfo, '/admin/role/edit') && preg_match('#^/admin/role/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_role_edit']), array (  '_controller' => 'AppBundle\\Controller\\RoleController::editAction',));
                    }

                    // app_role_up
                    if (0 === strpos($pathinfo, '/admin/role/up') && preg_match('#^/admin/role/up/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_role_up']), array (  '_controller' => 'AppBundle\\Controller\\RoleController::upAction',));
                    }

                    // app_role_down
                    if (0 === strpos($pathinfo, '/admin/role/down') && preg_match('#^/admin/role/down/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_role_down']), array (  '_controller' => 'AppBundle\\Controller\\RoleController::downAction',));
                    }

                    // app_role_delete
                    if (0 === strpos($pathinfo, '/admin/role/delete') && preg_match('#^/admin/role/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_role_delete']), array (  '_controller' => 'AppBundle\\Controller\\RoleController::deleteAction',));
                    }

                }

                // app_home_ads
                if ('/admin/ads.html' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\HomeController::adsAction',  '_route' => 'app_home_ads',);
                }

                if (0 === strpos($pathinfo, '/admin/actor')) {
                    // app_actor_index
                    if ('/admin/actor/index.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ActorController::indexAction',  '_route' => 'app_actor_index',);
                    }

                    // app_actor_add
                    if ('/admin/actor/add.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ActorController::addAction',  '_route' => 'app_actor_add',);
                    }

                    // app_actor_edit
                    if (0 === strpos($pathinfo, '/admin/actor/edit') && preg_match('#^/admin/actor/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_actor_edit']), array (  '_controller' => 'AppBundle\\Controller\\ActorController::editAction',));
                    }

                    // app_actor_delete
                    if (0 === strpos($pathinfo, '/admin/actor/delete') && preg_match('#^/admin/actor/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_actor_delete']), array (  '_controller' => 'AppBundle\\Controller\\ActorController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/notif')) {
                    // app_home_notif_poster
                    if ('/admin/notif/poster.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\HomeController::notifPosterAction',  '_route' => 'app_home_notif_poster',);
                    }

                    // app_home_notif_channel
                    if ('/admin/notif/channel.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\HomeController::notifChannelAction',  '_route' => 'app_home_notif_channel',);
                    }

                    // app_home_notif_category
                    if ('/admin/notif/category.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\HomeController::notifCategoryAction',  '_route' => 'app_home_notif_category',);
                    }

                    // app_home_notif_url
                    if ('/admin/notif/url.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\HomeController::notifUrlAction',  '_route' => 'app_home_notif_url',);
                    }

                    if (0 === strpos($pathinfo, '/admin/notif/user')) {
                        // app_home_notif_user_status
                        if ('/admin/notif/user_status.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::notifUserStatusAction',  '_route' => 'app_home_notif_user_status',);
                        }

                        // app_home_notif_user_payment
                        if ('/admin/notif/user_payment.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::notifUserPaymentAction',  '_route' => 'app_home_notif_user_payment',);
                        }

                        // app_home_notif_user
                        if ('/admin/notif/user.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::notifUserAction',  '_route' => 'app_home_notif_user',);
                        }

                    }

                    // app_home_notif_genre
                    if ('/admin/notif/genre.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\HomeController::notifGenreAction',  '_route' => 'app_home_notif_genre',);
                    }

                }

                // app_support_delete
                if (0 === strpos($pathinfo, '/admin//support/delete') && preg_match('#^/admin//support/delete/(?P<id>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_support_delete']), array (  '_controller' => 'AppBundle\\Controller\\SupportController::deleteAction',));
                }

                if (0 === strpos($pathinfo, '/admin/c')) {
                    if (0 === strpos($pathinfo, '/admin/category')) {
                        // app_category_index
                        if ('/admin/category/index.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::indexAction',  '_route' => 'app_category_index',);
                        }

                        // app_category_add
                        if ('/admin/category/add.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::addAction',  '_route' => 'app_category_add',);
                        }

                        // app_category_edit
                        if (0 === strpos($pathinfo, '/admin/category/edit') && preg_match('#^/admin/category/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_category_edit']), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::editAction',));
                        }

                        // app_category_delete
                        if (0 === strpos($pathinfo, '/admin/category/delete') && preg_match('#^/admin/category/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_category_delete']), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::deleteAction',));
                        }

                        // app_category_down
                        if (0 === strpos($pathinfo, '/admin/category/down') && preg_match('#^/admin/category/down/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_category_down']), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::downAction',));
                        }

                        // app_category_up
                        if (0 === strpos($pathinfo, '/admin/category/up') && preg_match('#^/admin/category/up/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_category_up']), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::upAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/country')) {
                        // app_country_index
                        if ('/admin/country/index.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CountryController::indexAction',  '_route' => 'app_country_index',);
                        }

                        // app_country_add
                        if ('/admin/country/add.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CountryController::addAction',  '_route' => 'app_country_add',);
                        }

                        // app_country_edit
                        if (0 === strpos($pathinfo, '/admin/country/edit') && preg_match('#^/admin/country/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_country_edit']), array (  '_controller' => 'AppBundle\\Controller\\CountryController::editAction',));
                        }

                        // app_country_delete
                        if (0 === strpos($pathinfo, '/admin/country/delete') && preg_match('#^/admin/country/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_country_delete']), array (  '_controller' => 'AppBundle\\Controller\\CountryController::deleteAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/comment')) {
                        // app_comment_delete
                        if (0 === strpos($pathinfo, '/admin/comment/delete') && preg_match('#^/admin/comment/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_comment_delete']), array (  '_controller' => 'AppBundle\\Controller\\CommentController::deleteAction',));
                        }

                        // app_comment_hide
                        if (0 === strpos($pathinfo, '/admin/comment/hide') && preg_match('#^/admin/comment/hide/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_comment_hide']), array (  '_controller' => 'AppBundle\\Controller\\CommentController::hideAction',));
                        }

                        // app_comment_index
                        if ('/admin/comment/index.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CommentController::indexAction',  '_route' => 'app_comment_index',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/channel')) {
                        // app_channel_index
                        if ('/admin/channel/index.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\ChannelController::indexAction',  '_route' => 'app_channel_index',);
                        }

                        // app_channel_add
                        if ('/admin/channel/add.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\ChannelController::addAction',  '_route' => 'app_channel_add',);
                        }

                        // app_channel_edit
                        if (0 === strpos($pathinfo, '/admin/channel/edit') && preg_match('#^/admin/channel/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_channel_edit']), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::editAction',));
                        }

                        // app_channel_sources
                        if (0 === strpos($pathinfo, '/admin/channel/sources') && preg_match('#^/admin/channel/sources/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_channel_sources']), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::sourcesAction',));
                        }

                        // app_channel_ratings
                        if (0 === strpos($pathinfo, '/admin/channel/ratings') && preg_match('#^/admin/channel/ratings/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_channel_ratings']), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::ratingsAction',));
                        }

                        // app_channel_comments
                        if (0 === strpos($pathinfo, '/admin/channel/comments') && preg_match('#^/admin/channel/comments/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_channel_comments']), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::commentsAction',));
                        }

                        // app_channel_delete
                        if (0 === strpos($pathinfo, '/admin/channel/delete') && preg_match('#^/admin/channel/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_channel_delete']), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::deleteAction',));
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/genre')) {
                    // app_genre_index
                    if ('/admin/genre/index.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\GenreController::indexAction',  '_route' => 'app_genre_index',);
                    }

                    // app_genre_add
                    if ('/admin/genre/add.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\GenreController::addAction',  '_route' => 'app_genre_add',);
                    }

                    // app_genre_edit
                    if (0 === strpos($pathinfo, '/admin/genre/edit') && preg_match('#^/admin/genre/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_genre_edit']), array (  '_controller' => 'AppBundle\\Controller\\GenreController::editAction',));
                    }

                    // app_genre_delete
                    if (0 === strpos($pathinfo, '/admin/genre/delete') && preg_match('#^/admin/genre/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_genre_delete']), array (  '_controller' => 'AppBundle\\Controller\\GenreController::deleteAction',));
                    }

                    // app_genre_down
                    if (0 === strpos($pathinfo, '/admin/genre/down') && preg_match('#^/admin/genre/down/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_genre_down']), array (  '_controller' => 'AppBundle\\Controller\\GenreController::downAction',));
                    }

                    // app_genre_up
                    if (0 === strpos($pathinfo, '/admin/genre/up') && preg_match('#^/admin/genre/up/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_genre_up']), array (  '_controller' => 'AppBundle\\Controller\\GenreController::upAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/episode')) {
                    // app_episode_add
                    if (0 === strpos($pathinfo, '/admin/episode/add') && preg_match('#^/admin/episode/add/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_episode_add']), array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::addAction',));
                    }

                    // app_episode_edit
                    if (0 === strpos($pathinfo, '/admin/episode/edit') && preg_match('#^/admin/episode/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_episode_edit']), array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::editAction',));
                    }

                    // app_episode_sources
                    if (0 === strpos($pathinfo, '/admin/episode/sources') && preg_match('#^/admin/episode/sources/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_episode_sources']), array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::sourcesAction',));
                    }

                    // app_episode_subtitles
                    if (0 === strpos($pathinfo, '/admin/episode/subtitles') && preg_match('#^/admin/episode/subtitles/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_episode_subtitles']), array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::subtitlesAction',));
                    }

                    // app_episode_delete
                    if (0 === strpos($pathinfo, '/admin/episode/delete') && preg_match('#^/admin/episode/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_episode_delete']), array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::deleteAction',));
                    }

                    // app_episode_down
                    if (0 === strpos($pathinfo, '/admin/episode/down') && preg_match('#^/admin/episode/down/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_episode_down']), array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::downAction',));
                    }

                    // app_episode_up
                    if (0 === strpos($pathinfo, '/admin/episode/up') && preg_match('#^/admin/episode/up/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_episode_up']), array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::upAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/movie')) {
                    // app_movie_index
                    if ('/admin/movie/index.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\MovieController::indexAction',  '_route' => 'app_movie_index',);
                    }

                    if (0 === strpos($pathinfo, '/admin/movie/import')) {
                        // app_movie_import
                        if ('/admin/movie/import.html' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\MovieController::importAction',  '_route' => 'app_movie_import',);
                        }

                        // app_movie_import_keywords
                        if (0 === strpos($pathinfo, '/admin/movie/import/keywords') && preg_match('#^/admin/movie/import/keywords/(?P<id>\\d+)/(?P<movie>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_movie_import_keywords']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::import_keywordsAction',));
                        }

                        // app_movie_import_casts
                        if (0 === strpos($pathinfo, '/admin/movie/import/casts') && preg_match('#^/admin/movie/import/casts/(?P<id>\\d+)/(?P<movie>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_movie_import_casts']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::import_castsAction',));
                        }

                        // app_movie_import_trailer
                        if (0 === strpos($pathinfo, '/admin/movie/import/trailer') && preg_match('#^/admin/movie/import/trailer/(?P<id>\\d+)/(?P<movie>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_movie_import_trailer']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::import_trailerAction',));
                        }

                    }

                    // app_movie_add
                    if ('/admin/movie/add.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\MovieController::addAction',  '_route' => 'app_movie_add',);
                    }

                    // app_movie_edit
                    if (0 === strpos($pathinfo, '/admin/movie/edit') && preg_match('#^/admin/movie/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_movie_edit']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::editAction',));
                    }

                    // app_movie_delete
                    if (0 === strpos($pathinfo, '/admin/movie/delete') && preg_match('#^/admin/movie/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_movie_delete']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::deleteAction',));
                    }

                    // app_movie_sources
                    if (0 === strpos($pathinfo, '/admin/movie/sources') && preg_match('#^/admin/movie/sources/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_movie_sources']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::sourcesAction',));
                    }

                    // app_movie_subtitles
                    if (0 === strpos($pathinfo, '/admin/movie/subtitles') && preg_match('#^/admin/movie/subtitles/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_movie_subtitles']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::subtitlesAction',));
                    }

                    // app_movie_cast
                    if (0 === strpos($pathinfo, '/admin/movie/cast') && preg_match('#^/admin/movie/cast/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_movie_cast']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::castAction',));
                    }

                    // app_movie_comments
                    if (0 === strpos($pathinfo, '/admin/movie/comments') && preg_match('#^/admin/movie/comments/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_movie_comments']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::commentsAction',));
                    }

                    // app_movie_trailer
                    if (0 === strpos($pathinfo, '/admin/movie/trailer') && preg_match('#^/admin/movie/trailer/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_movie_trailer']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::trailerAction',));
                    }

                    // app_movie_ratings
                    if (0 === strpos($pathinfo, '/admin/movie/ratings') && preg_match('#^/admin/movie/ratings/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_movie_ratings']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::ratingsAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/version')) {
                    // app_version_add
                    if ('/admin/version/add.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\VersionController::addAction',  '_route' => 'app_version_add',);
                    }

                    // app_version_index
                    if ('/admin/version/index.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\VersionController::indexAction',  '_route' => 'app_version_index',);
                    }

                    // app_version_edit
                    if (0 === strpos($pathinfo, '/admin/version/edit') && preg_match('#^/admin/version/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_version_edit']), array (  '_controller' => 'AppBundle\\Controller\\VersionController::editAction',));
                    }

                    // app_version_delete
                    if (0 === strpos($pathinfo, '/admin/version/delete') && preg_match('#^/admin/version/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_version_delete']), array (  '_controller' => 'AppBundle\\Controller\\VersionController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/language')) {
                    // app_language_add
                    if ('/admin/language/add.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\LanguageController::addAction',  '_route' => 'app_language_add',);
                    }

                    // app_language_index
                    if ('/admin/language/index.html' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\LanguageController::indexAction',  '_route' => 'app_language_index',);
                    }

                    // app_language_edit
                    if (0 === strpos($pathinfo, '/admin/language/edit') && preg_match('#^/admin/language/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_language_edit']), array (  '_controller' => 'AppBundle\\Controller\\LanguageController::editAction',));
                    }

                    // app_language_delete
                    if (0 === strpos($pathinfo, '/admin/language/delete') && preg_match('#^/admin/language/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_language_delete']), array (  '_controller' => 'AppBundle\\Controller\\LanguageController::deleteAction',));
                    }

                    // app_language_down
                    if (0 === strpos($pathinfo, '/admin/language/down') && preg_match('#^/admin/language/down/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_language_down']), array (  '_controller' => 'AppBundle\\Controller\\LanguageController::downAction',));
                    }

                    // app_language_up
                    if (0 === strpos($pathinfo, '/admin/language/up') && preg_match('#^/admin/language/up/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_language_up']), array (  '_controller' => 'AppBundle\\Controller\\LanguageController::upAction',));
                    }

                }

            }

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            // wep_home_search
            if ('/search' === $pathinfo) {
                return array (  '_controller' => 'WebBundle\\Controller\\HomeController::searchAction',  '_route' => 'wep_home_search',);
            }

            if (0 === strpos($pathinfo, '/serie')) {
                // wep_serie_index
                if (0 === strpos($pathinfo, '/series') && preg_match('#^/series/(?P<genre>[^/]++)/(?P<order>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_serie_index']), array (  '_controller' => 'WebBundle\\Controller\\SerieController::indexAction',));
                }

                // wep_serie_view
                if (preg_match('#^/serie/(?P<id>\\d+)/(?P<slug>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_serie_view']), array (  '_controller' => 'WebBundle\\Controller\\SerieController::viewAction',));
                }

                // wep_serie_episode
                if (preg_match('#^/serie/(?P<poster>[^/]++)/(?P<slug>[^/]++)/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_serie_episode']), array (  '_controller' => 'WebBundle\\Controller\\SerieController::episodeAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/subscription')) {
                // wep_subscription_card
                if (0 === strpos($pathinfo, '/subscription/card') && preg_match('#^/subscription/card/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_subscription_card']), array (  '_controller' => 'WebBundle\\Controller\\SubscriptionController::cardAction',));
                }

                // wep_subscription_cancel
                if (0 === strpos($pathinfo, '/subscription/cancel') && preg_match('#^/subscription/cancel/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_subscription_cancel']), array (  '_controller' => 'WebBundle\\Controller\\SubscriptionController::cancelAction',));
                }

                // wep_subscription_finish
                if (0 === strpos($pathinfo, '/subscription/finish') && preg_match('#^/subscription/finish/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_subscription_finish']), array (  '_controller' => 'WebBundle\\Controller\\SubscriptionController::finishAction',));
                }

                if (0 === strpos($pathinfo, '/subscription/paypal')) {
                    // wep_subscription_paypal_finish
                    if (0 === strpos($pathinfo, '/subscription/paypal/finish') && preg_match('#^/subscription/paypal/finish/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_subscription_paypal_finish']), array (  '_controller' => 'WebBundle\\Controller\\SubscriptionController::paypal_finishAction',));
                    }

                    // wep_subscription_paypal
                    if (preg_match('#^/subscription/paypal/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_subscription_paypal']), array (  '_controller' => 'WebBundle\\Controller\\SubscriptionController::paypalAction',));
                    }

                }

                // wep_subscription_notify
                if ('/subscription/notify.html' === $pathinfo) {
                    return array (  '_controller' => 'WebBundle\\Controller\\SubscriptionController::notifyAction',  '_route' => 'wep_subscription_notify',);
                }

                // wep_subscription_subscribe
                if ('/subscription/subscribe.html' === $pathinfo) {
                    return array (  '_controller' => 'WebBundle\\Controller\\SubscriptionController::subscribeAction',  '_route' => 'wep_subscription_subscribe',);
                }

                // wep_subscription_manual
                if (0 === strpos($pathinfo, '/subscription/manual') && preg_match('#^/subscription/manual/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_subscription_manual']), array (  '_controller' => 'WebBundle\\Controller\\SubscriptionController::manualAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/share')) {
                // wep_movie_share
                if (preg_match('#^/share/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'wep_movie_share']), array (  '_controller' => 'WebBundle\\Controller\\MovieController::shareAction',));
                }

                // app_movie_share
                if (preg_match('#^/share/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_movie_share']), array (  '_controller' => 'AppBundle\\Controller\\MovieController::shareAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // user_login
            if ('/login' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'user_login',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_user_login;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_login'));
                }

                return $ret;
            }
            not_user_login:

            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

            // hwi_oauth_connect
            if ('/login' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_hwi_oauth_connect;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'hwi_oauth_connect'));
                }

                return $ret;
            }
            not_hwi_oauth_connect:

            if (0 === strpos($pathinfo, '/login/check-')) {
                // facebook_login
                if ('/login/check-facebook' === $pathinfo) {
                    return ['_route' => 'facebook_login'];
                }

                // google_login
                if ('/login/check-google' === $pathinfo) {
                    return ['_route' => 'google_login'];
                }

                // github_login
                if ('/login/check-github' === $pathinfo) {
                    return ['_route' => 'github_login'];
                }

                // custom_login
                if ('/login/check-custom' === $pathinfo) {
                    return ['_route' => 'custom_login'];
                }

            }

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
