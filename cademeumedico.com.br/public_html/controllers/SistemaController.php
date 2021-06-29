<?php
namespace app\controllers;
class SistemaController extends \yii\web\Controller
{
    public function actionIndex(){
        header ("Content-type: application/xml");
        return $this->renderPartial(Index);
    }
}

?>