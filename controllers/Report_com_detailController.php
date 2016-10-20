<?php

namespace app\controllers;

class Report_com_detailController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $conn=\Yii::$app->db;
        $sql='select * from com';
        $cmd=$conn->createCommand($sql);
        $data=$cmd->queryAll();
        
      //  print_r($data);
      //  die();
        
        return $this->render('index',['data'=>$data]);
    }

}
