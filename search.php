<?php
    include 'header.php';
?>

<h1> Search page</h1>

<div class= "building-container">
<?php
    if(isset($_GET['submit-search'])) {
       $search = mysqli_real_escape_string($conn, $_GET['search']);
       $sql_b = "SELECT * FROM buildings WHERE buildingname LIKE '%$search%' 
       OR architect LIKE '%$search%' 
       OR description LIKE '%$search%'
       OR modelname LIKE '%$search%' ";
       $result_b = mysqli_query($conn, $sql_b);
       $resultCheck_b = mysqli_num_rows($result_b);

       echo " The term: ".$search. " gave " .$resultCheck_b. " building(s)";

       include 'includes/BuildingContainer.php';

       
       $search = mysqli_real_escape_string($conn, $_GET['search']);
       $sql_a = "SELECT * FROM architects WHERE architectname LIKE '%$search%' 
       OR nationality LIKE '%$search%' 
       OR description LIKE '%$search%'
       OR birthdate LIKE '%$search%'
       OR deathdate LIKE '%$search%' ";
       $result_a = mysqli_query($conn, $sql_a);
       $resultCheck_a = mysqli_num_rows($result_a);

       echo " The term: ".$search. " gave " .$resultCheck_a. " architect(s)";

       include 'includes/ArchitectContainer.php';
    }
?>
</div>

<?php
    include 'footer.php';
?>
