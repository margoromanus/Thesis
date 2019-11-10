<?php
    include 'header.php';
?>

<form action="search.php" method="GET">
    <input type="text" name="search" placeholder= "Search">
    <button type="submit" name="submit-search"> Search </button>
</form>

<h1> Front page</h1>

<h2> All Buildings </h2>

<div class= "building-container">
    <?php
        $sql = "SELECT * FROM buildings;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            
        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<a href='building.php?title=".$row['buildingname']."'> <div class = 'building-box'>
                    <h3>".$row['buildingname']."</h3>
                    <p>".$row['description']."</p>
                    <p>".$row['architect']."</p>
                </div> </a>";
            }
        }
    ?>
</div>

<h2> All Architects </h2>

<div class= "architect-container">
    <?php
        $sql = "SELECT * FROM architects;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            
        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<a href='architect.php?title=".$row['architectname']."'> <div class = 'architect-box'>
                    <h3>".$row['architectname']."</h3>
                    <p>".$row['nationality']."</p>
                    <p>".$row['description']."</p>
                </div> </a>";
            }
        }
    ?>
</div>

        
<?php
    include 'footer.php';
?>




