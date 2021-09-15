<?php

    $bil=-8;

    if ($bil % 2 == 0 && $bil > 0){
        echo "$bil Merupakan Bilangan Genap Positif";
    }else if ($bil % 2 == 0  && $bil < 0){
        echo "$bil Merupakan Bilangan Genap Negatif";
    }else if ($bil % 2 != 0 && $bil > 0){
        echo "$bil Merupakan Bilangan Ganjil Positif";
    }else{
        echo "$bil Merupakan Bilangan Gnajil Negatif";
    }
?>
