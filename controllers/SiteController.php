<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionIndex2()
    {
        return $this->render('index2');
    }
    public function actionIndex3()
    {
        return $this->render('index3');
    }
    public function actionIframeDark()
    {
        return $this->render('iframe-dark');
    }    
    public function actionIframe()
    {
        return $this->render('iframe');
    }
    public function actionStarter()
    {
        return $this->render('starter');
    }
    public function actionChart()
    {
        return $this->render('pages/charts/chartjs');
    }
    public function actionFlot()
    {
        return $this->render('pages/charts/flot');
    }
    public function actionInline()
    {
        return $this->render('pages/charts/inline');
    }
    public function actionUplot()
    {
        return $this->render('pages/charts/uplot');
    }
    public function action404()
    {
        return $this->render('pages/examples/404');
    }
    public function action500()
    {
        return $this->render('pages/examples/500');
    }
    public function actionBlank()
    {
        return $this->render('pages/examples/blank');
    }
    public function actionContactUs()
    {
        return $this->render('pages/examples/contact-us');
    }
    public function actionContacts()
    {
        return $this->render('pages/examples/contacts');
    }
    public function actionECommerce()
    {
        return $this->render('pages/examples/e-commerce');
    }
    public function actionFaq()
    {
        return $this->render('pages/examples/faq');
    }
    public function actionForgotPasswordV2()
    {
        $this->layout='main_nav';
        return $this->render('pages/examples/forgot-password-v2');
    }
    public function actionForgotPassword()
    {
        $this->layout='main_nav';
        return $this->render('pages/examples/forgot-password');
    }
    public function actionInvoicePrint()
    {
        return $this->render('pages/examples/invoice-print');
    }
    public function actionInvoice()
    {
        return $this->render('pages/examples/invoice');
    }
    public function actionLanguageMenu()
    {
        return $this->render('pages/examples/language-menu');
    }
    public function actionLegacyUserMenu()
    {
        return $this->render('pages/examples/legacy-user-menu');
    }
    public function actionLockscreen()
    {
        $this->layout='main_nav';
        return $this->render('pages/examples/lockscreen');
    }
    public function actionLoginV2()
    {
        $this->layout='main_nav';
        return $this->render('pages/examples/login-v2');
    }
    public function actionLogin()
    {
        $this->layout='main_nav';
        return $this->render('pages/examples/login');
    }
    public function actionPace()
    {
        return $this->render('pages/examples/pace');
    }
    public function actionProfile()
    {
        return $this->render('pages/examples/profile');
    }
    public function actionProjectAdd()
    {
        return $this->render('pages/examples/project-add');
    }
    public function actionProjectDetail()
    {
        return $this->render('pages/examples/project-detail');
    }

    public function actionProjectEdit()
    {
        return $this->render('pages/examples/project-edit');
    }

    public function actionProject()
    {
        return $this->render('pages/examples/projects');
    }

    public function actionRecoverPasswordV2()
    {
        return $this->render('pages/examples/recover-password-v2');
    }

    public function actionRecoverPassword()
    {
        return $this->render('pages/examples/recover-password');
    }

    public function actionRegisterV2()
    {
        $this->layout='main_nav';
        return $this->render('pages/examples/register-v2');
    }

    public function actionRegister()
    {
        $this->layout='main_nav';
        return $this->render('pages/examples/register');
    }

    public function actionAdvanced()
    {
        return $this->render('pages/forms/advanced');
    }

    public function actionEditors()
    {
        return $this->render('pages/forms/editors');
    }
    public function actionGeneral()
    {
        return $this->render('pages/forms/general');
    }

    public function actionValidation()
    {
        return $this->render('pages/forms/validation');
    }

    public function actionBoxed()
    {
        return $this->render('pages/layout/boxed');
    }

    public function actionCollapsedSidebar()
    {
        return $this->render('pages/layout/collapsed-sidebar');
    }

    public function actionFixedFooter()
    {
        return $this->render('pages/layout/fixed-footer');
    }

    public function actionFixedSidebarCustom()
    {
        return $this->render('pages/layout/fixed-sidebar-custom');
    }

    public function actionFixedSidebar()
    {
        return $this->render('pages/layout/fixed-sidebar');
    }

    public function actionFixedTopnav()
    {
        return $this->render('pages/layout/fixed-topnav');
    }

    public function actionTopNavSidebar()
    {
        return $this->render('pages/layout/top-nav-sidebar');
    }

    public function actionTopNav()
    {
        return $this->render('pages/layout/top-nav');
    }

    public function actionMailbox()
    {
        return $this->render('pages/mailbox/mailbox');
    }

    public function actionReadMail()
    {
        return $this->render('pages/mailbox/read-mail');
    }

    public function actionCompose()
    {
        return $this->render('pages/mailbox/compose');
    }

    public function actionEnhancedResults()
    {
        return $this->render('pages/search/enhanced-results');
    }

    public function actionEnhanced()
    {
        return $this->render('pages/search/enhanced');
    }

    public function actionSimpleResults()
    {
        return $this->render('pages/search/simple-results');
    }

    public function actionSimple()
    {
        return $this->render('pages/search/simple');
    }

    public function actionData()
    {
        return $this->render('pages/tables/data');
    }

    public function actionJsgrid()
    {
        return $this->render('pages/tables/jsgrid');
    }

    public function actionSimples()
    {
        return $this->render('pages/tables/simple');
    }

    public function actionButtons()
    {
        return $this->render('pages/UI/buttons');
    }

    public function actionGenerals()
    {
        return $this->render('pages/UI/general');
    }

    public function actionIcons()
    {
        return $this->render('pages/UI/icons');
    }

    public function actionModals()
    {
        return $this->render('pages/UI/modals');
    }

    public function actionNavbar()
    {
        return $this->render('pages/UI/navbar');
    }

    public function actionRibbons()
    {
        return $this->render('pages/UI/ribbons');
    }

    public function actionSliders()
    {
        return $this->render('pages/UI/sliders');
    }

    public function actionTimeline()
    {
        return $this->render('pages/UI/timeline');
    }

    public function actionCalendar()
    {
        return $this->render('pages/calendar');
    }

    public function actionGallery()
    {
        return $this->render('pages/gallery');
    }

    public function actionKanban()
    {
        return $this->render('pages/kanban');
    }

    public function actionWidgets()
    {
        return $this->render('pages/widgets');
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
