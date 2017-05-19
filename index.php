<?php
if ($_SESSION == null) {
    include "vues/vueLogin.php";
}
    if(isset($_GET['action'])) {
      $action = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['action']);
      $action = htmlspecialchars($action);
      switch ($action) {
        case "login":
          include "";
          break;
        default:
          echo "ERREUR. Requete incomprise";
          break;
      }
    } else {
        include "vues/vueAccueil.php";
    }
    ?>

