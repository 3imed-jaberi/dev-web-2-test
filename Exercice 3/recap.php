<?php
  
  $t_V = isset($_GET['v']) && !empty($_GET['v']);
  $t_P = isset($_GET['p']) && !empty($_GET['p']);
  $t_S = isset($_GET['s']) && !empty($_GET['s']);
  $t_Q = isset($_GET['qte']) && !empty($_GET['qte']);

  if($t_V && $t_P && $t_S && $t_Q){
            
    $V = $_GET['v'];
    $P= $_GET['p'];
    $S = $_GET['s'];
    $Q = $_GET['qte'];

    echo (" Vous avez commandé $Q $P $S auprés de M. $V ");
  }else{
    echo (" il manque une formation de votre commande .. ");
  }