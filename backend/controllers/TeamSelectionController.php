<?php

/**
 * TeamSelectionController.php
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   backend
 * @package    backend\controllers
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

namespace backend\controllers;

use common\models\Player;
use common\models\Team;
use common\models\Tournament;
use Yii;
use common\models\TeamSelection;
use backend\models\TeamSelectionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * TeamSelectionController implements the CRUD actions for TeamSelection model.
 *
 * @category   backend
 * @package    backend\controllers
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

class TeamSelectionController extends Controller
{

    /**
     * Lists all TeamSelection models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TeamSelectionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TeamSelection model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TeamSelection model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        //@todo team must be dependent on tournament and players must be dependent on team
        $model = new TeamSelection();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'tournaments' => Tournament::find()->getList('id', 'name'),
            'teams' => Team::find()->getList('id', 'name'),
            'players' => Player::find()->getList('id', 'name')
        ]);
    }

    /**
     * Updates an existing TeamSelection model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        //@todo team must be dependent on tournament and players must be dependent on team
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'tournaments' => Tournament::find()->getList('id', 'name'),
            'teams' => Team::find()->getList('id', 'name'),
            'players' => Player::find()->getList('id', 'name')
        ]);
    }

    /**
     * Finds the TeamSelection model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TeamSelection the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TeamSelection::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
