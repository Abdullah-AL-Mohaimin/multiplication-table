<?php
//5*1=5
$input =$_POST['number'];
for($i = 1; $i <= 10; $i++){
    $result = $input * $i;
    echo $input." x ".$i."=".$result."<br>";
}
?>