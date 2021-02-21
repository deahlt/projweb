<?php

if (($_FILES['animal_image']['name']!="")){
 $target_dir = "../img/";
 $file = $_FILES['animal_image']['name'];
 $path = pathinfo($file);
 $filename = $path['filename'];
 $ext = $path['extension'];
 $temp_name = $_FILES['animal_image']['tmp_name'];
 $path_filename_ext = $target_dir.$filename.".".$ext;

if (file_exists($path_filename_ext)) {
 echo "Kerkojme ndjesë, file egziston";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
 echo "Dokumenti u dërgua me sukses!";
 }
}

 ?>
