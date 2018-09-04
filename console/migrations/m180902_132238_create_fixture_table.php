<?php

/**
 * m180902_132238_create_fixture_table.php
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
 * Handles the creation of table `fixture`.
 *
 * @category   console
 * @package    console/migrations
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

class m180902_132238_create_fixture_table extends Migration
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

        $this->createTable('fixture', [
            'id' => $this->primaryKey(11)->unsigned(),
            'match_id' => $this->integer(11)->unsigned()->notNull(),
            'team_id' => $this->integer(11)->unsigned()->notNull(),
            'captain_id' => $this->integer(11)->unsigned()->notNull(),
            'score' => $this->integer(4)->unsigned()->notNull()->defaultValue(0),
            'wicket_lost' => $this->integer(2)->unsigned()->notNull()->defaultValue(0),
            'result' => $this->tinyInteger(1)->unsigned()->notNull()->defaultValue(0)->comment('0 Not Decided, 1 Winner, 2 Looser, 3 Drawn'),
            'point' => $this->smallInteger(2)->unsigned()->defaultValue(0),
            'created_at' => $this->integer(11)->unsigned()->notNull(),
            'updated_at' => $this->integer(11)->unsigned()
        ], $tableOptions);

        $this->addForeignKey(
            'FK_fixture_match',
            'fixture',
            'match_id',
            'match',
            'id'
        );

        $this->addForeignKey(
            'FK_fixture_team',
            'fixture',
            'team_id',
            'team',
            'id'
        );

        $this->addForeignKey(
            'FK_fixture_player',
            'fixture',
            'captain_id',
            'player',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('fixture');
    }
}
