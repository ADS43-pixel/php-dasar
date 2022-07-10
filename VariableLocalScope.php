<?php

function createName()
{
    $name = "Anggia"; // local scope
}

createName();
echo $name . PHP_EOL;
