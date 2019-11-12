<?php
    include 'header.php';
?>

<h1> AR</h1>
        
<div class= "building-container">
    <?php

        $title = mysqli_real_escape_string($conn, $_GET['title']);

        $sql = "SELECT * FROM buildings WHERE buildingname ='$title'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            
        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<a-scene embedded arjs>
                <a-marker preset='hiro'>
                    <a-box position='0 0.5 0' material='color: yellow;'></a-box>
                </a-marker>
                <a-entity camera></a-entity>
            </a-scene>";
            }
        }
    ?>
</div>

<?php
    include 'footer.php';
?>




