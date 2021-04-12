<?php

namespace common\domain\Film;

use common\domain\Metadata\Metadata;
use Yii;
use yii\db\ActiveRecord;

/**
 * Film model
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $trailer_url
 * @property integer $main_poster_id
 */
class Film extends ActiveRecord
{

    public static function tableName(): string
    {
        return '{{films}}';
    }

    public static function getAllFilms(){
        $sql = "Select * from films where id > 0";

        $connection = Yii::$app->getDb();
        $command = $connection->createCommand($sql);

        return $res = $command->queryAll();
    }

    public static function create($name, $description, $trailerUrl)
    {
        $film = new self();

        $film->name = $name;
        $film->description = $description;
        $film->trailer_url = $trailerUrl;

        return $film;
    }

    public function getMetadata()
    {
        return Metadata::find()->where(['film_id' => $this->id]);
    }
}