<?php

/**
 * m180902_132253_create_team_selection_table.php
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
 * Handles the creation of table `team_selection`.
 *
 * @category   console
 * @package    console/migrations
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

class m180902_132253_create_team_selection_table extends Migration
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

        $this->createTable('team_selection', [
            'id' => $this->primaryKey(11)->unsigned(),
            'tournament_id' => $this->integer(11)->unsigned()->notNull(),
            'team_id' => $this->integer(7)->unsigned()->notNull(),
            'player_id' => $this->integer(11)->unsigned()->notNull(),
            'is_available' => $this->smallInteger(1)->unsigned()->notNull()->defaultValue(1),
            'unavailability_reason' => $this->text(),
            'selected_at' => $this->integer(11)->unsigned()->notNull()
        ], $tableOptions);

        $this->addForeignKey(
            'FK_team_selection_tournament',
            'team_selection',
            'tournament_id',
            'tournament',
            'id'
        );

        $this->addForeignKey(
            'FK_team_selection_team',
            'team_selection',
            'team_id',
            'team',
            'id'
        );

        $this->addForeignKey(
            'FK_team_selection_player',
            'team_selection',
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
        $this->dropTable('team_selection');
    }
}
