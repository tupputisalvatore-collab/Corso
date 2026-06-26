<?php
// Lo swich è una struttura di controllo condizionale 

/*
    Sintassi base:
    dichiarazione della variabile = 85;

    switch(variabile)
    {
        case valore1:
            // codice ---es: stampa o chiamata di una afunzione
            break; // ferma lo switch

        case valore2:
            // codice ---es: stampa o chiamata di una afunzione
            break;

        default:
            // codice se nessun caso è valido
    } 
*/


/*
    Come funziona:
    PHP fa questo processo:😅
    1. prende la variabile
    2. la confronta 
    3. quando trova una corrispondeza -> esegue il blocco del codice 
    4. break ferma lo switch(il ciclo)
    5. default è caso "altrimenti come nella condizione if/else"

*/

$giorno = "mercoledi";

switch ($giorno) {
    case "lunedi":
        echo "Siamo il primo giorno della settimana";
        break; // ferma lo switch

    case "martedi":
        echo "Siamo il secondo giorno della settimana";
        break;

    case "mercoledi":
        echo "Siamo il terzo giorno della settimana";
        break;

    case "giovedi":
        echo "Mancan solo un giorno per fare l'aperitivo🎉🎉";
        break;

    case "venerdi":
        echo "Non dico🎉🎉";
        break;
    default:
        echo "Giorno normale 🤨🤨🤨";
}
