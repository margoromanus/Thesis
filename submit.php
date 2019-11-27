<?php
    include 'includes/header.php';
?>
<div class="row form-container">

    <!-- Building form -->

    <div class="col-lg form-group">

        <form action="includes/uploadBuilding.php" class="main-form" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <h2>Submit building</h2>
            </div>
            
            <div class="form-group">
                <label for="buildingname">Name of the building:</label>
                <input type="text" name="buildingname" id="buildingname" class="form-control">
            </div>

            <div class="form-group">
                <label for="architect">Choose architect:</label>
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

            <div class="row form-group">
                <div class="col">
                    <label for="file">GLTF file:</label>
                    <input type="file" name="file" id="file" class="form-control-file">
                </div>
                
                <div class="col">
                    <label for="image">Building image:</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                </div>
            </div>      
            
            <button type="submit" name="submit" class="btn btn-primary">UPLOAD BUILDING</button>
        </form>
    </div>

    <!-- Architect form -->

    <div class="col-lg form-group">
        <form action="includes/uploadArchitect.php" class="main-form" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <h2>Submit architect</h2>
            </div>

            <div class="form-group">
                <label for="architectname">Name of the architect:</label>
                <input type="text" name="architectname" id="architectname" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" name="nationality" id="nationality" class="form-control">
            </div>
            
            <div class="row form-group">
                <div class="col">
                    <label for="birthdate">Date of birth:</label>
                    <input type="date" name="birthdate" id="birthdate" class="form-control">
                </div>
                
                <div class="col">
                    <label for="deathdate">Date of death:</label>
                    <input type="date" name="deathdate" id="deathdate" class="form-control">
                </div>
            </div>
            
            <div class="form-group">
                <label for="description">Short description:</label>
                <textarea name="description" id="description" class="form-control">enter short description</textarea>
            </div>
            
            <div class="form-group">
                <label for="image">Architect image:</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">UPLOAD ARCHITECT</button>
        </form>
    </div>

</div>

<?php
    include 'includes/footer.php';
?>
    