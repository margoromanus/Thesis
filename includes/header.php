<?php
    include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Thesis Website</title>

        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Roboto&display=swap">
        <link rel="stylesheet" href="https://indestructibletype.com/fonts/Jost.css" type="text/css" charset="utf-8" />
        <script src="https://kit.fontawesome.com/0400ecf683.js" crossorigin="anonymous"></script>
        <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
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
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a href="about.php" class="nav-link">About</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="buildings.php" class="nav-link">Buildings</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="architects.php" class="nav-link">Architects</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="AR.php" class="nav-link">Camera</a>
                        </li>
                    </ul>


                    <form action="search.php" method="GET" class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary" type="submit" name="submit-search">Search</button>
                    </form>
                </div> 
            </nav>



            