<?php
    include 'includes/header.php';
?>
<div class="row main-row">
    
    <div class="col welcome">
        <h1> All Architects </h1>
    </div>
</div>

<div class="row main-row architect-container">


        <?php
            $sql_a = "SELECT * FROM architects;";
            $result_a = mysqli_query($conn, $sql_a);
            $resultCheck_a = mysqli_num_rows($result_a);

            include 'includes/ArchitectContainer.php';
        ?>
    
</div>
        
<?php
    include 'includes/footer.php';
?>




