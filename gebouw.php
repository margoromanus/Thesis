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
                                <a-asset-item id='scene' src='gltf/".$row['modelnaam']."'>
                            </a-assets>
                    
                            <a-gltf-model position='0 0 -4' scale='0.0006 0.0006 0.0006 'src='#scene'></a-gltf-model>
                            <a-plane position='0 0 -4' rotation='-90 0 0' width='4' height='4' color='#7BC8A4' shadow></a-plane>
                        </a-scene>";
                    }
                }
            ?>
        </div>
        
    </body>
</html>




