<div class="content-padding-2">
    <div class="container_12">
        <div class="wrapper">
            <div class="grid_12">
                <div class="padding-grid-1">
                    <h3 class="letter">Our <strong>Discography</strong></h3>
                </div>
                <?foreach($audio as $aud){?>
                    <div class="wrapper p3">
                        <article class="grid_4 alpha">
                            <div class="padding-grid-2">
                                <div class="wrapper">
                                    <figure class="style-img-2 fleft"><img src="images/<?=$aud->images?>"></figure>
                                </div>
                            </div>
                        </article>
                        <article class="grid_8 alpha">
                            <div class="padding-grid-2">
                                <h4 class="margin-none indent-top1"><strong><?=$aud->year?>.</strong>  <?=$aud->name?></h4>
                                <p class="prev-indent-bot"><?=$aud->description?></p>
                                <div class="wrapper">
                                    <ul class="list-1 fleft">
                                        <?
                                        $cnt = 0;
                                        foreach($aud->tracks as $track):
                                        $cnt++;
                                        ?>
                                            <li><a href="javascript:void(0)"><?=$cnt;?>. <?=$track->name?></a></li>
                                        <?endforeach;?>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                <?}?>
            </div>
        </div>
    </div>
</div>