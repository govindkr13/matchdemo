<?php

namespace api\modules\v1\controllers;

use api\modules\v1\Module;
use api\services\interfaces\IPlayerService;
use api\services\interfaces\ITeamService;
use yii\rest\ActiveController;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class TeamController extends ActiveController
{
    public $modelClass = '';

    private $teamService;

    private $playerService;

    public function __construct($id, Module $module, ITeamService $teamService, IPlayerService $playerService, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->teamService = $teamService;
        $this->playerService = $playerService;
    }

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['index'], $actions['create'], $actions['delete'], $actions['view']);
    }

    public function actionIndex()
    {
        return $this->teamService->getList();
    }

    public function actionPlayers($teamId)
    {
        return $this->playerService->getList($teamId);
    }
}


