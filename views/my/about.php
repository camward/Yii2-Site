<?php
use yii\web\View;
use app\components\SliderWidget;
use app\components\DescriptionWidget;
use app\components\EventsWidget;
$this->registerJsFile('@web/js/index.js', ['position' => View::POS_BEGIN]);
?>

<?$this->beginBlock('indexSlider');?>
    <div class="slider-wrapper">
        <div class="slider">
            <?php echo SliderWidget::widget();?>
        </div>
    </div>
<?$this->endBlock();?>

<div class="bg-2">
    <div class="content-padding-1">
        <div class="container_12">
            <div class="wrapper">
                <article class="grid_4">
                    <div class="padding-grid-1">
                        <h3 class="letter">Latest <strong>News</strong></h3>
                        <?foreach($news as $nw):?>
                            <?$date_news = explode('-', $nw->date);?>
                            <div class="wrapper img-indent-bot1">
                                <time class="time time-stule-1" datetime="<?=$nw->date?>"> <strong class="text-1"><?=$date_news[2]?></strong><strong class="text-2"><?\app\controllers\getMonth($date_news[1])?></strong></time>
                                <div class="extra-wrap">
                                    <div class="indent-top">
                                        <?\app\controllers\truncate($nw->description)?>
                                        <a href="<?= \yii\helpers\Url::to(['my/news', 'id' => $nw->id]) ?>"> Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        <?endforeach;?>
                    </div>
                </article>
                <article class="grid_4 alpha">
                    <div class="padding-grid-1">
                        <h3>Tour <strong>Dates</strong></h3>
                        <?foreach($tour as $tr):?>
                            <?$date = explode('-', $tr->date);?>
                            <div class="wrapper img-indent-bot2">
                                <time class="time time-stule-2" datetime="<?=$tr->date?>"> <strong class="text-3"><?=$date[2]?></strong><strong class="text-4"><?\app\controllers\getMonth($date[1])?></strong></time>
                                <div class="extra-wrap">
                                    <h4 class="indent-top"><a href="<?= \yii\helpers\Url::to(['my/tour', 'id' => $tr->id]) ?>"><?=$tr->city?></a></h4>
                                    <?\app\controllers\truncate($tr->description)?>
                                </div>
                            </div>
                        <?endforeach;?>
                    </div>
                </article>
                <article class="grid_4 alpha">
                    <div class="padding-grid-2">
                        <h3 class="letter">In Stores <strong>Now!</strong></h3>
                        <div class="wrapper">
                            <?foreach($album as $al):?>
                                <figure class="style-img fleft"><img src="images/<?=$al->images?>"></figure>
                            <?endforeach;?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<div class="content-padding-2">
    <div class="container_12">
        <div class="wrapper">
            <article class="grid_4">
                <div class="padding-grid-1">
                    <h3>Upcoming <strong>Events</strong></h3>
                    <?php echo EventsWidget::widget();?>
                </div>
            </article>
            <article class="grid_4 alpha">
                <div class="padding-grid-2">
                    <h3 class="letter">Latest <strong>Video</strong></h3>
                    <div class="wrapper">
                        <?foreach($video as $vd):?>
                            <figure class="style-img-2 fleft"><a class="lightbox-image" href="video/video_AS3.swf?width=495&amp;height=275&amp;fileVideo=<?=$vd->video?>" data-gal="prettyVideo[prettyVideo]"><img src="images/<?=$vd->images?>"></a></figure>
                        <?endforeach;?>
                    </div>
                </div>
            </article>
            <article class="grid_4 alpha">
                <div class="padding-grid-2">
                    <h3 class="letter prev-indent-bot1">Shortly <strong>About</strong></h3>
                    <?php echo DescriptionWidget::widget();?>
                </div>
            </article>
        </div>
    </div>
</div>