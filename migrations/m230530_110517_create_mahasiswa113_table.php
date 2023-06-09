<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa113}}`.
 */
class m230530_110517_create_mahasiswa113_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa113}}', [
            'id113' => $this->primaryKey(),
            'no_induk_mahasiswa113' => $this->string(15)->notNull(),
            'nama_mahasiswa113' => $this->string(100)->notNull(),
            'kelas113' => $this->char(1)->notNull(),
            'status113' => $this->string(11)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa113}}');
    }
}
