<?php
    include 'includes/header.php';
?>

<div class= "row main-row">
    <div class="col welcome">
        <h1> Search results: </h1>
        <div class= "form-group  zoekbar align-self-center">
            <form action="search.php" method="GET" class=" form-group ">
                <input class="form-control " type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-zoek btn-primary" type="submit" name="submit-search">Search</button>
            </form>     
        </div>
    </div>
</div>

<?php
    if(isset($_GET['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_GET['search']);
    }
?>


<div class="row main-row">

    <div class= " col building-container">
        <div class=" row">
            <?php
                $sql_b = "SELECT * FROM buildings WHERE buildingname LIKE '%$search%' 
                    OR architect LIKE '%$search%' 
                    OR description LIKE '%$search%'
                    OR modelname LIKE '%$search%' ";
                $result_b = mysqli_query($conn, $sql_b);
                $resultCheck_b = mysqli_num_rows($result_b);

                echo "<h2> The term '".$search. "' matches " .$resultCheck_b. " building(s) </h2>";

                include 'includes/BuildingContainer.php';
            ?>
        </div>
    </div>

    <div class= " col-md-4 ml-auto architect-container">
        <?php
            $sql_a = "SELECT * FROM architects WHERE architectname LIKE '%$search%' 
                OR nationality LIKE '%$search%' 
                OR description LIKE '%$search%'
                OR birthdate LIKE '%$search%'
                OR deathdate LIKE '%$search%' ";
            $result_a = mysqli_query($conn, $sql_a);
            $resultCheck_a = mysqli_num_rows($result_a);

            echo "<h2> and " .$resultCheck_a. " architect(s) </h2>";

            include 'includes/ArchitectContainer.php';
        ?>
    </div>
</div>

<?php
    include 'includes/footer.php';
?>
