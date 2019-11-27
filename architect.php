<?php
    include 'includes/header.php';
?>
        
<div class= "architect-container">
    <?php

        $title = mysqli_real_escape_string($conn, $_GET['title']);

        $sql = "SELECT * FROM architects WHERE architectname ='$title'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            
        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo " 
                
                <div class = ' row architect-box border rounded'>
                    <div class='col-md-3'>
                        <img class='img-fluid rounded-circle' src='images/architects/".$row['imagename']."' alt='A photo of ".$row['architectname']."' title='".$row['architectname']."'/>
                    </div>

                    <div class='col-md-9'>

                        <h3>".$row['architectname']."</h3>
                        <p>".$row['nationality']."</p>
                        <p>°".$row['birthdate']." / †".$row['deathdate']."</p>
                        <p>".$row['description']."</p
                    </div>
                    
                </div> 
            
            <br>";
            }
        }
    ?>
</div>

<div class= "building-container">
    <h2>Works:</h2>
    <?php
        $sql_b = "SELECT * FROM buildings WHERE architect ='$title'";
        $result_b = mysqli_query($conn, $sql_b);
        $resultCheck_b = mysqli_num_rows($result_b);
            
        include 'includes/BuildingContainer.php';
    ?>
</div>

<?php
    include 'includes/footer.php';
?>




