<?php



namespace common\domain\Film;

use Description;
use Yii;
use yii\db\ActiveRecord;

/**
 * Film model
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string img_url
 * @property string youtube_url
 * @property string created_at
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

    public function getData()
    {
        return Description::find()->where(['film_id' => $this->id]);
    }
}