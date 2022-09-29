<?php

/*
kenapa kita perlu menggunakan null?
ketika kita sudah mendifine variable lalu varible tersebut tidak bernilai alias tidak di isi nilainya
maka akan terjadi error ketika kita print out, disinilah fungsi null tersebut.
*/

$name = "EKO";
$name = null;
$age = 23;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is name null? : ";
var_dump(is_null($name));


// unset adalah menghapus variabel beserta nilainya
unset($name);

// isset, adalah fungsi untuk mengecek apakah variabel ada, jika variable tersebut tidak null maka hasilnya true, begitu pula sebaliknya. 
var_dump(isset($age));
