<?php

fwrite(STDOUT, "Digite uma string: ");

$string = trim(fgets(STDIN));

$reversedString = strrev($string);

echo "String reversa: " . $reversedString . "\n";
