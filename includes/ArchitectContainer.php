<?php
       
    if($resultCheck_a > 0) {
        while ($row_a = mysqli_fetch_assoc($result_a)){
            echo "
            
            <a href='architect.php?title=".$row_a['architectname']."'> 
                <div class = ' row architect-box border rounded'>
                    <div class='col-lg-5 col-sm-5 col-md-12'>
                        <img class='img-fluid rounded-circle' src='images/architects/".$row_a['imagename']."' alt='A photo of ".$row_a['architectname']."' title='".$row_a['architectname']."'/>
                    </div>

                    <div class='col-lg-7 col-sm-7 col-md-12'>
                        <h3>".$row_a['architectname']."</h3>
                        <p>".$row_a['nationality']."</p>
                    </div>
                    
                </div> 
            </a>
            
            ";
        }
    }

    else{
        echo "<h3>no results</h3>";
    }
?>