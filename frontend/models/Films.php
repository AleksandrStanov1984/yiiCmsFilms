<?php






namespace frontend\models;

use Yii;
use yii\base\Model;


class Films extends Model{

    public static function getAllFilms(){
        $sql = "Select * from films where id > 0";

        $connection = Yii::$app->getDb();
        $command = $connection->createCommand($sql);

        return $res = $command->queryAll();
    }

    public static function getFilm($id){

        $sql = "Select * from films where id = '" . $id . "'";
        $sql_d = "Select * from descriptions where film_id = '" . $id . "'";

        $connection = Yii::$app->getDb();
        $command = $connection->createCommand($sql);
        $connection_d = Yii::$app->getDb();
        $command_d = $connection_d->createCommand($sql_d);


        $res = new \stdClass();
        $res->film = $command->queryAll();
        $res->descr = $command_d->queryAll();

        return $res;
    }
}