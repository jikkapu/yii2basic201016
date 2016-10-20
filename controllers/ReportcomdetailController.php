<?php

namespace app\controllers;

class ReportcomdetailController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        
        
        //สร้างการเชื่อมต่อ
        $conn=\Yii::$app->db;
        
        //คำสั่ง sql
        $sql='select * from com where com_type_id=:id';
         $cmd=$conn->createCommand($sql);
       
         //ใส่ค่าให้กับพารามิเตอร์
        $cmd->bindValue(':id',$id);
        
        //สร้าง query
        $data=$cmd->queryAll();
        

        return $this->render('index',['data'=>$data]);
    }

}
