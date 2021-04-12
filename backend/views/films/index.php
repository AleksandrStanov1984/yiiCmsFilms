<?php
//
//
$this->title = 'Фильмы';

use yii\helpers\Html; ?>
<div>
    <!--  //  --><?php //var_dump($films);?>
    <div class="row">
        <?php if ($films && count($films) > 0) : ?>
            <?php foreach ($films as $film): ?>
                <div class="col-lg-2 " style="text-align: center; margin: 0 0 10px 60px">
                    <a href="<?= \yii\helpers\Url::to(['films/view', 'id' => $film->id]) ?>">
                        <img style=" margin-top: 15px" src="<?= $film->img_url ?>" width="300"
                             height="300" alt="Пример">
                        <h4 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis"><?= $film->name ?></h4>
                    </a>
                    <div>
                        <button type="button" class="btn btn-success" style="margin-bottom: 15px; text-align: center;">Купить билет</button>
                    </div>
                </div>
            <?php endforeach; ?>

        <?php else: ?>
            <h2 style="text-align: center">На данный момент список фильмов пуст</h2>
        <?php endif ?>
    </div>
</div>
