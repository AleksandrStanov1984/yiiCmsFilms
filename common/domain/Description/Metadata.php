<?php




namespace common\domain\Metadata;

use common\domain\Film\Film;
use yii\db\ActiveRecord;

/**
 * Metadata model
 *
 * @property integer $id
 * @property integer $film_id
 * @property string $year
 * @property string $director
 * @property string $producer
 * @property string $composer
 * @property string $screenwriter
 * @property string $operator
 * @property integer $budget
 * @property integer $age
 * @property float $duration
 */
class Metadata extends ActiveRecord
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