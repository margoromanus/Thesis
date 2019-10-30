<?php

include_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $buildingName = $_POST['buildingName'];
    $architect = $_POST['architect'];
    $description = $_POST['description'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('gltf');

    if (in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 50000000){
                $fileNameNew = $buildingName.".".$fileActualExt;

                $fileDestination = '../gltf/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "succes";
                $sql = "INSERT INTO gebouwen (gebouwnaam, architect, modelnaam, beschrijving) VALUES ('$buildingName', '$architect', '$fileNameNew', '$description');";
                mysqli_query($conn, $sql);
                header("Location: ../index.php?uploadsuccess");
            }
            else{
                echo "file must be below 50 Mb";
            }
        }
        else{
            echo "error";
        }
    }
    else{
        echo "error, only gltf files allowed";
    }

    
}
?>