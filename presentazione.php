<!DOCTYPE html>
<html lang="it">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Condizioni in Php</title>
</head>
<body>
    <?php
        $totaleSpesa = 1120; // in Euro
        $tipoCliente = "Gold";
        if ($tipoCliente == "Gold"){
            $totaleScontato = $totaleSpesa - ($totaleSpesa * 0.20);
            echo "Cliente premium Gold! Hai guadagnato 20% di sconto. il suo prezzo finale è " . $totaleScontato . "€";
        }
        elseif ($tipoCliente == "Silver"){
            $totaleScontato = $totaleSpesa - ($totaleSpesa * 0.10);
            echo "Cliente premium Gold! Hai guadagnato 10% di sconto. il suo prezzo finale è " . $totaleScontato . "€";}
        elseif ($tipoCliente == "Platino"){
            $totaleScontato = $totaleSpesa - ($totaleSpesa * 0.40);
            echo "Cliente premium Gold! Hai guadagnato 40% di sconto. il suo prezzo finale è " . $totaleScontato . "€";}
        else {
            echo "Nessuno sconto applicato per clienti standard";
        }


    ?>
</body>
