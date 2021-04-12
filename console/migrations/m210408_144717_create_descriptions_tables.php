<?php

use yii\db\Migration;

/**
 * Class m210408_144717_create_descriptions_tables
 */
class m210408_144717_create_descriptions_tables extends Migration
{
    public $tableName = '{{%descriptions}}';

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
            'film_id' => $this->integer()->notNull(),
            'producing_country' => $this->string(50)->notNull(),
            'producer' => $this->string(50)->notNull(),
            'actors' => $this->string(250)->notNull(),
            'date_of_creation' => $this->dateTime()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx-descriptions-film_id', $this->tableName, 'film_id');
        $this->addForeignKey('fk-descriptions-film_id', $this->tableName, 'film_id', '{{%film}}', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-descriptions-film_id', $this->tableName);
        $this->dropTable($this->tableName);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210408_144717_create_descriptions_tables cannot be reverted.\n";

        return false;
    }
    */
}
