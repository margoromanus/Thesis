<?php
    include 'header.php';
?>

    <form action="includes/uploadBuilding.php" class="main-form" method="POST" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="buildingname">Name of the building:</label>
            <input type="text" name="buildingname" id="buildingname" class="form-control">
        </div>

        <div class="form-group">
            <label for="architect">Name of the architect:</label>
            <select name= "architect" id="architect" class="form-control">
                <?php
                    $sql = "SELECT * FROM architects;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)){
                            echo '<option value="'.$row['architectname'].'">'.$row['architectname'].'</option>';
                        }
                    }
                ?>
            </select>
        </div> 
        
        <div class="form-group">
            <label for="adress">Adress of the building:</label>
            <textarea name="buildinglocation" id="adress" class="form-control">adress</textarea>
        </div>
        
        <div class="form-group">
            <label for="description">Short description:</label>
            <textarea name="description" id="description" class="form-control">enter short description</textarea>
        </div>

        <div class="row">
            <div class="col">
                <label for="file">GLTF file:</label>
                <input type="file" name="file" id="file" class="form-control-file">
            </div>
            
            <div class="col">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" name="submit" id="submit" class="form-control">UPLOAD</button>
        </div>
        

    </form>

    <form action="includes/uploadArchitect.php" method="POST" enctype="multipart/form-data">
        <p>Architect name: </p>
        
        <input type="text" name="architectname"  >
        <br>
        <p>Nationality </p>
        
        <input type="text" name="nationality" >
        <br>

        <p>Birthdate: </p>
        <input type="date" name="birthdate" >
        <br>
        <p>Deathdate: </p>
        <input type="date" name="deathdate" >
        <br>

        <p>Short description: </p>
        
        <textarea name="description">enter short description</textarea>
        <br>
        <p>profile image: </p>
        
        <input type="file" name="image">
        <br>
        <button type="submit" name="submit">UPLOAD</button>
    </form>


<?php
    include 'footer.php';
?>
    