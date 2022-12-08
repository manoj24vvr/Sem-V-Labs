<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Count</title>
    <link rel="stylesheet" href="css/Exer1.css">
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
  
  session_start();
  if(isset($_SESSION['views']))
      $_SESSION['views'] = $_SESSION['views']+1;
  else
      $_SESSION['views']=1;
    
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
    <div class="container" style="top: 50%;"><p class="message"><?php echo"views = ".$_SESSION['views'];?></p></div>
</body>
</html>