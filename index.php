<?php
    $nom = 'Ivan';
    $cognom = 'Herms';

    $preuProducte = 34.4;
    $descoptePercent = 10;

    $descopte = $descoptePercent / 100;
    
    $descopteAplicat = $preuProducte * $descopte;

    $total = $preuProducte - $descopteAplicat;

    echo 'El client '.$nom.' '.$cognom. ' té un descompte aplicat del '.$descoptePercent.'%<br>';
    echo 'Preu inicial: '.$preuProducte.'€<br>';
    echo 'Preu amb descompte: '.$total.'€';
?>