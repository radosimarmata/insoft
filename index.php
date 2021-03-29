<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insoft CRUD</title>
</head>
<body>
    <h1>INSOFT</h1>
    <a href="insert.php">+ Book</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Book ID</th>
            <th>Book Name</th>
            <th>Option</th>
        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($connect,"select * from books");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['BOOKID']; ?></td>
                <td><?php echo $d['BOOKNAME']; ?></td>
                <td>
                    <a href="edit.php?BOOKID=<?php echo $d['BOOKID']; ?>">EDIT</a>
                    <a href="delete.php?BOOKID=<?php echo $d['BOOKID']; ?>">DELETE</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>