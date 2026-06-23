<?php
$eta_database = 23;
$eta_utente = 23; 

if($eta_utente == $eta_database) 
{
    echo "L'eta inserita è corretta";
}
elseif($eta_utente != $eta_database) 
{
    echo "⚠️L'eta inserita non è corretta";
}
else
{
    echo "Errore inserisci l'eta corretta";
}

?>