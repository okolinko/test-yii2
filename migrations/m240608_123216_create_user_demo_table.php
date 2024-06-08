<?php
use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_demo}}`.
 */
class m240608_123216_create_user_demo_table extends Migration
{
    /**
     * @return void
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('user_demo', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'middle_name' => $this->string()->notNull(),
            'email' => $this->string()->null()->unique(),
            'phone' => $this->string()->null()->unique(),
            'document' => $this->string()->notNull()->unique(),
        ], $tableOptions);
    }

    /**
     * @return void
     */
    public function safeDown()
    {
        $this->dropTable('user_demo');
    }
}
