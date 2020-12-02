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

        // app_home_page
        if (preg_match('#^/(?P<_locale>en|fr)/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'app_home_page']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_app_home_page;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_home_page'));
            }

            return $ret;
        }
        not_app_home_page:

        // app_about_page
        if (preg_match('#^/(?P<_locale>en|fr)/about$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_about_page']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::aboutAction',));
        }

        // app_faq_page
        if (preg_match('#^/(?P<_locale>en|fr)/faq$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_faq_page']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::faqAction',));
        }

        // app_legal_mention_page
        if (preg_match('#^/(?P<_locale>en|fr)/legal\\-mentions$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_legal_mention_page']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::legalMentionsAction',));
        }

        // app_cgu_page
        if (preg_match('#^/(?P<_locale>en|fr)/cgu$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_cgu_page']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::cguAction',));
        }

        // app_volonteer_page
        if (preg_match('#^/(?P<_locale>en|fr)/volonteer/new$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_volonteer_page']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::volonteerAction',));
        }

        // app_thankyou_page
        if (preg_match('#^/(?P<_locale>en|fr)/thankyou$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_thankyou_page']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::thankyouAction',));
        }

        // app_article_index
        if (preg_match('#^/(?P<_locale>en|fr)/blog/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'app_article_index']), array (  '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_app_article_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_article_index'));
            }

            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_app_article_index;
            }

            return $ret;
        }
        not_app_article_index:

        // app_article_show
        if (preg_match('#^/(?P<_locale>en|fr)/blog/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_article_show']), array (  '_controller' => 'AppBundle\\Controller\\BlogController::showAction',));
        }

        // app_catalogue_index
        if (preg_match('#^/(?P<_locale>en|fr)/blog/category/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_catalogue_index']), array (  '_controller' => 'AppBundle\\Controller\\BlogController::catalogueAction',));
        }

        // app_volonteer_new_entity
        if (preg_match('#^/(?P<_locale>en|fr)/form/volonteeer/new$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_volonteer_new_entity']), array (  '_controller' => 'AppBundle\\Controller\\FormController::volonteerSubmitFormAction',));
        }

        // app_review_new
        if (preg_match('#^/(?P<_locale>en|fr)/form/review/new$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_review_new']), array (  '_controller' => 'AppBundle\\Controller\\FormController::reviewNewAction',));
        }

        // app_email_new
        if (preg_match('#^/(?P<_locale>en|fr)/form/email/new$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_email_new']), array (  '_controller' => 'AppBundle\\Controller\\FormController::emailCatchAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_homepage
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DashboardController::indexAction',  '_route' => 'admin_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_homepage'));
                }

                return $ret;
            }
            not_admin_homepage:

            // admin_emailpage
            if ('/admin/email' === $pathinfo) {
                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DashboardController::emailAction',  '_route' => 'admin_emailpage',);
            }

            if (0 === strpos($pathinfo, '/admin/me')) {
                if (0 === strpos($pathinfo, '/admin/member/volonteer')) {
                    // admin_member_volonteer
                    if ('/admin/member/volonteer' === $pathinfo) {
                        $ret = array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MemberController::volonteerAction',  '_route' => 'admin_member_volonteer',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_member_volonteer;
                        }

                        return $ret;
                    }
                    not_admin_member_volonteer:

                    // admin_volonteer_item_data
                    if (0 === strpos($pathinfo, '/admin/member/volonteer/item') && preg_match('#^/admin/member/volonteer/item/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_volonteer_item_data']), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MemberController::getVolonteerItemDataAction',));
                    }

                    // admin_member_volonteer_edit
                    if (0 === strpos($pathinfo, '/admin/member/volonteer/edit') && preg_match('#^/admin/member/volonteer/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_member_volonteer_edit']), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MemberController::volonteerEditAction',));
                    }

                    // admin_member_volonteer_delete
                    if ('/admin/member/volonteer/delete' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MemberController::deleteVolonteerAction',  '_route' => 'admin_member_volonteer_delete',);
                    }

                    // admin_volonteer_make_pdf
                    if ('/admin/member/volonteer/pdf' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MemberController::volonteerMakePdfAction',  '_route' => 'admin_volonteer_make_pdf',);
                    }

                }

                // admin_volonteer_dataTable_data
                if ('/admin/member/entity-data' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MemberController::volonteerDataTableDataAction',  '_route' => 'admin_volonteer_dataTable_data',);
                }

                if (0 === strpos($pathinfo, '/admin/media')) {
                    // admin_media_index
                    if ('/admin/media' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MediaController::indexAction',  '_route' => 'admin_media_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_media_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_media_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_media_index;
                        }

                        return $ret;
                    }
                    not_admin_media_index:

                    // admin_media_new
                    if ('/admin/media/new' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MediaController::newAction',  '_route' => 'admin_media_new',);
                    }

                    // admin_media_delete
                    if ('/admin/media/delete' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MediaController::deleteAction',  '_route' => 'admin_media_delete',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/contribution')) {
                // admin_contribution_index
                if ('/admin/contribution' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ContributionController::indexAction',  '_route' => 'admin_contribution_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_contribution_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_contribution_index'));
                    }

                    return $ret;
                }
                not_admin_contribution_index:

                // admin_contribution_make_pdf
                if ('/admin/contribution/pdf' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ContributionController::makePdfAction',  '_route' => 'admin_contribution_make_pdf',);
                }

                // admin_contribution_new
                if ('/admin/contribution/new' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ContributionController::newAction',  '_route' => 'admin_contribution_new',);
                }

                // admin_contribution_delete
                if ('/admin/contribution/delete' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ContributionController::deleteAction',  '_route' => 'admin_contribution_delete',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/catalogue')) {
                // admin_catalogue_index
                if ('/admin/catalogue' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Admin\\AdminBundle\\Controller\\CatalogueController::indexAction',  '_route' => 'admin_catalogue_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_catalogue_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_catalogue_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_catalogue_index;
                    }

                    return $ret;
                }
                not_admin_catalogue_index:

                // admin_catalogue_dataTable_data
                if ('/admin/catalogue/entity-data' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\CatalogueController::dataTableDataAction',  '_route' => 'admin_catalogue_dataTable_data',);
                }

                // admin_catalogue_edit
                if (0 === strpos($pathinfo, '/admin/catalogue/edit') && preg_match('#^/admin/catalogue/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_catalogue_edit']), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\CatalogueController::editAction',));
                }

                // admin_catalogue_item_data
                if (0 === strpos($pathinfo, '/admin/catalogue/item') && preg_match('#^/admin/catalogue/item/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_catalogue_item_data']), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\CatalogueController::getItemDataAction',));
                }

                // admin_catalogue_new
                if ('/admin/catalogue/new' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\CatalogueController::newAction',  '_route' => 'admin_catalogue_new',);
                }

                // admin_catalogue_delete
                if ('/admin/catalogue/delete' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\CatalogueController::deleteAction',  '_route' => 'admin_catalogue_delete',);
                }

                if (0 === strpos($pathinfo, '/admin/catalogue-projet')) {
                    // admin_projectCategory_index
                    if ('/admin/catalogue-projet' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ProjectCategoryController::indexAction',  '_route' => 'admin_projectCategory_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_projectCategory_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_projectCategory_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_projectCategory_index;
                        }

                        return $ret;
                    }
                    not_admin_projectCategory_index:

                    // admin_projectCategory_dataTable_data
                    if ('/admin/catalogue-projet/entity-data' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ProjectCategoryController::dataTableDataAction',  '_route' => 'admin_projectCategory_dataTable_data',);
                    }

                    // admin_projectCategory_edit
                    if (0 === strpos($pathinfo, '/admin/catalogue-projet/edit') && preg_match('#^/admin/catalogue\\-projet/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_projectCategory_edit']), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ProjectCategoryController::editAction',));
                    }

                    // admin_projectCategory_item_data
                    if (0 === strpos($pathinfo, '/admin/catalogue-projet/item') && preg_match('#^/admin/catalogue\\-projet/item/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_projectCategory_item_data']), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ProjectCategoryController::getItemDataAction',));
                    }

                    // admin_projectCategory_new
                    if ('/admin/catalogue-projet/new' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ProjectCategoryController::newAction',  '_route' => 'admin_projectCategory_new',);
                    }

                    // admin_projectCategory_delete
                    if ('/admin/catalogue-projet/delete' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ProjectCategoryController::deleteAction',  '_route' => 'admin_projectCategory_delete',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/article')) {
                // admin_article_index
                if ('/admin/article' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ArticleController::indexAction',  '_route' => 'admin_article_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_article_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_article_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_article_index;
                    }

                    return $ret;
                }
                not_admin_article_index:

                // admin_article_draft
                if ('/admin/article/brouillon' === $pathinfo) {
                    $ret = array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ArticleController::indexDraftAction',  '_route' => 'admin_article_draft',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_article_draft;
                    }

                    return $ret;
                }
                not_admin_article_draft:

                // admin_article_deleted
                if ('/admin/article/corbeille' === $pathinfo) {
                    $ret = array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ArticleController::indexDeletedAction',  '_route' => 'admin_article_deleted',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_article_deleted;
                    }

                    return $ret;
                }
                not_admin_article_deleted:

                if (0 === strpos($pathinfo, '/admin/article/new')) {
                    // admin_article_new
                    if ('/admin/article/new' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ArticleController::newPublishAction',  '_route' => 'admin_article_new',);
                    }

                    // admin_article_draft_new
                    if ('/admin/article/new/draft' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ArticleController::newDraftAction',  '_route' => 'admin_article_draft_new',);
                    }

                }

                // admin_article_edit
                if (0 === strpos($pathinfo, '/admin/article/edit') && preg_match('#^/admin/article/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_article_edit']), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ArticleController::editAction',));
                }

                if (0 === strpos($pathinfo, '/admin/article/entity-data')) {
                    // admin_index_article_dataTable_data
                    if ('/admin/article/entity-data' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ArticleController::indexDataTableDataAction',  '_route' => 'admin_index_article_dataTable_data',);
                    }

                    // admin_draft_article_dataTable_data
                    if ('/admin/article/entity-data/draft' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ArticleController::draftDataTableDataAction',  '_route' => 'admin_draft_article_dataTable_data',);
                    }

                    // admin_soft_delete_article_dataTable_data
                    if ('/admin/article/entity-data/soft-delete' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ArticleController::softDeleteDataTableDataAction',  '_route' => 'admin_soft_delete_article_dataTable_data',);
                    }

                }

                // admin_article_moveToTrash
                if ('/admin/article/softdelete' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ArticleController::moveToTrashAction',  '_route' => 'admin_article_moveToTrash',);
                }

                // admin_article_delete
                if ('/admin/article/delete' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ArticleController::deleteAction',  '_route' => 'admin_article_delete',);
                }

                // admin_article_make_visible
                if ('/admin/article/make-visible' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ArticleController::makeVisibleAction',  '_route' => 'admin_article_make_visible',);
                }

                // admin_article_item_data
                if (0 === strpos($pathinfo, '/admin/article/item') && preg_match('#^/admin/article/item/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_article_item_data']), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ArticleController::getItemDataAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/projet')) {
                // admin_cause_index
                if ('/admin/projet' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Admin\\AdminBundle\\Controller\\CauseController::indexAction',  '_route' => 'admin_cause_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_cause_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_cause_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_cause_index;
                    }

                    return $ret;
                }
                not_admin_cause_index:

                // admin_cause_dataTable_data
                if ('/admin/projet/entity-data' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\CauseController::dataTableDataAction',  '_route' => 'admin_cause_dataTable_data',);
                }

                // admin_cause_edit
                if (0 === strpos($pathinfo, '/admin/projet/edit') && preg_match('#^/admin/projet/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_cause_edit']), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\CauseController::editAction',));
                }

                // admin_cause_item_data
                if (0 === strpos($pathinfo, '/admin/projet/item') && preg_match('#^/admin/projet/item/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_cause_item_data']), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\CauseController::getItemDataAction',));
                }

                // admin_cause_new
                if ('/admin/projet/new' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\CauseController::newAction',  '_route' => 'admin_cause_new',);
                }

                // admin_cause_show
                if (0 === strpos($pathinfo, '/admin/projet/show') && preg_match('#^/admin/projet/show/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_cause_show']), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\CauseController::showAction',));
                }

                // admin_cause_delete
                if ('/admin/projet/delete' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\CauseController::deleteAction',  '_route' => 'admin_cause_delete',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/review')) {
                // admin_review_index
                if ('/admin/review' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReviewController::indexAction',  '_route' => 'admin_review_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_review_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_review_index'));
                    }

                    return $ret;
                }
                not_admin_review_index:

                // admin_review_waited_index
                if ('/admin/review/waited' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReviewController::indexWaitedAction',  '_route' => 'admin_review_waited_index',);
                }

                if (0 === strpos($pathinfo, '/admin/review/entity-data')) {
                    // admin_review_dataTable_data
                    if ('/admin/review/entity-data' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReviewController::dataTableDataAction',  '_route' => 'admin_review_dataTable_data',);
                    }

                    // admin_review_waited_dataTable_data
                    if ('/admin/review/entity-data/waited' === $pathinfo) {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReviewController::waitedDataTableDataAction',  '_route' => 'admin_review_waited_dataTable_data',);
                    }

                }

                // admin_review_edit
                if ('/admin/review/edit' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReviewController::editAction',  '_route' => 'admin_review_edit',);
                }

                // admin_review_item_data
                if (0 === strpos($pathinfo, '/admin/review/item') && preg_match('#^/admin/review/item/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_review_item_data']), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReviewController::getItemDataAction',));
                }

                // admin_review_delete
                if ('/admin/review/delete' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReviewController::deleteAction',  '_route' => 'admin_review_delete',);
                }

            }

        }

        // app_fund_checkout_page
        if (preg_match('#^/(?P<_locale>en|fr)/checkout/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'app_fund_checkout_page']), array (  '_controller' => 'Pay\\PayBundle\\Controller\\PayController::checkoutAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_app_fund_checkout_page;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_fund_checkout_page'));
            }

            return $ret;
        }
        not_app_fund_checkout_page:

        // app_stripe_pay
        if (preg_match('#^/(?P<_locale>en|fr)/checkout/stripe/api/pay$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_stripe_pay']), array (  '_controller' => 'Pay\\PayBundle\\Controller\\PayController::stripePayAction',));
        }

        // app_paypal_pay
        if (preg_match('#^/(?P<_locale>en|fr)/checkout/paypal/api/pay$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_paypal_pay']), array (  '_controller' => 'Pay\\PayBundle\\Controller\\PayController::paypalPayAction',));
        }

        // fos_user_security_login
        if (preg_match('#^/(?P<_locale>en|fr)/login$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_security_login']), array (  '_controller' => 'fos_user.security.controller:loginAction',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_login;
            }

            return $ret;
        }
        not_fos_user_security_login:

        // fos_user_security_check
        if (preg_match('#^/(?P<_locale>en|fr)/login_check$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_security_check']), array (  '_controller' => 'fos_user.security.controller:checkAction',));
            if (!in_array($requestMethod, ['POST'])) {
                $allow = array_merge($allow, ['POST']);
                goto not_fos_user_security_check;
            }

            return $ret;
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if (preg_match('#^/(?P<_locale>en|fr)/logout$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_security_logout']), array (  '_controller' => 'fos_user.security.controller:logoutAction',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        // fos_user_profile_show
        if (preg_match('#^/(?P<_locale>en|fr)/profile/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_profile_show']), array (  '_controller' => 'fos_user.profile.controller:showAction',));
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
        if (preg_match('#^/(?P<_locale>en|fr)/profile/edit$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_profile_edit']), array (  '_controller' => 'fos_user.profile.controller:editAction',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_profile_edit;
            }

            return $ret;
        }
        not_fos_user_profile_edit:

        // fos_user_registration_register
        if (preg_match('#^/(?P<_locale>en|fr)/register/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_register']), array (  '_controller' => 'fos_user.registration.controller:registerAction',));
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
        if (preg_match('#^/(?P<_locale>en|fr)/register/check\\-email$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_check_email']), array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_user_registration_check_email;
            }

            return $ret;
        }
        not_fos_user_registration_check_email:

        // fos_user_registration_confirm
        if (preg_match('#^/(?P<_locale>en|fr)/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_user_registration_confirm;
            }

            return $ret;
        }
        not_fos_user_registration_confirm:

        // fos_user_registration_confirmed
        if (preg_match('#^/(?P<_locale>en|fr)/register/confirmed$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirmed']), array (  '_controller' => 'fos_user.registration.controller:confirmedAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_user_registration_confirmed;
            }

            return $ret;
        }
        not_fos_user_registration_confirmed:

        // fos_user_resetting_request
        if (preg_match('#^/(?P<_locale>en|fr)/resetting/request$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_request']), array (  '_controller' => 'fos_user.resetting.controller:requestAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_user_resetting_request;
            }

            return $ret;
        }
        not_fos_user_resetting_request:

        // fos_user_resetting_send_email
        if (preg_match('#^/(?P<_locale>en|fr)/resetting/send\\-email$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_send_email']), array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',));
            if (!in_array($requestMethod, ['POST'])) {
                $allow = array_merge($allow, ['POST']);
                goto not_fos_user_resetting_send_email;
            }

            return $ret;
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if (preg_match('#^/(?P<_locale>en|fr)/resetting/check\\-email$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_check_email']), array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_user_resetting_check_email;
            }

            return $ret;
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (preg_match('#^/(?P<_locale>en|fr)/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_resetting_reset;
            }

            return $ret;
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if (preg_match('#^/(?P<_locale>en|fr)/change_password/change\\-password$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_change_password']), array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_change_password;
            }

            return $ret;
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_js_routing_js']), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_js_routing_js;
            }

            return $ret;
        }
        not_fos_js_routing_js:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
