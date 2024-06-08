<?php
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\widgets\MaskedInput;

/** @var yii\web\View $this
 *  @var yii\bootstrap5\ActiveForm $form
 *  @var app\models\SignupForm $model
 */

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <div class="row">
        <div class="col-lg-5 ">
            <?php
                $form = ActiveForm::begin([
                    'id' => 'signup-form',
                    'options' => ['class' => 'form-horizontal'],
                ]);
            ?>

            <?= $form->field($model, 'firstname')->textInput(['autofocus' => true, 'placeholder'=>'Please enter you first name'])->label('First Name') ?>
            <?= $form->field($model, 'lastname')->textInput(['placeholder'=>'Please enter you last name'])->label('Last Name') ?>
            <?= $form->field($model, 'email')->textInput(['placeholder'=>'Please enter you email']) ?>
            <?= $form->field($model,'phone')->widget(MaskedInput::className(),['mask'=>'+* (***) 999-99-99'])->textInput(['placeholder'=>'+3 (999) 999-99-99','class'=>'form-control is-valid'])->label('Phone') ?>
            <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Please enter you password']) ?>
            <?= $form->field($model, 'password_confirmation')->passwordInput(['placeholder'=>'Please enter you password again'])->label('Password Confirmation') ?>

            <div class="form-group">
                <?= Html::submitButton('Sign Up', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>
