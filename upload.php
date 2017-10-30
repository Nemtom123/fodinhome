<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.10.30.
 * Time: 10:43
 */

 //upload.php
 //echo 'done';
 $output = '';
 if(isset($_FILES['file']['name'][0]))
 {
     //echo 'OK';
     foreach($_FILES['file']['name'] as $keys => $values)
     {
         if(move_uploaded_file($_FILES['file']['tmp_name'][$keys], 'image/' . $values))
         {
             $output .= '<div class=col-md-3"><img src="upload/'.$values.'" class="img-responsive" /></div>';
         }
     }
 }
 echo $output;
 ?>