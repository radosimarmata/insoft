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
    <h3>Create Book</h1>
    <form method="post" action="addBook.php">
    <table>
        <tr>
            <td>Book_ID</td>
            <td>:</td>
            <td><input type="number" name="BOOKID"></td>
        </tr>
        <tr>
            <td>Book_NAME</td>
            <td>:</td>
            <td><input type="varchar" name="BOOKNAME"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button>Save</button></td>
        </tr>
    </table>
    </form>
</body>
</html>