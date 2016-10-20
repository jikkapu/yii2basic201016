

 <table class="table table-bordered table-hover table-striped"
    <thead>
      <tr>
        <th>ลำดับ</th>
        <th>รายการคอมพิวเตอร์</th>
        <th>รหัสคุรุภัณฑ์</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach ($com as $key=>$value) {
            
        
        echo '<tr class="success">';
        echo '<td>'.($key+1).'</td>';
        echo '<td>'.$value->brand.'</td>';
        echo '<td>'.$value->asset_code.'</td>';
        echo '</tr>';
        }
        ?>

    </tbody>
  </table>
//<?php
  //     foreach ($com as $key=>$value) {
    //        echo ($key+1).'.  '.$value->brand.' /  '.$value->asset_code.'<br>';
            
      // }
