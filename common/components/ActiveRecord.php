<?php

/**
 * ActiveRecord.php
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   common
 * @package    common/components
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

namespace common\components;
use yii\behaviors\TimestampBehavior;

/**
 * ActiveRecord is the base class for classes representing relational data in terms of objects.
 * Will place common methods here which shared among other classes.
 *
 * @category   common
 * @package    common/components
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

class ActiveRecord extends \yii\db\ActiveRecord
{

    /**
     * Returns a list of behaviors that this component should behave as.
     * Child classes may override this method to specify the behaviors they want to behave as.
     *
     * @return array the behavior configurations.
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class
            ]
        ];
    }

}
