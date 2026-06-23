<?php
$studenti = [
    "Francesco", // 0
    "Luana",     // 1
    "Annalisa",  // 2
    "Marco",     // 3
    "Paolo",     // 4
    "Davide",    // 5
    "Carlo",     // 6
    "Daniele"    // 7
];

// La funzione count() ci dice quanti elementi esistono  
$totaleStudenti = count($studenti);

// stapo il risultato
echo "Il numero totale degli studenti sono = " . $totaleStudenti . "<br>";

// Stampo l'ultimo elemento della tabella(array o lista) studenti
echo "L\'utimo studente è " . $studenti[7] . "<br>";
echo "Lo studente numero 5 è " . $studenti[5];
echo "<hr>";
//--------------
// Aggiungere un elemento (studente)
//--------------
$studenti[] = "Fabio";
echo "<b>Aggiunta</b> Abbiamo aggiunto uno studente<br>" ;
echo "Ora l\'ultimo studente è " . $studenti[8] . "<br>";

echo "Il numero totale degli studenti sono = " . count($studenti) . "<br>";
echo "<hr>";

// ==================================
// Modifica dello studente
// ==================================

$studenti[2] = "Giovanni";
$studenti[4] = "Luca";

echo "<b>[Update]</b> I dati sono stati aggiornati<br>";
echo "<br>Ora lo studente all\'indice 2 è diventato: " . $studenti[2];
echo "<br>Ora lo studente all\'indice 4 è diventato: " . $studenti[4] . "<br>";



// ==================================
// Eliminare un/o elemento(studente) 
// ==================================

// Voglio eliminare "Annalisa" che si trova all'indice 2.
// Usiamo (array_splice) cosi gli studenti scalano indietro e gli indici si riordinano
echo "Stampo il nome dello studente " . $studenti[2] . "<br>";
echo "<b>[ELIMINAZIONE]</b> Abbiamo tolto uno studente con l'indice 2 " . $studenti[2] . "<br>";
array_splice($studenti, 2, 1);

echo "Nuovo totale studenti: " . count($studenti) . "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";

?>