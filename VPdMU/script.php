<?php

// 2

$var1 = "Hello";
$var2 = "World";

$vars = get_defined_vars();

foreach($vars as $name => $value) {
    echo "$name = $value<br>";
}

// 4



?>