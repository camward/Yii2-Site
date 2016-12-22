<?php
use yii\web\View;
$this->registerJsFile('@web/js/video.js', ['position' => View::POS_BEGIN]);
?>

<div class="content-padding-2">
    <div class="container_12">
        <div class="wrapper">
            <div class="grid_12">
                <div class="padding-grid-1">
                    <h3 class="letter">Our <strong>Music Videos</strong></h3>
                </div>
                <?foreach($video as $vd):?>
                    <article class="grid_4 alpha">
                        <div class="padding-grid-2">
                            <div class="wrapper p2">
                                <figure class="style-img-2 fleft"><a class="lightbox-image" href="video/video_AS3.swf?width=495&amp;height=275&amp;fileVideo=<?=$vd->video?>" data-gal="prettyVideo[prettyVideo]"><img src="images/<?=$vd->images?>"></a></figure>
                            </div>
                            <p class="prev-indent-bot2"><?=$vd->description?></p><br />
                        </div>
                    </article>
                <?endforeach;?>
            </div>
        </div>
    </div>
</div>