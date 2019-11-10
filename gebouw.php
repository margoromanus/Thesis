<?php
    include 'header.php';
?>

<h1> Gebouw page</h1>
        
<div class= "gebouw-container">
    <?php

        $title = mysqli_real_escape_string($conn, $_GET['title']);

        $sql = "SELECT * FROM gebouwen WHERE gebouwnaam ='$title'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            
        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<div class = 'gebouw-box'>
                    <h3>".$row['gebouwnaam']."</h3>
                    <p>".$row['beschrijving']."</p>
                    <p>".$row['architect']."</p>
                            
                </div>

                <a-scene class = 'viewer' embedded>
                    <a-assets>
                        <a-asset-item id='model' src='gltf/".$row['modelnaam']."'>
                    </a-assets>
                    <a-entity camera look-controls orbit-controls='target: 0 0 0; minDistance: 0.5; maxDistance: 2; initialPosition: 0 1 1'>
                        <a-entity light='type: directional; castShadow: true; 
                        shadowCameraBottom: -0.5;
                        shadowCameraFar: 4;
                        shadowCameraLeft: -0.5;
                        shadowCameraNear: 1;
                        shadowCameraRight: 0.5;
                        shadowCameraTop: 0.5;
                        shadowCameraVisible: false; 
                        color: #fff; intensity: 2' position='1 1 1'></a-entity>
                    </a-entity>

                    <a-light type='ambient' color='#666'></a-light>
                    
                    <a-gltf-model id='target' resize='axis:x; value:1' position='0 0 0' shadow='cast: true' src='#model'></a-gltf-model>
                </a-scene>";
            }
        }
    ?>
</div>

<?php
    include 'footer.php';
?>




