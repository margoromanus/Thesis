<?php

include_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $architectname = $_POST['architectname'];
    $nationality = $_POST['nationality'];
    $birthdate = $_POST['birthdate'];
    $description = $_POST['description'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'PNG', 'JPEG', 'JPG');

    if (in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 50000000){
                $fileNameNew = $architectname.".".$fileActualExt;

                $fileDestination = '../images/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "succes";
                $sql = "INSERT INTO architects (architectname, nationality, birthdate, description) VALUES ('$architectname', '$nationality', '$birthdate', '$description');";
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
        echo "error, only image files allowed";
    }

    
}
?>