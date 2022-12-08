<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Visit</title>
    <link rel="stylesheet" href="css/Exer1.css">
    <link rel="POST" href="php/Exer1.php">
    <style>
        p.message{
        position: absolute;
        font-size: 2em;
        color: darkblue;
        width: 100%;
        height: 40px;
    }
    </style>
</head>
<body>
<?php
    // Expiry time set to one month
    $exptime = 60 * 60 * 24 * 30 + time();
    setcookie('lastVisit', date("G:i - m/d/y"), $exptime);
    
    
?>
    <div class="container">
        <form action="?" method="POST" enctype="multipart/form-data">
            <div class="entry">
                <label for="resume" style="font-size: 1.5rem;color:brown;">Enter your thoughts</label>
                <input type="text" name="resume"/>
            </div>
            <input type="submit" class="submit" name="upload"/>
        </form>
    </div>
    <?php
    if(isset($_COOKIE['lastVisit'])){
        $visit = $_COOKIE['lastVisit'];
    ?>
    <div class="container" style="top: 50%;"><p class="message"><?php echo "Your last visit was - ". $visit;?></p></div>
    <?php
    }
    else{
    ?>
    <div class="container" style="top: 50%;"><p class="message"><?php echo "You have not visited this website before!";?></p></div>
    <?php
    }
    ?>
</body>
</html>