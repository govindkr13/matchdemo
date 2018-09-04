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
 * @category   api
 * @package    api\services
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */
namespace api\services;
use api\services\interfaces\IPlayerService;
use common\models\Player;
use api\modules\v1\models\beans\Player as PlayerBean;


/**
 * Created by PhpStorm.
 * User: OM
 * Date: 02-09-2018
 * Time: 11:59 PM
 */

class PlayerService implements IPlayerService
{

    public function getList($teamId): array
    {
        $playerBeans = [];
        $players = Player::find()->getAllByTeamId($teamId);

        foreach ($players as $player) {
            $playerBean = new PlayerBean();
            $playerBean->id = $player['id'];
            $playerBean->firstName = $player['first_name'];
            $playerBean->lastName = $player['last_name'];
            $playerBean->jerseyNumber = $player['jersey_number'];
            $playerBeans[] = $playerBean;
        }
        return $playerBeans;
    }
}