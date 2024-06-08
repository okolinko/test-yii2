<?php
/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
//$menuItems = [];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    $logoLabel = '<img height="50" width="120" class="logo" src="/image/logo.svg">';
    $menuItems = [
            ['label' => 'New Demo Customer', 'url' => ['/demo/customer-form'], 'options'=>['class'=>'list-group-item']],
            ['label' => 'Demo Customer Grid', 'url' => ['/demo/customer-grid'], 'options'=>['class'=>'list-group-item']],
    ];
    $menuItems[] = '<li>'
        . Html::submitButton('  |  ', ['class' => 'btn demo-item'])
        . Html::endForm()
        . '</li>';
        NavBar::begin([
            'brandLabel' => $logoLabel,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
        ]);
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Sign Up', 'url' => ['/base/signup']];
        $menuItems[] = ['label' => 'Sign In', 'url' => ['/base/login']];
    } else {
        $menuItems[] = ['label' => 'Customer Grid', 'url' => ['/grid/user-grid']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/base/logout'], 'post')
            . Html::submitButton(
                'Logout (<strong>' . Yii::$app->user->identity->first_name . ' ' .  Yii::$app->user->identity->last_name . '</strong>)',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);

    NavBar::end();
    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-dark nav-link">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; My Demo <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
