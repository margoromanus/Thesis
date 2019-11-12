<?php
    include 'header.php';
?>

<h1> Search page</h1>

<div class= "building-container">
<?php
    if(isset($_GET['submit-search'])) {
       $search = mysqli_real_escape_string($conn, $_GET['search']);
       $sql = "SELECT * FROM buildings WHERE buildingname LIKE '%$search%' 
       OR architect LIKE '%$search%' 
       OR description LIKE '%$search%'
       OR modelname LIKE '%$search%' ";
       $result = mysqli_query($conn, $sql);
       $queryResult = mysqli_num_rows($result);

       echo $search. " gave " .$queryResult. " results";

       if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<a href='building.php?title=".$row['buildingname']."'> <div class = 'building-box'>
                    <h3>".$row['buildingname']."</h3>
                    <p>".$row['description']."</p>
                    <p>".$row['architect']."</p>
                </div></a>";
            }
       }
       else{
           echo "No results";
       }

       $search = mysqli_real_escape_string($conn, $_GET['search']);
       $sql = "SELECT * FROM architects WHERE architectname LIKE '%$search%' 
       OR nationality LIKE '%$search%' 
       OR description LIKE '%$search%'
       OR birthdate LIKE '%$search%'
       OR deathdate LIKE '%$search%' ";
       $result = mysqli_query($conn, $sql);
       $queryResult = mysqli_num_rows($result);

       echo $search. " gave " .$queryResult. " results";

       if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class = 'architect-box'>
                <h3>".$row['architectname']."</h3>
                <p>".$row['nationality']."</p>
                <p>".$row['description']."</p>
                        
            </div>";
            }
       }
       else{
           echo "No results";
       }
    }
?>
</div>

<?php
    include 'footer.php';
?>
