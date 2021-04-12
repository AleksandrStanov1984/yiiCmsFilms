<?php



var_dump($film->film);
var_dump($film->descr);

use yii\helpers\Html;
?>

<div class="films-view">
    <div class="box box-primary">
        <div class="box-body">
            <strong><i class="fa fa-file-text-o margin-r-5"></i> Название фильма </strong>
            <div>
                <img style=" margin-top: 15px; border-radius: 16px" src="" width="200"
                     height="200" alt="Фильм" title="Фильм"></br>
                <p class="text-muted"></p>
            </div>
            <hr>
            <strong><i class="fa fa-file-text-o margin-r-5"></i> Описание</strong>
            <p class="text-muted"></p>
            <hr>
            <strong><i class="fa fa-file-text-o margin-r-5"></i> Трейлер</strong>
            <div style="text-align: center">
                <iframe style="border-radius: 16px" width="760" height="415" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>