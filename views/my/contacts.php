<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="content-padding-2">
    <div class="container_12">
        <div class="wrapper">
            <article class="grid_8">
                <div class="padding-grid-1">
                    <h3>Contact <strong>Form</strong></h3>

                    <?if(Yii::$app->session->hasFlash('success')):?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?=Yii::$app->session->getFlash('success')?>
                        </div>
                    <?endif;?>
                    <?if(Yii::$app->session->hasFlash('error')):?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?=Yii::$app->session->getFlash('error')?>
                        </div>
                    <?endif;?>

                    <?$form = ActiveForm::begin();?>
                    <fieldset>
                        <?=$form->field($model, 'name')?>
                        <?=$form->field($model, 'email')?>
                        <?=$form->field($model, 'text')->textarea(['rows' => 10])?>
                    </fieldset>
                    <div class="link-form">
                        <?=Html::resetButton('Очистить', ['class' => 'btn btn-default btn-sm'])?>
                        <?=Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-sm'])?>
                    </div>
                    <div class="clear"></div>
                    <?ActiveForm::end();?>
                </div>
            </article>
            <article class="grid_4 alpha">
                <div class="padding-grid-3">
                    <h3>Contact <strong>Info</strong></h3>
                    <div class="wrapper p2">
                        <figure class="style-img-2 fleft">
                            <iframe width="252" height="195" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                        </figure>
                    </div>
                    <dl class="list-4">
                        <dt>8901 Marmora Road,<br>Glasgow, D04 89GR.</dt>
                        <dd>Telephone: +1 959 603 6035</dd>
                        <dd>E-mail: <a class="link" href="#">mail@demolink.org</a></dd>
                    </dl>
                </div>
            </article>
        </div>
    </div>
</div>