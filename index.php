<?php
    include 'includes/header.php';
?>

<div class="row main-row">

    <div class= " col-md-7 building-container">
        <h2> All Buildings </h2>

        <?php
            $sql_b = "SELECT * FROM buildings;";
            $result_b = mysqli_query($conn, $sql_b);
            $resultCheck_b = mysqli_num_rows($result_b);

            include 'includes/BuildingContainer.php';
        ?>
    </div>

    <div class= " col-md-4 ml-auto architect-container">
        <h2> All Architects </h2>

        <?php
            $sql_a = "SELECT * FROM architects;";
            $result_a = mysqli_query($conn, $sql_a);
            $resultCheck_a = mysqli_num_rows($result_a);

            include 'includes/ArchitectContainer.php';
        ?>
    </div>
</div>
        
<?php
    include 'includes/footer.php';
?>




