<?php

namespace app\controllers;
use Yii;

class WidgetTestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return Yii::$app->response->sendFile('files/hi.txt')->send();
    }
        public function actionPrice()
    {
        return $this->render("/main/price");
    }

}
