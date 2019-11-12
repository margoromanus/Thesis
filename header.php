<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Thesis Website</title>

        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
        <script src="https://unpkg.com/aframe-orbit-controls@1.0.0/dist/aframe-orbit-controls.min.js"></script> 
        <script src="includes/resize.js"></script>
       
    </head>

        <body>

             <nav class="navbar navbar-expand-sm navbar-light bg-light"> 
                <a href="index.php" class="navbar-brand">Home</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a href="#" class="nav-link">Buildings</a>
                        </li>
                        
                        <li class="nav-item">
                                <form action="search.php" method="GET">
                                        <input type="text" name="search" placeholder= "Search">
                                        <button type="submit" name="submit-search"> Search </button>
                                </form>
                        </li>
                        
                    </ul>
                </div> 
            </nav>



            