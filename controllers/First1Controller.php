<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $title='นี้คือ ข้าพเจ้า';
        $person = [
            ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'ying@hotmail.com'],
            ['fname' => 'ลดาวัลย์', 'lname' => 'จิตขาว', 'email' => 'lada@hotmail.com'],
            ['fname' => 'น้ำทิพย์', 'lname' => 'จิตขาว', 'email' => 'num@hotmail.com']
        ];
        return $this->render('index',['title'=>$title,'person'=>$person]);
    }

}
