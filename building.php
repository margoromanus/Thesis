<?php
    include 'includes/header.php';
?>


    <?php

        $title = mysqli_real_escape_string($conn, $_GET['title']);

        $sql_b = "SELECT * FROM buildings WHERE buildingname ='$title'";
        $result_b = mysqli_query($conn, $sql_b);
        $resultCheck_b = mysqli_num_rows($result_b);
            
        if($resultCheck_b > 0) {
            while ($row = mysqli_fetch_assoc($result_b)){
                echo "
                    
                    <div class= ' row building-container justify-content-between '>
                        <a-scene class = ' col-md-7  col viewer3d border rounded ' embedded>
                            <a-assets>
                                <a-asset-item id='model' src='gltf/".$row['modelname']."'>
                            </a-assets>
                            <a-entity camera look-controls orbit-controls='target: 0 0 0; fov: 20; autoRotate: true; autoRotateSpeed: 0.1; minDistance: 0.5; maxDistance: 2; initialPosition: 0 0.5 1.5'>
                            </a-entity>
                            
                            <a-sky color='#eeeeee'></a-sky>
                            <a-light type='ambient' intensity='0.7'></a-light>
                            <a-entity light='type: directional; castShadow:false; color: #fff; intensity: 0.5' position='1 1 1' ></a-entity>
                            <a-gltf-model id='target' resize='axis:x; value:1.6' position='0 0 0' src='#model'></a-gltf-model>   
                        </a-scene>

                        <div class = ' col-md-4  '>
                            <h3>".$row['buildingname']."</h3>
                            <p>".$row['description']."</p>
                            <a href='buildingAR.php?title=".$row['buildingname']."'>View in AR</a>
                            
                            
                            <h4>Architect:</h4>
                            "; 
                              
                            
                            $sql_a = "SELECT * FROM architects WHERE architectname = '$row[architect]'";
                            $result_a = mysqli_query($conn, $sql_a);
                            $resultCheck_a = mysqli_num_rows($result_a);
                                include 'includes/ArchitectContainer.php'; 

                               

                            echo "
                            
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
    include 'includes/footer.php';
?>




