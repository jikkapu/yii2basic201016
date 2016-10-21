<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div>
              <img src="<?=  Yii::getAlias('@web')?>/img/header.png" class="img-responsive" alt="header" >
            </div>
    <?php
    NavBar::begin([
        'brandLabel' => '<span class="glyphicon glyphicon-fire"></span> Work2 - 19 Oct 2016',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',// navbar-fixed-top',
        ],
    ]);
    $setting =[
         ['label' => 'สถานะคอมพิวเตอร์', 'url' => ['/comstatus']],
         ['label' => 'รายงาน 2', 'url' => ['/site/report2']]
    ];
       $regist = [
                ['label' => 'ทะเบียนคอมพิวเตอร์', 'url' => ['/com']]
              
            ];
              $report = [
                ['label' => 'รายงานคอมพิวเตอร์', 'url' => ['/reportcomtype']],
                ['label' => 'รายงานปัญหาคอมพิวเตอร์', 'url' => ['/reportcomservice']],
                ['label' => 'กราฟสรุปจำนวนคอมพิวเตอร์', 'url' => ['/chartcom']],
                ['label' => 'รายงานคอมพิวเตอร์(pdf)', 'url' => ['/pdftest'],'linkOptions' => ['target' => '_blank']]
            ];
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels'=>false,
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-home"></span> หน้าแรก', 'url' => ['/site/index']],
            ['label' => 'ลงทะเบียน', 'items' => $regist,'visible'=>Yii::$app->session->has('username')],
           // ['label' => 'ลงทะเบียน', 'items' => $regist],
            ['label' => 'ระบบรายงาน', 'items' => $report],
            ['label' => '<span class="glyphicon glyphicon-book"></span> ทดสอบ', 'url' => ['/first1/index']],
            ['label' => '<span class="glyphicon glyphicon-book"></span> ตรวจสอบ', 'items' => $setting],
            
            !Yii::$app->session->get('username') ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->session->get('username') . ')',
                        
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
