<?php

/**
 * m180902_132214_create_tournament_table.php
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
 * Handles the creation of table `tournament`.
 *
 * @category   console
 * @package    console/migrations
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

class m180902_132214_create_tournament_table extends Migration
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

        $this->createTable('tournament', [
            'id' => $this->primaryKey(11)->unsigned(),
            'name' => $this->string(255)->notNull(),
            'slug' => $this->string(255)->notNull(),
            'status' => $this->tinyInteger(1)->unsigned()->notNull()->defaultValue(1),
            'start_at' => $this->integer(11)->unsigned()->notNull(),
            'end_at' => $this->integer(11)->unsigned()->notNull(),
            'created_at' => $this->integer(11)->unsigned()->notNull(),
            'updated_at' => $this->integer(11)->unsigned()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tournament');
    }
}
