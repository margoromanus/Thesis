<?php
    include 'header.php';
?>


    <?php

        $title = mysqli_real_escape_string($conn, $_GET['title']);

        $sql = "SELECT * FROM buildings WHERE buildingname ='$title'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            
        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "
                    
                    <div class= ' row building-container'>
                        <a-scene class = ' col-sm-7 viewer3d border rounded' embedded>
                            <a-assets>
                                <a-asset-item id='model' src='gltf/".$row['modelname']."'>
                            </a-assets>
                            <a-entity camera look-controls orbit-controls='target: 0 0 0; minDistance: 0.5; maxDistance: 2; initialPosition: 0 1 1'>
                            </a-entity>
                            
                            <a-sky color='#eeeeee'></a-sky>
                            <a-light type='ambient' intensity='0.7'></a-light>
                            <a-entity light='type: directional; castShadow:false; color: #fff; intensity: 0.5' position='1 1 1' ></a-entity>
                            <a-gltf-model id='target' resize='axis:x; value:1.5' position='0 0 0' src='#model'></a-gltf-model>   
                        </a-scene>

                        <div class = ' col-sm-4 '>
                            <h3>".$row['buildingname']."</h3>
                            <p>".$row['description']."</p>
                            <h4>Architect:</h4>
                            <a href='architect.php?title=".$row['architect']."'>
                                <p>".$row['architect']."</p>
                            </a>

                            <iframe
                                width='100%'
                                height='300'
                                frameborder='0' style='border:0'
                                src='https://www.google.com/maps/embed/v1/place?key=AIzaSyDOYAyjb8h8gw-6ukhykDcgmKQVgOZ84Kw
                                    &q=".$row['buildinglocation']."' allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                ";
            }
        }
    ?>


<?php
    include 'footer.php';
?>




