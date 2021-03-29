<?php
    include 'connect.php';

    $BOOKID = $_POST['BOOKID'];
    $BOOKNAME = $_POST['BOOKNAME'];

    $input = mysqli_query($connect, "insert into books values('$BOOKID','$BOOKNAME')");
    
    header("location:insert.php");
    exit;
?>