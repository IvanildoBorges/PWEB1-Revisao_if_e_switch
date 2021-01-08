<?php

$op = $_POST["cod"];

if ($op == "carne") {
    echo "Você comprou carne!";
} elseif ($op == "ovo") {
    echo "Você comprou ovo!";
} elseif ($op == "leite") {
    echo "Você comprou leite!";
} else {
    echo "OPÇÃO INVALIDA!!!";
}

switch($op) {
    case "carne":
        echo "<br> Você comprou carne! (switch)";
    break;

    case "ovo":
        echo "<br> Você comprou ovo! (switch)";
    break;

    case "leite":
        echo "<br> Você comprou leite! (switch)";
    break;

    default:
        echo "<br> OPCÃO INVALIDA!!! (switch)";
}
?>