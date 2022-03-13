<?php
header('Content-Type: application/json');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
    <script src="api.js" type="text/js" ></script>
</head>
<body class="bg-success text-white">

<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white p-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Spotify</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                   <ul class="navbar-nav">
                       <li class="nav-item">
                           <a href="home.php" class="nav-link">Home</a>
                       </li>

                       <li class="nav-item">
                           <a href="search.php" class="nav-link">Search</a>
                       </li>

                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Albums
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                               <li><a class="dropdown-item" href="albums.php">Albums</a></li>
                               <li><a class="dropdown-item" href="albums-details.php">Albums - details</a></li>
                           </ul>
                       </li>

                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Genre
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                               <li><a class="dropdown-item" href="genre.php">Genre</a></li>
                               <li><a class="dropdown-item" href="genre-details.php">Genre - details</a></li>
                           </ul>
                       </li>

                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Artist
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                               <li><a class="dropdown-item" href="artist.php">Artist</a></li>
                               <li><a class="dropdown-item" href="artist-details.php">Artist - details</a></li>
                           </ul>
                       </li>

                   </ul> 
                </div>
            </div>
        </nav>
</header>

<main>

    <div class="container-fluid">

        <div class="row p-4">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6 text-center">
                <h1>Welcome to Spotify <br> it's gonna blow you mind.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Autem dolorum ea enim eos, error esse et harum.</p>

            </div>

            <div class="col-sm-3">
            </div>

        </div>

        <div class="row p-4">
            <div class="col-sm-4 text-center">
                <h3>text</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Autem dolorum ea enim eos, error esse et harum.</p>
            </div>
            <div class="col-sm-4 text-center">
                <h3>text</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Autem dolorum ea enim eos, error esse et harum.</p>
            </div>

            <div class="col-sm-4 text-center">
                <h3>text</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Autem dolorum ea enim eos, error esse et harum.</p>
            </div>

        </div>

    </div>

</main>

<footer class="fixed-bottom">

<div class="text-center bg-dark text-white">

    <div class="container p-4">

        <div class="row">

            <div class="col-3 col-lg-3 col-xl-3 mx-auto">
                <h5>
                    About Spotify
                </h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>

            <div class="col-3 col-lg-3 col-xl-3 mx-auto">
                <h5>
                    About Epitech Mulhouse
                </h5>
                <p>Marvine is our best friend <br> and we love him with all our heart.
                </p>
            </div>

        </div>

    </div>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>