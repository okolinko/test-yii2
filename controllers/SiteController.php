<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
class SiteController extends Controller
{
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        return $this->goBack();
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        return $this->goBack();
    }
}