<!DOCTYPE html>
<html lang="it">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Esercizio condizionali</title>
</head>

<body> <?php

$nomeUtente = "Mario";
$passwordUtente = 1234;
if($nomeUtente == "Anna" && $passwordUtente == 1234) {
echo "Utente presente nel sistema. Accesso consentito!";
}
elseif ($nomeUtente == ""){
echo "Inserire un nome utente valido!";}

else if($passwordUtente != 1234){echo "password non valida" ;}

else 
    {"riprova con nome utente o password diverse";}

?>