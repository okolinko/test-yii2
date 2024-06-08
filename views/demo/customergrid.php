<?php
use yii\bootstrap5\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var app\models\UserGridSearch $model
 * @var app\models\UserGridSearch $searchModel
 * @var app\models\UserGridSearch $dataProvider
 */

$this->title = 'Demo Customers Grid';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-grid">
    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <div class="row">
        <?php
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => ''],
            'columns' => [
                'id',
                'first_name',
                'last_name',
                'middle_name',
                'email',
                'phone',
                'document',
                [
                    'class' => 'yii\grid\SerialColumn'
                ],
            ],
            'tableOptions' => [
                'class' => 'table table-striped table-bordered'
            ],
        ]);
         ?>
    </div>
</div>
