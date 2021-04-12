<?php

use yii\db\Migration;

/**
 * Class m210408_142224_create_film_tables
 */
class m210408_142224_create_film_tables extends Migration
{
    public $tableName = '{{%film}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'description' => $this->text()->notNull(),
            'img_url' => $this->string(500)->defaultValue(null),
            'youtube_url' => $this->string(500)->defaultValue(null),
            'created_at' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210408_142224_create_film_tables cannot be reverted.\n";

        return false;
    }
    */
}
