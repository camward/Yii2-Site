<?php

use yii\helpers\Html;
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
<body id="page1">
<?php $this->beginBody() ?>

<div class="extra">
    <!--==============================header=================================-->
    <header>
        <div class="main">
            <div class="bg-1">
                <h1><a href="index.html">Rock Band</a></h1>
            </div>
            <nav>
                <div class="menu-bg-tail">
                    <div class="menu-bg">
                        <div class="container_12">
                            <div class="grid_12">
                                <ul class="menu">
                                    <li class="item"><a class="active" href="index.html">About</a></li>
                                    <li><a href="audio.html">Audio</a></li>
                                    <li><a href="video.html">Video</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li class="item-1"><a href="tour-dates.html">Tour Dates</a></li>
                                    <li class="last"><a href="contacts.html">Contacts</a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="slider-wrapper">
                <div class="slider">
                    <ul class="items">
                        <li><img src="images/slider-img1.jpg" alt="" /></li>
                        <li>
                            <img src="images/slider-img2.jpg" alt="" />
                        </li>
                        <li>
                            <img src="images/slider-img3.jpg" alt="" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--==============================content================================-->
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November 21, 2011!</div>
        <div class="main">
            <div class="bg-2">
                <div class="content-padding-1">
                    <div class="container_12">
                        <div class="wrapper">
                            <article class="grid_4">
                                <div class="padding-grid-1">
                                    <h3 class="letter">Latest <strong>News</strong></h3>
                                    <div class="wrapper img-indent-bot1">
                                        <time class="time time-stule-1" datetime="2011-11-09"> <strong class="text-1">09</strong><strong class="text-2">nov</strong></time>
                                        <div class="extra-wrap">
                                            <div class="indent-top">
                                                Rock Band is one of <a class="link" target="_blank" href="http://blog.templatemonster.com/free-website-templates/">free website templates</a> created by Template Monster team.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper img-indent-bot1">
                                        <time class="time time-stule-1" datetime="2011-11-07"> <strong class="text-1">07</strong><strong class="text-2">nov</strong></time>
                                        <div class="extra-wrap">
                                            <div class="indent-top">
                                                This <a class="link" target="_blank" href="http://blog.templatemonster.com/2011/11/21/free-website-template-jquery-gallery-music/ ">Rock Band Template</a> goes with two packages вЂ“ with PSD source files and without them.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper">
                                        <time class="time time-stule-1" datetime="2011-11-02"> <strong class="text-1">02</strong><strong class="text-2">nov</strong></time>
                                        <div class="extra-wrap">
                                            <div class="indent-top">
                                                PSD source files are available for free for the registered members <br />of Templates.com.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="grid_4 alpha">
                                <div class="padding-grid-1">
                                    <h3>Tour <strong>Dates</strong></h3>
                                    <div class="wrapper img-indent-bot2">
                                        <time class="time time-stule-2" datetime="2011-11-09"> <strong class="text-3">09</strong><strong class="text-4">nov</strong></time>
                                        <div class="extra-wrap">
                                            <h4 class="indent-top"><a href="#">New York</a></h4>
                                            Lorem ipsum dolor consctetur
                                        </div>
                                    </div>
                                    <div class="wrapper img-indent-bot2">
                                        <time class="time time-stule-2" datetime="2011-11-05"> <strong class="text-3">05</strong><strong class="text-4">nov</strong></time>
                                        <div class="extra-wrap">
                                            <h4 class="indent-top"><a href="#">Los Angeles</a></h4>
                                            Adipisicing elitdo esmod tempor
                                        </div>
                                    </div>
                                    <div class="wrapper">
                                        <time class="time time-stule-2" datetime="2011-11-01"> <strong class="text-3">01</strong><strong class="text-4">nov</strong></time>
                                        <div class="extra-wrap">
                                            <h4 class="indent-top"><a href="#">San Diego</a></h4>
                                            Lorem ipsum dolor consctetur
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="grid_4 alpha">
                                <div class="padding-grid-2">
                                    <h3 class="letter">In Stores <strong>Now!</strong></h3>
                                    <div class="wrapper">
                                        <figure class="style-img fleft"><a href="#"><img src="images/page1-img1.jpg"  alt=""></a></figure>
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
                                <div class="wrapper img-indent-bot1">
                                    <time class="time time-stule-3" datetime="2011-11-09"> <strong class="text-5">09</strong><strong class="text-6">nov</strong></time>
                                    <div class="extra-wrap">
                                        <div class="indent-top">
                                            Lorem ipsum dolor consctetur adipisicing elitdo eusmod tempor incididunt ut labore.
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper">
                                    <time class="time time-stule-3" datetime="2011-11-03"> <strong class="text-5">03</strong><strong class="text-6">nov</strong></time>
                                    <div class="extra-wrap">
                                        <div class="indent-top">
                                            Lorem ipsum dolor consctetur adipisicing elitdo eusmod tempor incididunt ut labore.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="grid_4 alpha">
                            <div class="padding-grid-2">
                                <h3 class="letter">Latest <strong>Video</strong></h3>

                                <div class="wrapper">
                                    <figure class="style-img-2 fleft"><a class="lightbox-image" href="video/video_AS3.swf?width=495&amp;height=275&amp;fileVideo=intro06.flv" data-gal="prettyVideo[prettyVideo]"><img src="images/page1-img2.jpg"  alt=""></a></figure>
                                </div>
                            </div>
                        </article>
                        <article class="grid_4 alpha">
                            <div class="padding-grid-2">
                                <h3 class="letter prev-indent-bot1">Shortly <strong>About</strong></h3>
                                <h6>Sed ut perspiciatis unde omnis</h6>
                                Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.
                            </div>
                        </article>
                    </div>
                </div>
            </div>
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
                                <span class="footer-link"><span>Alex St &copy; 2016</span> <a rel="nofollow" target="_blank" class="link" href="http://google.com/">RockBand.com</a> - сайт музыкальной группы</span>
                                <ul class="list-services">
                                    <li><a class="tooltips n-1" title="Twitter" href="#"></a></li>
                                    <li><a class="tooltips n-2" title="Facebook" href="#"></a></li>
                                    <li class="last"><a class="tooltips n-3" title="Youtube" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="aligncenter">
                                <!-- {%FOOTER_LINK} -->
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
