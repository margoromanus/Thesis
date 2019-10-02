<?php
    include 'header.php';
?>

        <form action="search.php" method="GET">
            <input type="text" name="search" placeholder= "Search">
            <button type="submit" name="submit-search"> Search </button>
        </form>

        <h1> Front page</h1>
        <h2> All Buildings </h2>


        <div class= "gebouw-container">
            <?php
                $sql = "SELECT * FROM gebouwen;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
            
                if($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<a href='gebouw.php?title=".$row['gebouwnaam']."'> <div class = 'gebouw-box'>
                            <h3>".$row['gebouwnaam']."</h3>
                            <p>".$row['beschrijving']."</p>
                            <p>".$row['architect']."</p>
                        </div>";
                    }
                }
            ?>
        </div>
        
    </body>
</html>




