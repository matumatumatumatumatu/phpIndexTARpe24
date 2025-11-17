<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Martten PHP-tööde leht</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="js/JoonisScript.js"></script>
    <script src="js/KalkulaatorScript.js"></script>
</head>
<body>
<?php
//päis
include("header.php");
?>
<?php
//navigeerimismenüü
include("nav.php");
?>

    <div class="flex-container">
        <div>
            <?php
            //sisu - laetakse content kaustast
            if(isset($_GET["leht"])){
                include('content/'.$_GET["leht"]);
            }
            else{
                include('content/kodu.php');
            }
            ?>
        </div>
        <div><strong>PHP -</strong> serveripoolne keel</div>
        <div>
            <img src="phpPilt.png" alt="PHP pilt">
        </div>
    </div>




<?php
//jalus
include("footer.php");
?>
</body>
</html>