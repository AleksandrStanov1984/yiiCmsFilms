<?php


use yii\base\Model;

class Filmes extends Model
{
    public function getAllFilms(){
        $sql = "Select * from films where id > 0";

        $connection = Yii::$app->getDb();
        $command = $connection->createCommand($sql);
        $res = $command->queryAll();

        return $res;
    }
}