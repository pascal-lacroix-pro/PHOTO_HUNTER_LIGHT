<?php
// ROUTER PRINCIPAL

// ROUTE DES PHOTOGRAPHES
// PATTERN: /?authors
if (isset($_GET['authors'])) :
    include_once '../app/routers/authors.php';

// ROUTE DES PHOTOS
// PATTERN: /?photos
elseif (isset($_GET['photos'])) :
    include_once '../app/routers/photos.php';

// ROUTE PAR DÉFAUT
// PATTERN: /
// CTRL: pagesController
// ACTION: homeAction
else :
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
endif;
