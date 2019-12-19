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

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0400ecf683.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aframe-orbit-controls@1.0.0/dist/aframe-orbit-controls.min.js"></script>
 
</head>

<body>

    <?php

        $title = mysqli_real_escape_string($conn, $_GET['title']);

        $sql_b = "SELECT * FROM buildings WHERE buildingname ='$title'";
        $result_b = mysqli_query($conn, $sql_b);
        $resultCheck_b = mysqli_num_rows($result_b);
        
        if($resultCheck_b > 0) {
            while ($row_b = mysqli_fetch_assoc($result_b)){
                echo "
                <a-scene embedded arjs class ='row main-row'>
                    <a-marker preset='hiro'>
                        <a-gltf-model id='target' resize='axis:x; value:1.5' position='0 0 0' src='gltf/".$row_b['modelname']."'></a-gltf-model>
                    </a-marker>
                    <a-entity camera> </a-entity>
                </a-scene>

                <div class='col overlay'>
                    <a href='building.php?title=".$row_b['buildingname']."'> 
                        <div class = ' row rounded border building-box'>
                            <div class='col-sm-5'>
                                <img class='img-fluid rounded' src='images/buildings/".$row_b['imagename']."' alt='A photo of ".$row_b['buildingname']."' title='".$row_b['buildingname']."'/>
                            </div>

                            <div class='col-sm-7'>
                                <h3>".$row_b['buildingname']."</h3>
                                <p>".$row_b['architect']."</p>
                            </div>
                        </div> 
                    </a> 
                </div>
            
                ";  
                include 'includes/qrcodereader.php';  
            }
        }

       
        
    ?>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>






