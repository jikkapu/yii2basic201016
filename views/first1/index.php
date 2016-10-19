<?php
/* @var $this yii\web\View */
?>
<h1><?php echo $title ?></h1>
<?php

print_r($person);
echo '<hr>';
foreach ($person as $key=> $item) {
   echo $key.' : '.$item['fname'].' / '.$item['lname'].' / '.$item['email'].'<br>';
    
}
echo '<hr>';
?>

<table class="table table-bordered table-hover table-striped">
    <tr class="success">
    <th>Number</th>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tbody>
      
      <?php
     
      foreach ($person as $key=>$value) {
        echo '<tr>';
          echo '<td>'.($key+1).'</td>';
      echo '<td>'.$value['fname'].'</td>';
      echo '<td>'.$value['lname'].'</td>';
      echo '<td>'.$value['email'].'</td>';
      echo '</tr>';
     
      }
      
     
  ?></tbody>
</table>