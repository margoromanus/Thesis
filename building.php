<?php
    include 'header.php';
?>

<h1> Gebouw page</h1>
        
<div class= "building-container">
    <?php

        $title = mysqli_real_escape_string($conn, $_GET['title']);

        $sql = "SELECT * FROM buildings WHERE buildingname ='$title'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            
        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<div class = 'building-box'>
                    <h3>".$row['buildingname']."</h3>
                    <p>".$row['description']."</p>
                    <p>".$row['architect']."</p>
                            
                </div>

                <a-scene class = 'viewer' embedded>
                    <a-assets>
                        <a-asset-item id='model' src='gltf/".$row['modelname']."'>
                    </a-assets>
                    <a-entity camera look-controls orbit-controls='target: 0 0 0; minDistance: 0.5; maxDistance: 2; initialPosition: 0 1 1'>
                       
                    </a-entity>

                    <a-light type='ambient' intensity='0.8'></a-light>
                    <a-entity light='type: directional; castShadow: true; 
                        shadowCameraBottom: -0.5;
                        shadowCameraFar: 4;
                        shadowCameraLeft: -0.5;
                        shadowCameraNear: 1;
                        shadowCameraRight: 0.5;
                        shadowCameraTop: 0.5;
                        shadowCameraVisible: false; 
                        color: #fff; intensity: 2' position='1 1 1'></a-entity>
                    <a-gltf-model id='target' resize='axis:x; value:1' position='0 0 0' src='#model' ></a-gltf-model>
                    
                </a-scene>";
            }
        }
    ?>
</div>

<?php
    include 'footer.php';
?>




