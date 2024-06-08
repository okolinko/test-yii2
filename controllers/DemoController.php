<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\DemoCustomer;
use app\models\DemoCustomerForm;
use app\models\DemoCustomerGrid;

class DemoController extends Controller
{
    /**
     * New Demo Customer Form action.
     *
     * @return string
     */
    public function actionCustomerForm()
    {
        $model = new DemoCustomerForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->addDemoCustomer()) {
                Yii::$app->session->setFlash ('success', "Success added <strong>{$user->first_name} {$user->last_name}</strong> to the demo customer table.", true);
            } else {
                Yii::$app->session->setFlash('error', ' Failed to add customer.');
            }
        }

        return $this->render('customerform', [
            'model' => $model,
        ]);
    }

    /**
     * Demo Customer grid action.
     *
     * @return string
     */
    public function actionCustomerGrid() : string
    {
        $searchModel = new DemoCustomerGrid();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('customergrid', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }
}
