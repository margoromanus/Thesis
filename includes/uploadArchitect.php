<?php

include_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
    $imagefile = $_FILES['image'];
    $architectname = $_POST['architectname'];
    $nationality = $_POST['nationality'];
    $birthdate = $_POST['birthdate'];
    $deathdate = $_POST['deathdate'];
    $description = $_POST['description'];

    $imageName = $imagefile['name'];
    $imageTmpName = $imagefile['tmp_name'];
    $imageSize = $imagefile['size'];
    $imageError = $imagefile['error'];
    $imageType = $imagefile['type'];

    $imageExt = explode('.', $imageName);
    $imageActualExt = strtolower(end($imageExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'PNG', 'JPEG', 'JPG');

    if (in_array($imageActualExt, $allowed)){
        if($imageError === 0){
            if($imageSize < 50000000){
                $imageNameNew = "arch ".$architectname.".".$imageActualExt;

                $imageDestination = '../archimages/'.$imageNameNew;
                move_uploaded_file($imageTmpName, $imageDestination);
                echo "succes";
                $sql = "INSERT INTO architects (architectname, nationality, birthdate, deathdate, description, imagename) VALUES ('$architectname', '$nationality', '$birthdate', '$description', '$imageNameNew');";
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