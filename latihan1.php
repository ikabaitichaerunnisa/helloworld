<?php

$a = "hello";
$hello = "hello world";

//menampilkan isi variabel
//hello
echo $a . "</br>";

//menampilkan isi variabel
//helloworld
echo $hello . "</br>";

//menampilkan isi variabl dengan nama yang sama seperti isi variabel $a
//isi varial $a = hello. jadi nanti akan menampilkan isi dari variabel $hello
//hello world
echo $$a . "</br>";

?>