<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insoft CRUD</title>
</head>
<body>
    <a href="index.php"><h1>INSOFT</h1></a>
    <h3>EDIT Book</h1>

    <?php
    include 'connect.php';
    $BOOKID = $_GET['BOOKID'];
    $data = mysqli_query($connect, "select * from books where BOOKID='$BOOKID'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>Book_ID</td>
                    <td><?php echo $d['BOOKID']; ?></td>
                </tr>
                <tr>
                    <td>Book_NAME</td>
                    <td>
                        <input type='hidden' name="BOOKID" value="<?php echo $d['BOOKID']; ?>">
                        <input type="text" name="BOOKNAME" value="<?php echo $d['BOOKNAME']; ?>">
					</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Save">
					</td>
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
</body>
</html>