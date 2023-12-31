<?php
// require_once("securite.php");
require_once("securite.php");
$req = "SELECT * FROM etudiant";
$ps = $pdo->prepare($req);
$ps->execute();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awsomes -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="../img/1.jpg">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>        <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
   
    <!-- JQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- GOOGLE JQUERY CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
    <script src="../js/index.js"></script>
     <!--  JQUERYUI CDN -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
     <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../sass/cours.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <title>Mémorisation</title>
</head>
<!-- hen tête -->
<header>

        <nav class="navbar fixed-top " style="background-color:#014507; color: white;">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php"><img src="../img/2.jpg" alt="Logo" width="30" height="24"  class="d-inline-block align-text-top"></a>
                <ul class="nav justify-content-center">
                    <li class="nav-item" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                      <a class="nav-link" href="memorisation.php">Mémorisation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editEtudiant.php">edit Etudiant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="live.php">Live</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="etudiant.php">Liste</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logOut.php">Se deconnecter</a>
                    </li>
                    
                    
                </ul>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header" style="background-color:#014507;">
                    <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">ALY DIABIRA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body" style="background-color:#014507;">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link display: flex; justify-content-start;" aria-current="page" href="cv.php">CV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                        <ul class="dropdown-menu text-black" style="background-color: #009aae64;">
                            <li><a class="dropdown-item text-black" href="cv.php">CV</a></li>
                            <li><a class="dropdown-item text-black" href="#">Another action</a></li>
                            <li>
                            <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-black" href="#">Something else here</a></li>
                        </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Background image -->
        <div class="p-5 text-center bg-image">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <!--css-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="300" fill="currentColor" class="bi bi-filetype-css" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.397 14.841a1.13 1.13 0 0 0 .401.823c.13.108.289.192.478.252.19.061.411.091.665.091.338 0 .624-.053.859-.158.236-.105.416-.252.539-.44.125-.189.187-.408.187-.656 0-.224-.045-.41-.134-.56a1.001 1.001 0 0 0-.375-.357 2.027 2.027 0 0 0-.566-.21l-.621-.144a.97.97 0 0 1-.404-.176.37.37 0 0 1-.144-.299c0-.156.062-.284.185-.384.125-.101.296-.152.512-.152.143 0 .266.023.37.068a.624.624 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.092 1.092 0 0 0-.2-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.551.05-.776.15-.225.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.122.524.082.149.2.27.352.367.152.095.332.167.539.213l.618.144c.207.049.361.113.463.193a.387.387 0 0 1 .152.326.505.505 0 0 1-.085.29.559.559 0 0 1-.255.193c-.111.047-.249.07-.413.07-.117 0-.223-.013-.32-.04a.838.838 0 0 1-.248-.115.578.578 0 0 1-.255-.384h-.765ZM.806 13.693c0-.248.034-.46.102-.633a.868.868 0 0 1 .302-.399.814.814 0 0 1 .475-.137c.15 0 .283.032.398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.441 1.441 0 0 0-.489-.272 1.838 1.838 0 0 0-.606-.097c-.356 0-.66.074-.911.223-.25.148-.44.359-.572.632-.13.274-.196.6-.196.979v.498c0 .379.064.704.193.976.131.271.322.48.572.626.25.145.554.217.914.217.293 0 .554-.055.785-.164.23-.11.414-.26.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.799.799 0 0 1-.118.363.7.7 0 0 1-.272.25.874.874 0 0 1-.401.087.845.845 0 0 1-.478-.132.833.833 0 0 1-.299-.392 1.699 1.699 0 0 1-.102-.627v-.495ZM6.78 15.29a1.176 1.176 0 0 1-.111-.449h.764a.578.578 0 0 0 .255.384c.07.049.154.087.25.114.095.028.201.041.319.041.164 0 .301-.023.413-.07a.559.559 0 0 0 .255-.193.507.507 0 0 0 .085-.29.387.387 0 0 0-.153-.326c-.101-.08-.256-.144-.463-.193l-.618-.143a1.72 1.72 0 0 1-.539-.214 1 1 0 0 1-.351-.367 1.068 1.068 0 0 1-.123-.524c0-.244.063-.457.19-.639.127-.181.303-.322.527-.422.225-.1.484-.149.777-.149.304 0 .564.05.779.152.217.102.384.239.5.41.12.17.187.359.2.566h-.75a.56.56 0 0 0-.12-.258.624.624 0 0 0-.246-.181.923.923 0 0 0-.37-.068c-.216 0-.387.05-.512.152a.472.472 0 0 0-.184.384c0 .121.047.22.143.3a.97.97 0 0 0 .404.175l.621.143c.217.05.406.12.566.211.16.09.285.21.375.358.09.148.135.335.135.56 0 .247-.063.466-.188.656a1.216 1.216 0 0 1-.539.439c-.234.105-.52.158-.858.158-.254 0-.476-.03-.665-.09a1.404 1.404 0 0 1-.478-.252 1.13 1.13 0 0 1-.29-.375Z"/>
                        </svg>
                    </div>
                    <div class="carousel-item "  data-bs-interval="600">
                        <!--html-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="300" fill="currentColor" class="bi bi-filetype-html" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5Zm-9.736 7.35v3.999h-.791v-1.714H1.79v1.714H1V11.85h.791v1.626h1.682V11.85h.79Zm2.251.662v3.337h-.794v-3.337H4.588v-.662h3.064v.662H6.515Zm2.176 3.337v-2.66h.038l.952 2.159h.516l.946-2.16h.038v2.661h.715V11.85h-.8l-1.14 2.596H9.93L8.79 11.85h-.805v3.999h.706Zm4.71-.674h1.696v.674H12.61V11.85h.79v3.325Z"/>
                        </svg>
                    </div>
                    <div class="carousel-item "  data-bs-interval="3000">
                        <!--bootstrap-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="300" fill="currentColor" class="bi bi-bootstrap" viewBox="0 0 16 16">
                            <path d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377H6.375z"/>
                            <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H4z"/>
                        </svg>
                    </div>
                    <div class="carousel-item "  data-bs-interval="500">
                       <!--Dossier-->
                       <svg xmlns="http://www.w3.org/2000/svg" width="500" height="300" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                            <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                        </svg>
                    </div>
                    <div class="carousel-item "  data-bs-interval="4000">
                         <!--pc-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="300" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
                            <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
                        </svg>
                     </div>
                     <div class="carousel-item "  data-bs-interval="400">
                        <!--php-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="300" fill="currentColor" class="bi bi-filetype-php" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.295.185.522Zm4.48 2.666V11.85h-.79v1.626H4.153V11.85h-.79v3.999h.79v-1.714h1.682v1.714h.79Zm.703-3.999h1.6c.288 0 .533.06.732.179.2.117.354.276.46.477.105.201.158.427.158.677 0 .25-.054.476-.161.677-.106.199-.26.357-.463.474a1.452 1.452 0 0 1-.733.173H8.12v1.342h-.791V11.85Zm2.06 1.714a.795.795 0 0 0 .084-.381c0-.227-.061-.4-.184-.521-.123-.122-.294-.182-.513-.182h-.66v1.406h.66a.794.794 0 0 0 .375-.082.574.574 0 0 0 .237-.24Z"/>
                        </svg>
                    </div>
                    <div class="carousel-item "  data-bs-interval="5000">
                        <!--sass-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="300" fill="currentColor" class="bi bi-filetype-sass" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.41 15.29a1.176 1.176 0 0 1-.111-.449h.764a.578.578 0 0 0 .255.384.81.81 0 0 0 .25.114c.095.028.201.041.319.041.164 0 .301-.023.413-.07a.559.559 0 0 0 .255-.193.506.506 0 0 0 .084-.29.387.387 0 0 0-.152-.326c-.101-.08-.256-.144-.463-.193l-.618-.143a1.72 1.72 0 0 1-.539-.214 1.001 1.001 0 0 1-.352-.367 1.068 1.068 0 0 1-.123-.524c0-.244.064-.457.19-.639.128-.181.304-.322.528-.422.225-.1.484-.149.777-.149.304 0 .564.05.779.152.217.102.384.239.5.41.12.17.186.359.2.566h-.75a.56.56 0 0 0-.12-.258.624.624 0 0 0-.246-.181.923.923 0 0 0-.37-.068c-.216 0-.387.05-.512.152a.472.472 0 0 0-.185.384c0 .121.048.22.144.3a.97.97 0 0 0 .404.175l.621.143c.217.05.406.12.566.211.16.09.285.21.375.358.09.148.135.335.135.56 0 .247-.063.466-.188.656a1.216 1.216 0 0 1-.539.439c-.234.105-.52.158-.858.158-.254 0-.476-.03-.665-.09a1.404 1.404 0 0 1-.478-.252 1.13 1.13 0 0 1-.29-.375Zm4.188-.387-.313 1.028h-.8l1.342-3.999h.926l1.335 4h-.84l-.314-1.03H5.598Zm1.178-.59-.49-1.616h-.034l-.49 1.617h1.014Zm1.352.528a1.13 1.13 0 0 0 .401.823c.13.108.289.192.478.252.19.061.411.091.665.091.338 0 .624-.053.859-.158.236-.105.416-.252.539-.44.125-.189.187-.408.187-.656 0-.224-.045-.41-.134-.56a1.002 1.002 0 0 0-.375-.357 2.028 2.028 0 0 0-.566-.21l-.621-.144a.97.97 0 0 1-.404-.176.37.37 0 0 1-.144-.299c0-.156.062-.284.185-.384.125-.101.296-.152.512-.152.143 0 .266.023.37.068a.623.623 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.093 1.093 0 0 0-.2-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.552.05-.776.15-.225.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.122.524.082.149.2.27.352.367.152.095.332.167.539.213l.618.144c.207.049.361.113.463.193a.387.387 0 0 1 .152.326.505.505 0 0 1-.085.29.558.558 0 0 1-.255.193c-.111.047-.249.07-.413.07-.117 0-.223-.013-.32-.04a.838.838 0 0 1-.248-.115.578.578 0 0 1-.255-.384h-.765Zm3.503.449a1.178 1.178 0 0 1-.111-.449h.764a.58.58 0 0 0 .255.384c.07.049.154.087.25.114.095.028.201.041.319.041.164 0 .301-.023.413-.07a.558.558 0 0 0 .255-.193.507.507 0 0 0 .085-.29.387.387 0 0 0-.153-.326c-.101-.08-.256-.144-.463-.193l-.618-.143a1.72 1.72 0 0 1-.539-.214 1.002 1.002 0 0 1-.351-.367 1.068 1.068 0 0 1-.123-.524c0-.244.063-.457.19-.639.127-.181.303-.322.527-.422.225-.1.484-.149.777-.149.304 0 .564.05.779.152.217.102.384.239.5.41.12.17.186.359.2.566h-.75a.56.56 0 0 0-.12-.258.623.623 0 0 0-.246-.181.923.923 0 0 0-.37-.068c-.216 0-.387.05-.512.152a.472.472 0 0 0-.184.384c0 .121.047.22.143.3a.97.97 0 0 0 .404.175l.621.143c.217.05.406.12.566.211.16.09.285.21.375.358.09.148.135.335.135.56 0 .247-.063.466-.188.656a1.216 1.216 0 0 1-.539.439c-.234.105-.52.158-.858.158a2.19 2.19 0 0 1-.665-.09 1.404 1.404 0 0 1-.478-.252 1.131 1.131 0 0 1-.29-.375Z"/>
                        </svg>
                    </div>
                    <div class="carousel-item "  data-bs-interval="300">
                        <!--sql-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="300" fill="currentColor" class="bi bi-filetype-sql" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM0 14.841a1.129 1.129 0 0 0 .401.823c.13.108.288.192.478.252s.411.091.665.091c.338 0 .624-.053.858-.158.237-.106.416-.252.54-.44a1.17 1.17 0 0 0 .187-.656c0-.224-.045-.41-.135-.56a1 1 0 0 0-.375-.357 2.027 2.027 0 0 0-.565-.21l-.621-.144a.97.97 0 0 1-.405-.176.369.369 0 0 1-.143-.299c0-.156.061-.284.184-.384.125-.101.296-.152.513-.152.143 0 .266.022.37.068a.624.624 0 0 1 .245.181.56.56 0 0 1 .12.258h.75a1.092 1.092 0 0 0-.199-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.552.05-.776.15-.225.099-.4.24-.528.421-.127.182-.19.395-.19.639 0 .201.04.376.123.524.082.149.199.27.351.367.153.095.332.167.54.213l.618.144c.207.049.36.113.462.193a.387.387 0 0 1 .153.325c0 .11-.029.207-.085.29A.558.558 0 0 1 2 15.31c-.111.047-.249.07-.413.07-.117 0-.224-.013-.32-.04a.835.835 0 0 1-.248-.115.579.579 0 0 1-.255-.384H0Zm6.878 1.489-.507-.739c.176-.162.31-.362.401-.6.092-.239.138-.507.138-.806v-.501c0-.371-.07-.693-.208-.967a1.495 1.495 0 0 0-.589-.636c-.256-.15-.561-.225-.917-.225-.351 0-.656.075-.914.225-.256.149-.453.36-.592.636a2.138 2.138 0 0 0-.205.967v.5c0 .37.069.691.205.965.139.273.336.485.592.636a1.8 1.8 0 0 0 .914.222 1.8 1.8 0 0 0 .6-.1l.294.422h.788ZM4.262 14.2v-.522c0-.246.038-.456.114-.63a.91.91 0 0 1 .325-.398.885.885 0 0 1 .495-.138c.192 0 .357.046.495.138a.88.88 0 0 1 .325.398c.077.174.115.384.115.63v.522c0 .164-.018.312-.053.445-.035.13-.087.244-.155.34l-.106-.14-.105-.147h-.733l.451.65a.638.638 0 0 1-.251.047.872.872 0 0 1-.487-.147.916.916 0 0 1-.32-.404 1.67 1.67 0 0 1-.11-.644Zm3.986 1.057h1.696v.674H7.457v-3.999h.79v3.325Z"/>
                        </svg>
                    </div>
                    <div class="carousel-item "  data-bs-interval="6000">
                        <!--JAVAscript-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="300" fill="currentColor" class="bi bi-filetype-js" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2H8v-1h4a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.186 15.29a1.176 1.176 0 0 1-.111-.449h.765a.578.578 0 0 0 .255.384c.07.049.153.087.249.114.095.028.202.041.319.041.164 0 .302-.023.413-.07a.559.559 0 0 0 .255-.193.507.507 0 0 0 .085-.29.387.387 0 0 0-.153-.326c-.101-.08-.255-.144-.462-.193l-.619-.143a1.72 1.72 0 0 1-.539-.214 1.001 1.001 0 0 1-.351-.367 1.068 1.068 0 0 1-.123-.524c0-.244.063-.457.19-.639.127-.181.303-.322.528-.422.224-.1.483-.149.776-.149.305 0 .564.05.78.152.216.102.383.239.5.41.12.17.186.359.2.566h-.75a.56.56 0 0 0-.12-.258.624.624 0 0 0-.247-.181.923.923 0 0 0-.369-.068c-.217 0-.388.05-.513.152a.472.472 0 0 0-.184.384c0 .121.048.22.143.3a.97.97 0 0 0 .405.175l.62.143c.218.05.406.12.566.211.16.09.285.21.375.358.09.148.135.335.135.56 0 .247-.063.466-.188.656a1.216 1.216 0 0 1-.539.439c-.234.105-.52.158-.858.158-.254 0-.476-.03-.665-.09a1.404 1.404 0 0 1-.478-.252 1.13 1.13 0 0 1-.29-.375Zm-3.104-.033A1.32 1.32 0 0 1 0 14.791h.765a.576.576 0 0 0 .073.27.499.499 0 0 0 .454.246c.19 0 .33-.055.422-.164.092-.11.138-.265.138-.466v-2.745h.79v2.725c0 .44-.119.774-.357 1.005-.236.23-.564.345-.984.345a1.59 1.59 0 0 1-.569-.094 1.145 1.145 0 0 1-.407-.266 1.14 1.14 0 0 1-.243-.39Z"/>
                          </svg>
                    </div>
                    <div class="carousel-item "  data-bs-interval="200">
                        <!--github-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="300" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                          </svg>
                    </div>
                </div>
            </div>     
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white ">
                        <button class="btn btn-info position-relative" type="button"  title="Nombre de consultation" >
                        <span class="badge bg-danger ms-2" id="++">Nouveau</span>
                        <span class="visually-hidden"></span>
                                En construction
                        </button>
                </div>
            </div>
        </div>

    <!-- Background image -->
