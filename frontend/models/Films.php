<?php


namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * Movie model.
 */
class Films extends Model{

    public static function getAllFilms(){
        $sql = "Select * from films where id > 0";

        $connection = Yii::$app->getDb();
        $command = $connection->createCommand($sql);

        return $res = $command->queryAll();
    }
}