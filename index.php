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
            </div>
        </div>
    </div>
</body>
</html>