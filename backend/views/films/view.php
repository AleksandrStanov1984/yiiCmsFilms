<?php


$this->title = 'Название фильма ' . $film->name;

use yii\helpers\Html;
?>

<div class="films-view">
    <div class="box box-primary">
        <div class="box-body">
            <strong><i class="fa fa-file-text-o margin-r-5"></i> Название фильма </strong>
            <div>
                <img style=" margin-top: 15px; border-radius: 16px" src="<?= $film->img_url ?>" width="200"
                     height="200" alt="Пример"></br>
                <p class="text-muted"><?= $film->name ?></p>
            </div>

            <hr>

            <strong><i class="fa fa-file-text-o margin-r-5"></i> Описание</strong>

            <p class="text-muted"><?= $film->description ?></p>
            <hr>

            <strong><i class="fa fa-file-text-o margin-r-5"></i> Трейлер</strong>

            <div style="text-align: center">
                <iframe style="border-radius: 16px" width="760" height="415" src="<?=$film->youtube_url?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

