<?php 
use yii\helpers\Html; 

?> 

<table class="table table-bordered table-hover table-responsive table-striped "> 
    <thead> 
        <tr> 
           
            <th>รหัส</th> 
            <th>ประเภท</th> 
            <th></th> 
        </tr> 
    </thead> 
    <tbody> 
        <?php 
        foreach ($data as $key => $value) { 
  

        echo '<tr>'; 
        echo '<td>'.$value['com_type_id'] .'</td>'; 
        echo '<td>'.$value['com_type_name'].'</td>'; 
        echo '<td>'.Html::a('<span class="glyphicon glyphicon-list-alt"> </span>', ['/reportcomdetail','id'=>$value['com_type_id']]).'</td>'; 
        echo '<tr>'; 
        } 
        ?> 
    </tbody> 
</table>