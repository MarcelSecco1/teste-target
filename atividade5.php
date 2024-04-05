<?php

fwrite(STDOUT, "Digite a string: ");

$string = trim(fgets(STDIN));

$length = strlen($string);
$reversed = '';

for ($i = $length - 1; $i >= 0; $i--) {
    $reversed .= $string[$i];
}

echo "String reversa: " . $reversed . "\n";
