<?php
namespace frontend\controllers;

use Yii;
use yii\base\Module;
use yii\web\Controller;
use frontend\services\interfaces\IPlayerService;
use frontend\services\interfaces\ITeamService;

/**
 * TeamController implements the CRUD actions for Country model.
 *
 * @category   frontend
 * @package    frontend\controllers
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */
class TeamController extends Controller
{

    private $teamService;

    private $playerService;

    public function __construct($id, Module $module, ITeamService $teamService, IPlayerService $playerService, array $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->teamService = $teamService;
        $this->playerService = $playerService;
    }

    /**
     * Displays team page.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        //@todo implement view model
        $teams = $this->teamService->getList();
        return $this->render('index', ['teams' => $teams]);
    }

    /**
     * Display team player list page
     *
     * @param integer $teamId team id
     * @return mixed
     */
    public function actionPlayers($teamId)
    {

        //@todo implement view model
        $players = $this->playerService->getList((int) $teamId);
        return $this->render('player', ['players' => $players]);
    }
}
