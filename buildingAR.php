<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>jsQR Demo</title>
  <script src="includes/jsQR.js"></script>
  <!-- include A-Frame obviously -->
  <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
  <!-- include ar.js for A-Frame -->
  <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  <script src="includes/resize.js"></script>

  
  
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
                    <a-marker preset='hiro'>
                        <a-gltf-model id='target' resize='axis:x; value:1.5' position='0 0 0' src='gltf/".$row['modelname']."'></a-gltf-model>
                    </a-marker>

                    <a-entity camera> </a-entity>
                </a-scene>
                ";
            }
        }

        include 'includes/qrcodereader.php';
    ?>
    

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>






