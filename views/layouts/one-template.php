<?php

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\helpers\Url;
use app\components\FooterWidget;

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
<body id="page1">
<?php $this->beginBody() ?>

<div class="extra">
    <!--==============================header=================================-->
    <header>
        <div class="main">
            <div class="bg-1">
                <h1><a href="<?=Url::home()?>">Rock Band</a></h1>
            </div>
            <nav>
                <div class="menu-bg-tail">
                    <div class="menu-bg">
                        <div class="container_12">
                            <div class="grid_12">
                                <?php
                                echo Nav::widget([
                                    'options' => ['class' => 'menu'],
                                    'items' => [
                                        ['label' => 'About', 'url' => ['/my/about'], 'options' => ['class' => 'item']],
                                        ['label' => 'Audio', 'url' => ['/my/audio']],
                                        ['label' => 'Video', 'url' => ['/my/video']],
                                        ['label' => 'Gallery', 'url' => ['/my/gallery']],
                                        ['label' => 'Tour Dates', 'url' => ['/my/tour-dates'], 'options' => ['class' => 'item-1']],
                                        ['label' => 'Contacts', 'url' => ['/my/contacts'], 'options' => ['class' => 'last']],
                                    ],
                                ]);
                                ?>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </nav>
            <?if(isset($this->blocks['indexSlider'])):?>
                <?echo $this->blocks['indexSlider'];?>
            <?endif;?>
        </div>
    </header>
    <!--==============================content================================-->
    <section id="content">
        <div class="main">
            <?=$content;?>
        </div>
        <div class="block"></div>
    </section>
</div>
<!--==============================footer=================================-->
<footer>
    <div class="main">
        <div class="footer-bg">
            <div class="container_12">
                <div class="wrapper">
                    <div class="grid_12">
                        <div class="footer-padding">
                            <div class="wrapper">
                                <span class="footer-link"><span><a class="link" href="<?=Url::home()?>">RockBand.com</a></span>Site for Music Group</span>
                                <?php echo FooterWidget::widget();?>
                            </div>
                            <div class="aligncenter">
                                Alex St &copy; 2016
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
