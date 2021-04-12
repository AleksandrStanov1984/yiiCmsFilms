<?php

use yii\db\Migration;

/**
 * Class m210408_142630_create_film_tables
 */
class m210408_142630_create_film_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210408_142630_create_film_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210408_142630_create_film_tables cannot be reverted.\n";

        return false;
    }
    */
}
