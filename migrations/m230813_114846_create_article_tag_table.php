<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article_tag}}`.
 */
class m230813_114846_create_article_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%article_tag}}', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer(),
            'tag_id' => $this->integer(),
        ]);

        //created index for column `user_id`
        $this->createIndex(
            'idx-post-article_id',
            'article_tag',
            'article_id'
        );

        //add foreing key for table `user`
        $this->addForeignKey(
            'fk-post-article_id',
            'article_tag',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );

        //created index for column `user_id`
        $this->createIndex(
            'idx-tag_id',
            'article_tag',
            'tag_id'
        );

        //add foreing key for table `user`
        $this->addForeignKey(
            'fk-tag_id',
            'article_tag',
            'tag_id',
            'tag',
            'id',
            'CASCADE'
        );    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%article_tag}}');
    }
}
