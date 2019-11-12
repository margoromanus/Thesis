<?php
    include 'header.php';
?>

<div class="row main-row">

<div class= " col-md-7 building-container">
<h2> All Buildings </h2>
    <?php
        $sql = "SELECT * FROM buildings;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            
        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "
                
                <a href='building.php?title=".$row['buildingname']."'> 
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
                <br>
                
                ";
            }
        }
    ?>
</div>



<div class= " col-md-4 ml-auto architect-container">
<h2> All Architects </h2>
    <?php
        $sql = "SELECT * FROM architects;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            
        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "
                
                <a href='architect.php?title=".$row['architectname']."'> 
                    <div class = ' row architect-box border rounded'>
                        <div class='col-lg-5'>
                            <img class='img-fluid rounded-circle' src='images/architects/".$row['imagename']."' alt='A photo of ".$row['architectname']."' title='".$row['architectname']."'/>
                        </div>

                        <div class='col-lg-7'>
                            <h3>".$row['architectname']."</h3>
                            <p>".$row['nationality']."</p>
                        </div>
                        
                    </div> 
                </a>
                <br>
                ";
            }
        }
    ?>
</div>
    </div>
        
<?php
    include 'footer.php';
?>




