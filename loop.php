<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="loop.php"  method="post">
        <input type="number" name="number" placeholder="Enter your number">
    </form>
    
    <?php
     //5*1=5
     if(isset($_POST['number'])){
        global $input;
        $input =$_POST['number'];
        for($i = 1; $i <= 10; $i++){
         $result = $input * $i;
         echo $input." x ".$i."=".$result."<br>";
        }
     }
     
    ?>
</body>
</html>