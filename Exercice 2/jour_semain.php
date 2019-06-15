<?php
  
  $jour = htmlentities($_POST['j']);
  $month = $_POST['m'] ;
  $year = htmlentities($_POST['a']);

  if(empty($jour) || empty($year)) {
    echo (" il faut saisir le jour et l'année .. ");
  }else{
    if($jour < 1 || $jour > 31){
       echo (" il faut introduire un nombre compris entre 1 et 31 pour le jour .. ");         
    }else{
       if($year < 1970){
          echo (" il faut introduire un nombre supérieur ou égal à 1970 pour l'année .. ");
       }else{
          
          $CH = "$jour $month $year";
          $day = date('l',strtotime($CH));


          echo ("<h1> Affichage Jour Semaine </h1>");
          echo (" <br/> Date saisie : $CH ");
          echo (" <br/> Jour de la semaine de cette date : $day ");
           
       }
    }
  }

?>