<?php


use yii\helpers\Html;

$this->title = 'Афиша';
$this->params['breadcrumbs'][] = $this->title;

/**@var array $films */?>

<style>
    /* CSS */
    .btn-rounded {
        border-radius: 19px;
        padding-top: 3px;
        padding-bottom: 3px;
        padding-left: 3px;
        margin-bottom: 15px;
        text-align: center;
    }
</style>

<div class="films-index">
   <?php var_dump($films);?>
    <div class="row">

        <?php if ($films && count($films) > 0) : ?>
            <?php foreach ($films as $film): ?>
                <div class="col-lg-2 " style="text-align: center; margin: 0 0 10px 60px">
                    <a href="<?= \yii\helpers\Url::to(['films/view', 'id' => $film['id']]) ?>">
                        <img style=" margin-top: 15px" src="<?= $film['img_url'] ?>" width="150"
                             height="250" alt="Пример">
                        <h4 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis"><?= $film['name'] ?></h4>
                    </a>
                    <div>
                        <button type="button" class="btn btn-warning btn-rounded">
                            <i class="fas fa-ticket " style="padding: 7px 6px;">
                            </i> КУПИТЬ
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>

        <?php else: ?>
            <h2 style="text-align: center">На данный момент список фильмов пуст</h2>
        <?php endif ?>

    </div>


</div>