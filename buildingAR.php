<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Thesis Website</title>

        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <script src="https://kit.fontawesome.com/0400ecf683.js" crossorigin="anonymous"></script>
        <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
        <script src="https://unpkg.com/aframe-orbit-controls@1.0.0/dist/aframe-orbit-controls.min.js"></script>
        <script src="includes/resize.js"></script>

        <!-- include ar.js for A-Frame -->
        <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
    </head>
<body>


    
        <?php

            $title = mysqli_real_escape_string($conn, $_GET['title']);

            $sql = "SELECT * FROM buildings WHERE buildingname ='$title'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
                
            if($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)){
                    echo "
                    <a-scene embedded arjs>
                        <a-assets>
                            <a-asset-item id='model' src='gltf/".$row['modelname']."'>
                        </a-assets>
                        <a-gltf-model id='target' resize='axis:x; value:1.5' position='0 0 0' src='#model'></a-gltf-model>
                        
                        <!-- define a camera which will move according to the marker position -->
                        <a-marker-camera preset='hiro'></a-marker-camera>
                  </a-scene>
                    ";
                }
            }
        ?>
    

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>






