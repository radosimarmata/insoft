<?php

$connect = mysqli_connect("localhost","root","","insoft");

if (mysqli_connect_errno()){
    echo "Connection DB Failed!! : " .mysqli_connect_error();
}
?>