<?php
// ROUTER PRINCIPAL


// ROUTE PAR DÉFAUT
// PATTERN: /
// CTRL: pagesController
// ACTION: homeAction
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
