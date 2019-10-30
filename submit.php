

<!DOCTYPE html>

<html lang="en">
    <head>
        <title></title>
    </head>

    <body>
        <form action="includes/upload.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="buildingName" >
            <br>
            <input type="text" name="architect" >
            <br>
            <textarea name="description">enter short discription</textarea>
            <br>
            <input type="file" name="file">
            <br>
            <button type="submit" name="submit">UPLOAD</button>
        </form>


    </body>
</html>
    