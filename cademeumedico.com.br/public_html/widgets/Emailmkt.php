<?php
namespace app\component;
use Yii;
use yii\base\widget;
use yii\helpers\html;
use yii\models\Email;


class Emailmkt extends Widget
{
    public function run()
    {
        $model = new Email();
            
            if ($model-> load($yii::$app->request->post()) && $model->validade()){
               
                Yii::$app->session->setFlash('sucess','Email cadastrado');

            }else{
                return $this->render('emailmkt', ['model'=>$model]);

            }

           
    }
}