<?php
    include 'includes/header.php';
?>
<div class="row main-row">
    
    <div class="col welcome">
        <h1> All Buildings </h1>
    </div>
</div>

<div class="row main-row building-container">
    
        <?php
            $sql_b = "SELECT * FROM buildings;";
            $result_b = mysqli_query($conn, $sql_b);
            $resultCheck_b = mysqli_num_rows($result_b);

            include 'includes/BuildingContainer.php';
        ?>
    
</div>
        
<?php
    include 'includes/footer.php';
?>




