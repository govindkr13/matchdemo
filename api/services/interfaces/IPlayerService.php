<?php
/**
 * IPlayerService.php
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   api
 * @package    api\interfaces
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */
namespace api\services\interfaces;
/**
 * Created by PhpStorm.
 * User: OM
 * Date: 02-09-2018
 * Time: 11:58 PM
 */

interface IPlayerService
{
    public function getList($teamId): array;
}