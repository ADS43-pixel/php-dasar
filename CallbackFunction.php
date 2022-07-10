<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Anggia", "strtoupper");
sayHello("Anggia", "strtolower");
sayHello("Anggia", function (string $name): string {
    return strtoupper($name);
});
sayHello("Anggia", fn($name) => strtoupper($name));