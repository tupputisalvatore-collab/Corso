<!DOCTYPE html>
<html lang="it">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Esercizio condizionali</title>
</head>

<body> 
    <p>
<?php
$nomeUtente = "Mario";
$passwordUtente = 1234;

if ($nomeUtente == "Anna" & $passwordUtente == 1234) {
    echo "Utente presente nel sistema. Accesso consentito!";
} 
elseif ($nomeUtente == "") {
    echo "Inserire un nome utente valido!";
} 
elseif ($nomeUtente != "Anna" || $passwordUtente != 1234) {
    
    echo "Riprova con nome utente o password diverse.<br>";
}


function saluta(string $nome, string $lingua = "it"): string {
    return match($lingua) {
        "en" => "Hello $nome",
        "fr" => "Bonjour $nome",
        default => "Ciao $nome"
    };
}

echo "Benvenuto, " . saluta("Marco");

funzione con dati degli studenti

?>

</p>
</body>
</html><?php
//Paolo Mari
$spesa = [
    "Pomodori",
    "Zucchine",
    "Peperoni",
    "Latte",
    "Pasta",
    "Polpa di pomodoro",
    "Pane",
    "Vino",
    "Biscotti",
    "Marmellata"
];

$totaleSpesa = count($spesa);
echo "Da comprare: ";
for ($i = 0; $i < $totaleSpesa; $i++) {

    echo "<li>" . $i . ") " . $spesa[$i] . "</li>";
}
// ========================================================


// Giovanni Lombardi

$spesa = [
    "Pane",
    "Uova",
    "Tonno",
    "Acqua",
    "Riso",
    "Pollo"
];

$TotaleElementi = count($spesa);



for ($i = 0; $i < $spesa; $i++) {
    echo "<li>Alimento in posizione" . $i . ": " . $spesa[$i] . " <br> </li>";
}
// ========================================================


// Francesco F
$listaSpesa = [
    "acqua",
    "pane",
    "latte",
    "uova",
    "sale",
    "zucchero",
    "insalata",
    "carne",
    "pesce",
    "pomodori"
];



$totaleSpesa = count($listaSpesa);

for ($i = 0; $i < $totaleSpesa; $i++) {
    echo "<li>Lista della spesa " . $i . ": " . $listaSpesa[$i] . "</li>";
}
// ========================================================

// Paolo ⚠️
echo "Lista Spesa:";

$listaSpesa = [
    "Pasta",
    "Pane",
    "Tonno",
    "Carne",
    "Uova",
    "Olio"
];

$totaleSpesa = count($listaSpesa);

for ($i = 0; $i < $totaleSpesa; $i++) {
    echo "<li>Prodotto in posizione " . $i . ": " . $listaSpesa[$i] . "</li>";
}


// ========================================================



//lista della spesa di Daniele Benetti
$listaSpesa = [
    "Uova",
    "Pancetta",
    "Latte",
    "Farina",
    "Olio",
    "Surgelati",
    "Pomodori",
    "Moussa",
    "Maionese",
    "Pollo",
    "Pesce"
];

//ciclo for
echo "<b>[Lista della spesa di Daniele]</b><br>";
for ($i = 0; $i < sizeof($listaSpesa); $i++) {
    if ($i < count($listaSpesa)) {
        echo "[" . $i . "] --> ";
    } else break;
    echo $listaSpesa[$i] . "<br>";
}

// ========================================================

// Marco Gulino

// Array
$shopList = [
    "Pasta",
    "Farina 00",
    "Lievito",
    "Zucchero",
    "Passata di pomodoro",
    "Zampirone",
    "Matite"
];

echo "<ul>";
// Print Array
for ($i = 0; $i < count($shopList); $i++) {
    echo "<li>" . $shopList[$i] . "</li>";
}
echo "</ul>";
