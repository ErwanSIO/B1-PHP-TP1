<?php
     define( "CONV_ND_PRIX", 17) ;
     echo "Saisir le nombre d'adultes : " ;
     $Nombresadultes = fgets( STDIN ) ;
     $Prix = CONV_ND_PRIX * $Nombresadultes ; 
     echo "Prix a payer :" , $Prix , "€\n" ; 
?>
