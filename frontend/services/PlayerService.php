<?php

/**
 * PlayerService.php
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   frontend
 * @package    frontend\services
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */
namespace frontend\services;
use \Yii;
use common\components\HttpService;
use frontend\services\interfaces\IPlayerService;
use frontend\models\beans\Player;

/**
 * Created by PhpStorm.
 * User: OM
 * Date: 02-09-2018
 * Time: 11:59 PM
 */

class PlayerService extends HttpService implements IPlayerService
{

    /**
     * @param int $teamId
     * @return array
     * @throws \yii\httpclient\Exception
     */
    public function getList(int $teamId): array
    {
        $url = Yii::$app->params['apiUrl'] . "v1/teams/{$teamId}/players";
        $players = $this->get($url);
        $playerBeans = [];
        foreach ($players as $player) {
            $playerBean = new Player();
            $playerBean->id = $player['id'];
            $playerBean->firstName = $player['firstName'];
            $playerBean->lastName = $player['lastName'];
            $playerBean->jerseyNumber = $player['jerseyNumber'];
            $playerBeans[] = $playerBean;
        }
        return $playerBeans;
    }
}