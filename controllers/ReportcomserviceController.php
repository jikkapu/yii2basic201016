<?php

namespace app\controllers;

class ReportcomserviceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //สร้างการเชื่อมต่อ
        $conn=\Yii::$app->db;
        
        //คำสั่ง sql
        $sql='SELECT c.brand,s.* from com_service s
             left JOIN com c on c.com_id=s.com_id';
        $cmd=$conn->createCommand($sql);
       
        //คำสั่ง sql
        $cmd=$conn->createCommand($sql);
         
                
        //สร้าง query
        $data=$cmd->queryAll();
        
     
        return $this->render('index',['data'=>$data]);
    }

}
