<?php
    include 'connect.php';

    $BOOKID = $_POST['BOOKID'];
    $BOOKNAME = $_POST['BOOKNAME'];

    $input = mysqli_query($connect, "insert into books values('$BOOKID','$BOOKNAME')");
    
    echo "New Book";
    header("location:insert.php");
    exit;
?>