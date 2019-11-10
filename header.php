<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Thesis Website</title>

        <link rel="stylesheet" href="style.css">
        <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
        <script src="https://unpkg.com/aframe-orbit-controls@1.0.0/dist/aframe-orbit-controls.min.js"></script> 
        <script src="includes/resize.js"></script>
       
    </head>

    <body>
        <form>
            <input type = "button" value="Home" onclick="window.location.href='index.php'"/>
        </form>