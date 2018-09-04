<?php

/**
 * m180902_132225_create_match_table.php
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   console
 * @package    console/migrations
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

use yii\db\Migration;

/**
 * Handles the creation of table `match`.
 *
 * @category   console
 * @package    console/migrations
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

class m180902_132225_create_match_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('match', [
            'id' => $this->primaryKey(11)->unsigned(),
            'tournament_id' => $this->integer(11)->unsigned()->notNull(),
            'location' => $this->string(64)->notNull(),
            'date' => $this->integer(11)->unsigned()->notNull(),
            'result' => $this->tinyInteger(1)->unsigned()->notNull()->defaultValue(0)->comment('0 Not started, 1 In Progress, 2 Drawn, 3 Abandon, 4 Result Decided'),
            'type' => $this->tinyInteger(1)->unsigned()->notNull()->comment('1 Test, 2 One Day, 3 Twenty Twenty'),
            'first_field_umpire' => $this->string(64),
            'second_field_umpire' => $this->string(64),
            'tv_umpire' => $this->string(64),
            'referee' => $this->string(64),
            'best_player' => $this->string(64),
            'created_at' => $this->integer(11)->unsigned()->notNull(),
            'updated_at' => $this->integer(11)->unsigned()
        ], $tableOptions);

        $this->addForeignKey(
            'FK_match_tournament',
            'match',
            'tournament_id',
            'tournament',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('match');
    }
}
