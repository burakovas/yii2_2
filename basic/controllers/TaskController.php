<?php
namespace app\controllers;

use yii\web\Controller;


class TaskController extends Controller
{
  public function actionIndex(){
    return $this->render('index', [
      'title' => 'Yii2',
      'content' => 'Content Task View'
    ]);
  }
}
