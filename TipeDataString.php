<?php

echo 'Name : ';
echo 'Anggia Dea ';
echo "\n";

echo "Name : ";
echo "Anggia\t Dea \n";

echo <<<Anggia
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

Anggia;

echo <<<'Anggia'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
Anggia;
