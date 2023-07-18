<?php
$con = mysqli_connect('localhost', 'root', '', 'shorturl');

if(isset($_GET['l'])){
    $l = mysqli_real_escape_string ($con,$_GET['l']);
    $res = mysqli_query($con,"select link from shorturrl where short_link = '$l'");
    $count = mysqli_num_rows($res);
    echo $count;



}

?>