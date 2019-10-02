<?php
    include 'header.php';
?>

<h1> Search page</h1>

<div class= "gebouw-container">
<?php
    if(isset($_GET['submit-search'])) {
       $search = mysqli_real_escape_string($conn, $_GET['search']);
       $sql = "SELECT * FROM gebouwen WHERE gebouwnaam LIKE '%$search%' 
       OR architect LIKE '%$search%' 
       OR beschrijving LIKE '%$search%'
       OR modelnaam LIKE '%$search%' ";
       $result = mysqli_query($conn, $sql);
       $queryResult = mysqli_num_rows($result);

       echo $search. " gave " .$queryResult. " results";

       if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<a href='gebouw.php?title=".$row['gebouwnaam']."'> <div class = 'gebouw-box'>
                    <h3>".$row['gebouwnaam']."</h3>
                    <p>".$row['beschrijving']."</p>
                    <p>".$row['architect']."</p>
                </div></a>";
            }
       }
       else{
           echo "No results";
       }
    }
?>
</div>

</body>
</html>
