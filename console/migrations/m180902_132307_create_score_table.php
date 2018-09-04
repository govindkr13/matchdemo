<?php

/**
 * m180902_132307_create_score_table.php
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
 * Handles the creation of table `score`.
 *
 * @category   console
 * @package    console/migrations
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

class m180902_132307_create_score_table extends Migration
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

        $this->createTable('score', [
            'id' => $this->primaryKey(11)->unsigned(),
            'match_id' => $this->integer(11)->unsigned()->notNull(),
            'player_id' => $this->integer(11)->unsigned()->notNull(),
            'ball_played' => $this->integer(4)->unsigned()->notNull()->defaultValue(0),
            'run_scored' => $this->integer(4)->unsigned()->notNull()->defaultValue(0),
            'batting_average' => $this->decimal(5, 2)->unsigned()->notNull()->defaultValue(0),
            'total_bowled' => $this->integer(4)->unsigned()->notNull()->defaultValue(0),
            'run_expenses' => $this->integer(4)->unsigned()->notNull()->defaultValue(0),
            'maiden' => $this->integer(4)->unsigned()->notNull()->defaultValue(0),
            'wicket_taken' => $this->integer(2)->unsigned()->notNull()->defaultValue(0),
            'balling_average' => $this->decimal(4, 2)->unsigned()->notNull()->defaultValue(0),
            'catch' => $this->smallInteger(2)->unsigned()->notNull()->defaultValue(0),
            'stump' => $this->smallInteger(2)->unsigned()->notNull()->defaultValue(0),
            'created_at' => $this->integer(11)->unsigned()->notNull(),
            'updated_at' => $this->integer(11)->unsigned()
        ], $tableOptions);

        $this->addForeignKey(
            'FK_score_match',
            'score',
            'match_id',
            'match',
            'id'
        );

        $this->addForeignKey(
            'FK_score_player',
            'score',
            'player_id',
            'player',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('score');
    }
}
