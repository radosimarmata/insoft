<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <title>Insoft</title>
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
    <form>
        <div>
        <br/>
            <input name="word" type="text" placeholder="Input Text!">
            <button>Submit</button>
            <button href="countword.php">Reset</button>
        </div>        
    </form>
<?php
    $pcx = "Hello my name is Rado HT Simarmata, you can call me Rado.
    I was born in October 27th, 1995 at Arga Makmur, Indonesia.
    I am an Intermediate Web Developer (both Front-End and Back-End).
    I was a conscientious one, love learning a new thing, and quickly understanding.
    with this advantages I sharpen my ability in the field of programming as a web development front-end and back-end.
    Let me know if we can work together :)";

    $word = @$_GET['word'];
    echo "<br/><p align=justify>$pcx.$word</p><hr/>";

	
	$wc = str_word_count($pcx.$word);
    $strlen = strlen($pcx.$word);
	echo "Number of words : $wc <br/>";
    echo "Number of letters : $strlen";
?>

</body>
</html>