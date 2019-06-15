<?php
  
  function calcul_somme ($tab) {

    $SP = 0 ;
    
    $SN = 0 ;

    foreach ($tab as $item) {

        if( gettype($item) != "integer" && gettype($item) != "double" ){

          echo (" Le tableau contient une valeur non numérique ! ");

        }else{

          if($item >= 0){

            $SP += $item ;

          }else{

            $SN += $item ;

          }
        }

    }

    echo (" Le somme des nombres positives : $SP ");

    echo (" Le somme des nombres negatives : $SN ");
  
  }

  $TABLEAU = array(10,-5,2,3,-6) ; 
  
  print_r($TABLEAU);

  calcul_somme($TABLEAU);

?>