<?php
    include 'header.php';
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
                        <p>".$row['description']."</p>
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
        $sql = "SELECT * FROM buildings WHERE architect ='$title'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            
        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "  <a href='building.php?title=".$row['buildingname']."'> 
                <div class = ' row rounded border building-box'>

                    <div class='col-sm-5'>
                        <img class='img-fluid rounded' src='images/buildings/".$row['imagename']."' alt='A photo of ".$row['buildingname']."' title='".$row['buildingname']."'/>
                    </div>

                    <div class='col-sm-7'>
                        <h3>".$row['buildingname']."</h3>
                        <p>".$row['architect']."</p>
                    </div>
                </div> 
            </a> 
            <br>";
            }
        }
    ?>
</div>

<?php
    include 'footer.php';
?>




