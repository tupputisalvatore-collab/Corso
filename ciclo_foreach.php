<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial">
        <title>Corso Php</title>
    </head>
    <body>
        <h1>
            Cicli<i>foreach in php</i></h1>
            <div class="box">
                <h3>Lettura di chiave e valore </h3>
            </div>
            <?php
                $profileStudente = [
                    "Nome" => "Luana",
                    "Corso" => "Php full-stack",
                    "Stato" => "Iscritta",
                    "Vot medio" => 9
                ];
                foreach($profileStudente as $proprietà => $stato){
                    echo "<li>" . $proprietà . "<strong>" . $stato . "<strong>" . " </li>";
                }
            ?>

    </body>
</html>