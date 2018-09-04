<?php

/**
 * Html.php
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
 * @package    common\helpers
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

namespace common\helpers;

/**
 * This is common html helper class. All common html related methods must be placed here.
 *
 * @category   common
 * @package    common\helpers
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

class Html extends \yii\helpers\Html
{

    /**
     * To create list of constants by picking constants of a particular class having prefix as $prefix value.
     * Where key is constant value and value is constant name.
     *
     * @param string $prefix    constant prefix
     * @param string $className name of class
     *
     * @return array $constantList
     */
    public static function getConstantList(string $prefix, string $className) : array
    {
        $constantList = [];
        $prefixLength = strlen($prefix);
        $reflection = new \ReflectionClass($className);
        $constants = $reflection->getConstants();
        foreach ($constants as $name => $value) {
            if (substr($name, 0, $prefixLength) != $prefix) {
                continue;
            }
            $constantList[$value] = \yii\helpers\Inflector::camel2words(str_replace($prefix, '', $name));
        }
        return $constantList;
    }

}
