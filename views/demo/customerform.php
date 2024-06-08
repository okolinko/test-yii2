<?php
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\widgets\MaskedInput;

/** @var yii\web\View $this
 *  @var yii\bootstrap5\ActiveForm $form
 *  @var app\models\DemoCustomerForm $model
 */

$this->title = 'New Customer Form';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo-added">
    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <p>Adds a new entry to the demo customer grid</p>

    <div class="row">
        <div class="col-lg-5 ">
            <?php
                $form = ActiveForm::begin([
                    'id' => 'demo-customer-form',
                    'options' => ['class' => 'form-horizontal'],
                ]);
            ?>
            <?= $form->field($model, 'firstname')->textInput(['autofocus' => true, 'placeholder'=>'Please enter first name'])->label('First Name') ?>
            <?= $form->field($model, 'lastname')->textInput(['placeholder'=>'Please enter last name'])->label('Last Name') ?>
            <?= $form->field($model, 'middlename')->textInput(['placeholder'=>'Please enter middle name'])->label('Middle Name') ?>
            <?= $form->field($model, 'document')->textInput(['placeholder'=>'Please enter document']) ?>
            <?= $form->field($model, 'email')->textInput(['placeholder'=>'Please enter email']) ?>
            <?=$form->field($model,'phone')->widget(MaskedInput::className(),['mask'=>'+* (***) 999-99-99'])->textInput(['placeholder'=>'+3 (999) 999-99-99','class'=>'form-control is-valid'])->label('Phone') ?>
            <div class="form-group">
                <?= Html::submitButton('Added', ['class' => 'btn btn-primary', 'name' => 'demo-customer-button']) ?>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>
