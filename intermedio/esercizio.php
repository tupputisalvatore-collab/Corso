<?php
$voto = 8;
switch ($voto) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Bocciato";
        break;

    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
        echo "Promosso";
        break;
}