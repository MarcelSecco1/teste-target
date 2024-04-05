<?php

fwrite(STDOUT, "Digite a string: ");

$string = trim(fgets(STDIN));

$reverse = strrev($string);

echo "String reversa: " . $reverse . "\n";
