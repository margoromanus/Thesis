<?php

include_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $imagefile = $_FILES['image'];

    $buildingname = $_POST['buildingname'];
    $architect = $_POST['architect'];
    $description = $_POST['description'];
    $buildinglocation = $_POST['buildinglocation'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $imageName = $imagefile['name'];
    $imageTmpName = $imagefile['tmp_name'];
    $imageSize = $imagefile['size'];
    $imageError = $imagefile['error'];
    $imageType = $imagefile['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $imageExt = explode('.', $imageName);
    $imageActualExt = strtolower(end($imageExt));

    $fileAllowed = array('gltf', 'glb');
    $imageAllowed = array('png', 'jpg', 'jpeg', 'pdf');

    if (in_array($fileActualExt, $fileAllowed)){
        if($fileError === 0){
            if($fileSize < 50000000){

                if (in_array($imageActualExt, $imageAllowed)){
                    if($imageError === 0){
                        if($imageSize < 50000000){
            
                            
                            $fileNameNew = $buildingname.".".$fileActualExt;
                            $imageNameNew = $buildingname.".".$imageActualExt;
            
                            $fileDestination = '../gltf/'.$fileNameNew;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            echo " file succes";

                            $imageDestination = '../images/'.$imageNameNew;
                            move_uploaded_file($imageTmpName, $imageDestination);
                            echo " image succes".$buildingname .$architect .$fileNameNew .$imageNameNew .$description .$buildinglocation;

                            $sql = "INSERT INTO buildings (buildingname, architect, modelname, imagename, description, buildinglocation) VALUES ('$buildingname', '$architect', '$fileNameNew', '$imageNameNew', '$description', '$buildinglocation');";
                            mysqli_query($conn, $sql);
                            //header("Location: ../index.php?uploadsuccess");
                        }
                        else{
                            echo "image must be below 50 Mb";
                        }
                    }
                    else{
                        echo "unknown error with image";
                    }
                }
                else{
                    echo "error, only .png, .jpg, .jpeg & .pdf files allowed";
                }
            }
            else{
                echo "file must be below 50 Mb";
            }
        }
        else{
            echo "unknown error with model";
        }
    }
    else{
        echo "error, only .gltf & .glb files allowed";
    }

    
}
?>