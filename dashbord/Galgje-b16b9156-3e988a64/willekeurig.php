<?php
session_start();
?>
<!DOCTYPE html>
<html>

<link rel="stylesheet" href="css/style.css">
<link href="img/icon.png" rel="icon" type="img/icon.png" />

<head>
    <title>Galgje | Willekeurig</title>
</head>

<body>
    <div class="head">
        <h1>Galgje</h1>
    </div>
    
    <div class="text">
        <h3>Je hebt gekozen voor een willekeurig woord!</h3>
    </div>
    <?php
    $randomwoorden = array(
    "academy",
    "system",
    "grip",
    "shake",
    "attack",
    "number",
    "angle",
    "orange",
    "tacky",
    "rely",
    "jar",
    "touch",
    "train",
    "array",
    "random"
    );
    $kiezen = array_rand($randomwoorden);
    setcookie('woord' , $randomwoorden [$kiezen]);
    ?>
    <div class="button">
        <form>
            <button class="startbutton" type="submit" formaction="galgspel.php">Start Willekeurig</button>
        </form>
    </div>
    <div class="img">
        <img src="img/END.png" alt="Galgje" />
    </div>
</body>

</html>