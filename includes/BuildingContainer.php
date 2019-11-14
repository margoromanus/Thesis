<?php

    if($resultCheck_b > 0) {
        while ($row_b = mysqli_fetch_assoc($result_b)){
            echo "
            
            <a href='building.php?title=".$row_b['buildingname']."'> 
                <div class = ' row rounded border building-box'>

                    <div class='col-sm-5'>
                        <img class='img-fluid rounded' src='images/buildings/".$row_b['imagename']."' alt='A photo of ".$row_b['buildingname']."' title='".$row_b['buildingname']."'/>
                    </div>

                    <div class='col-sm-7'>
                        <h3>".$row_b['buildingname']."</h3>
                        <p>".$row_b['architect']."</p>
                    </div>
                </div> 
            </a> 
            <br>
            
            ";
        }
    }
?>
