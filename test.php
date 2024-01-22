<?php
  $dateNaissance = "5-08-1958";
  $aujourdhui = date("Y-m-d");
  $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
  echo 'Votre age est '.$diff->format("%y ans %m mois %d jours");
?>