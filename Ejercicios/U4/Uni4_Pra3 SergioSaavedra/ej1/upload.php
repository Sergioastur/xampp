<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Comprobamos si es una imagen real o falsa
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
    echo "El fichero es una imagen - " . $check["mime"] . ".";
    $uploadOk = 1;
    } else {
    echo "El fichero no es una imagen.";
    $uploadOk = 0;
    }
    
?>