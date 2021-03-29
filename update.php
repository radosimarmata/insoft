<?php
    include 'connect.php';

    $BOOKID = $_POST['BOOKID'];
    $BOOKNAME = $_POST['BOOKNAME'];

    $input = mysqli_query($connect, "update books set BOOKNAME='$BOOKNAME' where BOOKID='$BOOKID'");
    
    header("location:index.php");
    exit;
?>