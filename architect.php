<?php
    include 'header.php';
?>

<h1> architect page</h1>
        
<div class= "architect-container">
    <?php

        $title = mysqli_real_escape_string($conn, $_GET['title']);

        $sql = "SELECT * FROM architects WHERE architectname ='$title'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            
        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<div class = 'architect-box'>
                    <h3>".$row['architectname']."</h3>
                    <p>".$row['nationality']."</p>
                    <p>".$row['description']."</p>
                            
                </div>";
            }
        }
    ?>
</div>

<div class= "building-container">
    <?php
        $sql = "SELECT * FROM buildings WHERE architect ='$title'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            
        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<a href='building.php?title=".$row['buildingname']."'> <div class = 'building-box'>
                    <h3>".$row['buildingname']."</h3>
                    <p>".$row['description']."</p>
                    <p>".$row['architect']."</p>
                </div>";
            }
        }
    ?>
</div>

<?php
    include 'footer.php';
?>