</header>
<!--nav-->

<body>
   
    <!--Liste-->
    
        <!--Débordé-->
        <div class="overflow-x-auto">
            <h1>liste</h1>
        </div>

        <br>

        <div id="carouselExampleRide" class="carousel slide" >
            <div class="carousel-inner">  
                <div class="carousel-item active">
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col">
                                
                               
                             </div>
                            <div class="col" >
                                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16" style="background-color: gray; height: 200px; width: 200px; border-radius:50% ;">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                  </svg></a>
                            </div>
                            <div class="col">
                                <a href=""><img src="img/<?php echo ($et['photo']) ?>" style="height: 200px; width: 200px; border-radius: 50%;"></a>
                                <p><?php echo ($etudiant['nom']) ?></p>
                            </div>
                            <div class="col">
                               
                             </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5" >
        
        <br>
        
        <table>
            <tr>
                <td>Liste  PHP et MYsql</td>
            </tr>
            <thead>
                <tr>
                    <td>nom</td>
                    <td>email</td>
                    <td>photo</td>
                    <td>Mots de passe</td>
                    <tr></tr>
                    <tr></tr>
                </tr>
            </thead>
            <tbody>
                        <?php while ($etudiant = $ps->fetch()) { ?>
                            <tr>
                                <td><?php echo ($etudiant['nom']) ?></td>
                                <td><?php echo ($etudiant['prenom']) ?></td>
                                <td><?php echo ($etudiant['email']) ?></td>
                                <td><?php echo ($etudiant['password']) ?></td>
                                <td> <img src="../img/<?php echo ($et['photo']) ?>" width="100" height="100"></td>
                                <td <?php if ($_SESSION['profile']['role'] == "nom") {  ?> >
                                    <a href="editEtudiant.php?nom=<?php echo ($etudiant['nom']) ?>">Modifier</a>
                                </td>
                                <td><a onclick="return confirm('Etes vous sure..?');" href="delete.php?nom=<?php echo ($etudiant['nom']) ?>">Supprimer</a></td>
                            <?php } else {
                            ?>
                                <td></td>
                                <td></td>

                            <?php }
                            ?>

                            </tr>
                        <?php } ?>
            </tbody>
        </table>
           
           
       
        
        <hr class="my-5" >

        <table>
            <tr>
                <td>Benchmark</td>
            </tr>
            <tr>
                <td>
                    <iframe src="Benchmark.pdf" type="application/pdf" width="700" height="800"></iframe>
                </td>
            </tr>
        </table>

        <article class=" py-lg-4 px-md-5  ">
            <section class="container">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info d-grid gap-2 position-relative" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        New
                        <span class="visually-hidden"></span>
                    </span>
                    Article
                </button>
                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Article</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Mon objectif d’apprentissage est d'incorporer les forces armées avec
                                    le diplôme
                                    de
                                    développeur d’applications PHP/Symfony. Je souhaite devenir Officier
                                    des forces
                                    armées,
                                    suite à un stage en Régiment, j’en fait une vocation.
                                </p>
                                <br>
                                <p>Après une initiation au monde du numérique à forma Web et à la 3W
                                    Academy pour
                                    effectuer
                                    une
                                    formation de développeur et intégrateur, je devais être muni d'un
                                    ordinateur et
                                    d’un
                                    réseau
                                    Wi-Fi, et savoir la base Wordpress (CMS les langages, PHP, Mysql,
                                    Css, HTML,
                                    Javascript
                                    et
                                    Jquery) pour me permettre de réussir j’ai décidé de travailler à la
                                    maison,
                                    pendant
                                    la
                                    formation pour m’aider j’ai acheté un livre de développeur.
                                    Pareillement pour développeur d’applications PHP/Symfony,
                                    continuellement à la
                                    recherche de
                                    solution et de ressource, pour réaliser mes projets.</p>
                                <br>
                                <p>J’ai écrit aux services présidentiels, à l'intervenante sociale du
                                    commissariat
                                    de
                                    Police
                                    Nationale, à Openclassrooms.</p>
                                <br>

                                <p>S’agissant de ma volonté d’intégrer l’armée, je peux prendre contact,
                                    dans un
                                    Poste
                                    d'Information des forces armées, un conseiller pourra, sur
                                    rendez-vous, me faire
                                    suivre
                                    la
                                    procédure pour candidater</p>
                                <br>
                                <p>En tant que stagiaire lors de ma préparation militaire découverte en
                                    2019, j’ai
                                    mûri
                                    mon
                                    projet. C’est en tant qu’Officier des forces armées, je serai
                                    capable de mettre
                                    les
                                    difficultés passées loin derrière moi. Pour l’avenir je fais
                                    confiance à nos
                                    armées.

                                    J'étais financé par la Région Ile-de-France.
                                    Mise à jour le 25/08/2022.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary "
                                    data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    
            <br><br>
            <hr class="my-5" >

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
                integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
                crossorigin="anonymous">
        </script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
                integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
                crossorigin="anonymous">
        </script>    
</body>

<!--Footer-->
<?php include 'footer.php'?>
<!--Footer-->

</html>