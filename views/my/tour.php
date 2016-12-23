<div class="content-padding-2">
    <div class="container_12">
        <div class="wrapper">
            <div class="grid_8">
                <div class="padding-grid-1">
                    <h3><?=$tour_data->city?> <strong>| <?=$tour_data->date?></strong></h3>
                </div>
                <div class="padding-grid-1">
                    <p>
                        <?=$tour_data->description?><br />
                        Tickets: <?=$tour_data->tickets?><br />
                        Telephone: <?=$tour_data->phone?>
                    </p>
                    <p><a href="<?= \yii\helpers\Url::to(['my/tour-dates']) ?>">Назад</a></p>
                </div>
            </div>
        </div>
    </div>
</div>