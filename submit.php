

<!DOCTYPE html>

<html lang="en">
    <head>
        <title></title>
    </head>

    <body>
        <form action="includes/upload.php" method="POST" enctype="multipart/form-data">
            <p>Building name: </p>
            
            <input type="text" name="buildingName"  >
            <br>
            <p>Architect: </p>
            
            <input type="text" name="architect" >
            <br>
            <p>Short description: </p>
            
            <textarea name="description">enter short description</textarea>
            <br>
            <p>3d model file: </p>
            
            <input type="file" name="file">
            <br>
            <button type="submit" name="submit">UPLOAD</button>
        </form>


    </body>
</html>
    