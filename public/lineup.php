<?php require 'header.php';?>   
<?php include '../src/databaseFunctions.php';?>

<?php
    // Create connection
    $lineup = db_getData("SELECT * FROM lineup");
?>

    <div class="page lineup">
        <div class="container">
            <h1>Line-up</h1>
            <div class="artists">

            <?php
              while ($artist = mysqli_fetch_assoc($lineup)) 
              {
                echo '<div class="artist"> <img src="' . IMAGE_FOLDER . "/" . $artist['artistImage'] . '" alt="">
                <h2>' . $artist['artistName'] . '</h2>
                </div>';
              }
            ?>

            </div>
        </div>
    </div>
<?php include 'footer.php';?>