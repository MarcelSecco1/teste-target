<?php

function verifica($number): bool
{
    $zero = 0;
    $um = 1;
    $temp;

    if ($number == $zero || $number == $um) {
        return true;
    }

    while ($um <= $number) {
        $temp = $um;
        $um = $zero + $um;
        $zero = $temp;

        if ($um == $number) {
            return true;
        }
    }

    return false;
}


fwrite(STDOUT, "Digite um número: ");

$number = trim(fgets(STDIN));

if (!is_numeric($number)) {
    echo "O valor digitado não é um número!!\n";
    exit;
} else if (verifica($number)) {
    echo "O número " . $number . " pertence a sequencia de Fibonacci!!\n";
    exit;
} else {
    echo "O número " . $number . " não pertence a sequencia de Fibonacci!!\n";
    exit;
}
