<?php
  if (isset($_POST['page'])){
      $spage = $_POST['page'];
      switch ($spage){
          case 'taches':
              require './includes/gestionpage/taches.html';
              break;
          case 'services':
              require './includes/gestionpage/services.html';
              break;
          case 'contact':
              require './includes/gestionpage/contact.html';
              break;
          case 'contact':
              require './includes/gestionpage/contact.html';
              break;
          case 'acces':
              require './includes/gestionpage/acces.html';
              break;
          case 'accueil':
          default:
              require './includes/gestionpage/accueil.html';
              break;
      }
    }
    elseif (isset($_GET['page'])){
        $spage = $_GET['page'];
        switch ($spage){
            case 'taches':
                require './includes/gestionpage/taches.html';
                break;
            case 'services':
                require './includes/gestionpage/services.html';
                break;
            case 'contact':
                require './includes/gestionpage/contact.html';
                break;
            case 'contact':
                require './includes/gestionpage/contact.html';
                break;
            case 'acces':
                require './includes/gestionpage/acces.html';
                break;
            case 'accueil':
            default:
                require './includes/gestionpage/accueil.html';
                break;
        }
    }
    else {
        echo 'eeeeeeeeeeeeeeeeee';
        require './includes/gestionpage/accueil.html';
    }
?>
