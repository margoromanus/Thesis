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
                    
                    <div class= ' row main-row building-container justify-content-between '>
                        <div class = ' col-md-7 viewer3d '>
                            <div class='  slide-container'>
                                <h4> Section plane position: <h4>
                                <input type='range' min='-150' max='150' value='150' class='slider' id='myRange'>    
                            </div>
                            
                                <a-scene renderer= 'antialias: auto; colorManagement: true;' class = ' border rounded ' embedded>
                                    <a-assets>
                                        <a-asset-item id='model' src='gltf/".$row['modelname']."'>
                                    </a-assets>
                                    <a-entity camera look-controls orbit-controls='target: 0 0 0; fov: 20; autoRotate: true; autoRotateSpeed: 0.1; minDistance: 0.5; maxDistance: 2; initialPosition: 0 0.5 -1.5; screenSpacePanning: true'>
                                    </a-entity>
                                    
                                    <a-entity id='clippingplane' clippingcontrol='normal:  1 0 0; constant: 2'></a-entity>
                                    <a-entity light='type: directional; castShadow:true; color: #ccc; intensity: 1;' position='1 1 1' ></a-entity>
                                    <a-entity light=' type: ambient; color: #aaa'></a-entity>
                                    <a-gltf-model id='target' shadow='receive: false' resize='axis:x; value:1.6' position='0 0 0' src='#model'></a-gltf-model>   
                                </a-scene>
                            
                        </div>

                        <div class = ' col-md-4 '>
                            <h2 id='buildingnameQR'>".$row['buildingname']."</h2>
                            <p>".$row['description']."</p>
                            
                            <button type='button' class='btn btn-primary' onclick=\"window.location.href = 'buildingAR.php?title=".$row['buildingname']."';\">View in AR</button>
                            
                            
                            <h3>Architect:</h3>
                            "; 
                              
                            
                            $sql_a = "SELECT * FROM architects WHERE architectname = '$row[architect]'";
                            $result_a = mysqli_query($conn, $sql_a);
                            $resultCheck_a = mysqli_num_rows($result_a);
                                include 'includes/ArchitectContainer.php'; 

                               

                            echo "
                            
                            <h3>Location:</h3>

                            <iframe 
                                class='location border rounded'
                                width='100%'
                                height='300'
                                frameborder='0' style='border:0'
                                src='https://www.google.com/maps/embed/v1/place?key=AIzaSyDOYAyjb8h8gw-6ukhykDcgmKQVgOZ84Kw
                                    &q=".$row['buildinglocation']."' allowfullscreen>
                            </iframe>
                            
                            
                            <h3>Marker:</h3>
               
                            <div width='100%'
                            height='300' id='arcode-container' ></div> 
                            
                            <button type='button' onclick='generatePdf()' class='btn btn-primary' title='Generate a PDF instruction page'>Download Pdf</button>

                            
                            <!--Import jQuery before materialize.js-->
                            <script type='text/javascript' src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
                            <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js'></script>

                            <script type='text/javascript'>
                            $(document).ready(function() {
                                Materialize.updateTextFields();
                            });
                            </script>

                            <script src='includes/QRgenerator.js'></script>
                        </div>
                    </div>
                ";
            }
        }
    ?>


<?php
    include 'includes/footer.php';
?>




