<?php

use App\Controllers\PhotosController;

include '../app/controllers/photosController.php';

switch ($_GET['photos']):
    case 'show':
        PhotosController\showAction($connexion, $_GET['id']);
        break;
    default:
        PhotosController\indexAction($connexion);
        break;
endswitch;
