<div class="content-padding-2">
    <div class="container_12">
        <div class="wrapper">
            <div class="grid_8">
                <div class="padding-grid-1">
                    <h3>Tour <strong>Dates</strong></h3>
                </div>
                <div class="wrapper">
                    <article class="grid_4 alpha">
                        <div class="padding-grid-1">
                            <?foreach($tour as $tr):?>
                                <?$date = explode('-', $tr->date);?>
                                <div class="wrapper img-indent-bot2">
                                    <time class="time time-stule-2" datetime="<?=$tr->date?>"> <strong class="text-3"><?=$date[2]?></strong><strong class="text-4"><?\app\controllers\getMonth($date[1])?></strong></time>
                                    <div class="extra-wrap">
                                        <h4 class="indent-top"><a href="<?= \yii\helpers\Url::to(['my/tour', 'id' => $tr->id]) ?>"><?=$tr->city?></a></h4>
                                        <?=$tr->description?>
                                    </div>
                                </div>
                            <?endforeach;?>
                        </div>
                    </article>
                    <article class="grid_4 omega">
                        <div class="padding-grid-4">
                            <?foreach($tour as $tr):?>
                                <div class="margin-bot1">
                                    <span class="text-width">Tickets:</span> <span class="inline"><a class="link" href="javascript:void(0)"><?=$tr->tickets?></a></span><br />
                                    <span class="text-width">Telephone:</span>  <span class="color-1 inline"><?=$tr->phone?></span>
                                </div>
                            <?endforeach;?>
                        </div>
                    </article>
                </div>
            </div>
            <article class="grid_4 alpha">
                <div class="padding-grid-3">
                    <h3>Latest <strong>News</strong></h3>
                    <ul class="list-3">
                        <?foreach($news as $nw):?>
                            <li><a href="<?= \yii\helpers\Url::to(['my/news', 'id' => $nw->id]) ?>"><?=$nw->name?></a></li>
                        <?endforeach;?>
                    </ul>
                </div>
            </article>
        </div>
    </div>
</div>