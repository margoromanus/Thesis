<?php
    $sql = "SELECT * FROM buildings;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
        
    if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo "<a href='building.php?title=".$row['buildingname']."'> <div class = 'building-box'>
            <h3>".$row['buildingname']."</h3>
            <p>".$row['description']."</p>
            <p>".$row['architect']."</p>
            </div> </a> <br>"
            ;
        }
    }
?>