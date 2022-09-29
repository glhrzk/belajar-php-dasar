<?php

echo "operator and : \n";
var_dump(true && true);
var_dump(true && false);
var_dump(false && false);
// (and dan), jika kedua variable bernilai true maka hasilnya true, selain itu false.

echo "\necho operator or : \n";
var_dump(true || false);
var_dump(true || true);
var_dump(false || false);
// (or atau), jika salah satu variable bernilai true maka hasilnya tue, selain itu false.

echo "\necho operator xor : \n";
var_dump(true xor false);
var_dump(true xor true);
var_dump(false xor false);
var_dump(false xor true);
// (xor), akan bernilai true jika nilai variable berbeda / tidak sama, jika identik/sama maka bernilai false.