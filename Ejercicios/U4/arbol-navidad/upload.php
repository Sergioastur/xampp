<?php

$target_dir = "uploads/";
$uploadOk = 1;
$tiposImagen = array("jpg", "jpeg", "png", "gif"); 

for ($i = 1; $i <= 10; $i++) {
    $file_name = $_FILES["f" . $i]["name"];
    $file_tmp = $_FILES["f" . $i]["tmp_name"];
    $file_size = $_FILES["f" . $i]["size"];
    $file_error = $_FILES["f" . $i]["error"];
    
    
    if ($file_name) {
        
        $extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        
        if (!in_array($extension, $tiposImagen)) {
            echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
            $uploadOk = 0;
        }

        
        if ($file_error !== 0) {
            echo "Hubo un error al cargar el archivo.";
            $uploadOk = 0;
        }

        
        if ($file_size > 5000000) { 
            echo "El archivo es demasiado grande.";
            $uploadOk = 0;
        }

        
        if ($uploadOk === 1) {
            $target_file = $target_dir . basename($file_name);
            
            
            if (file_exists($target_file)) {
                $target_file = $target_dir . uniqid() . "-" . basename($file_name);
            }

            
            if (move_uploaded_file($file_tmp, $target_file)) {
                echo "El archivo " . basename($file_name) . " se ha subido correctamente.";
            } else {
                echo "Hubo un error al guardar el archivo.";
            }
        }
    }
}
?>
