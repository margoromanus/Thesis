<?php
    include 'header.php';
?>

        <form action="includes/uploadBuilding.php" method="POST" enctype="multipart/form-data">
            <p>Building name: </p>
            
            <input type="text" name="buildingname"  >
            <br>
            <p>Architect: (If not in the list, please make a new one)</p>

            <select name= "architect">
            <?php
            $sql = "SELECT * FROM architects;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<option value=".$row['architectname']."> ".$row['architectname']." </option>"
                    ;
                }
            }
            ?>
            </select>
            
            <br>
            <p>Adress: </p>
            
            <textarea name="buildinglocation">adress</textarea>
            <br>
            <p>Short description: </p>
            
            <textarea name="description">enter short description</textarea>
            <br>
            <p>3d model file: </p>
            
            <input type="file" name="file">
            <br>
            <p>Image file: </p>
            
            <input type="file" name="image">
            <br>
            <button type="submit" name="submit">UPLOAD</button>
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


    </body>
</html>
    