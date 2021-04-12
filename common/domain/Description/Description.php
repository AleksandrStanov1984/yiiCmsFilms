<?php




use common\domain\Film\Film;
use yii\db\ActiveRecord;

/**
 * Metadata model
 *
 * @property integer $id
 * @property integer $film_id
 * @property string producing_country
 * @property string $producer
 * @property string $actors
 * @property string date_of_creation
 */
class Description extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%descriptions}}';
    }

    public function getFilm()
    {
        return $this->hasOne(Film::class, ['id' => 'film_id']);
    }
}