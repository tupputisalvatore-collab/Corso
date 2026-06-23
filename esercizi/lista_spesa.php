<?php
$spesa = [
    "Pasta", 
    "Salsa",    
    "Zucchine",  
    "Tovaglioli",     
    "Carne",     
    "Pesce",    
    "Caffé",    
    "Dentifricio",   
    "Frutta",
    "Salumi",
    "Mozzarella",
    "Olive"
];


$totaleSpesa = count($spesa);
echo "<b>[Lista della spesa di Daniele]</b><br>";

 for($i = 0; $i < $totaleSpesa; $i++){
        echo "<li>spesa in posizione" . $i . ":" . $spesa[$i] . "<br> </li>";
    }