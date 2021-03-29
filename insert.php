<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <title>Insoft CRUD</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">INSOFT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </div>
            </div>
        </div>
    </nav>
    <div class="container">
    <h5>Add Book</h5>
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
    </div>
</body>
</html>