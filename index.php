<?php
    include 'includes/header.php';
?>
<div class= "row main-row">
    <div class="col welcome">
        <img class="abstract-icon" src="images/Website/Home.png" alt="Home Icon" title="Home Icon">
   
        <h1> Welcome </h1>
        <h4> What are you looking for? <h4>
        <div class= "form-group  zoekbar align-self-center">
            <form action="search.php" method="GET" class=" form-group ">
                <input class="form-control " type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-zoek btn-primary" type="submit" name="submit-search">Search</button>
            </form>     
        </div>
    </div>
</div>

<div class="row main-row">

    <div class= " col-md-8 building-container">
        <h2> All Buildings </h2>
        <div class=" row">
            <?php
                $sql_b = "SELECT * FROM buildings;";
                $result_b = mysqli_query($conn, $sql_b);
                $resultCheck_b = mysqli_num_rows($result_b);

                include 'includes/BuildingContainer.php';
            ?>
        </div>
    </div>

    <div class= " col-md-4 ml-auto architect-container">
        <h2> All Architects </h2>
        <div class=" row">
            <?php
                $sql_a = "SELECT * FROM architects;";
                $result_a = mysqli_query($conn, $sql_a);
                $resultCheck_a = mysqli_num_rows($result_a);

                include 'includes/ArchitectContainer.php';
            ?>
        </div>
    </div>
</div>
        
<?php
    include 'includes/footer.php';
?>




