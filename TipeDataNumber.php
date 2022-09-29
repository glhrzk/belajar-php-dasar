<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary ; ";
var_dump(0b1111);

echo "Underscore in number : ";
var_dump(1_241_241_241);
// underscore diatas akan di ignore alias tidak dianggap.

echo "Floating Point : ";
var_dump(1.234);

echo "Floating point dengan E Notation (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating point dengan E Notation minus (1.7 x 0.001) : ";
var_dump(1.7e-3);

echo "Underscore di floating point : ";
var_dump(1_123.123);
// underscore diatas akan di ignore, fungsinya agar mempermudah ketika membaca nilai.

#integer overlow, ketika nilai lebih besar dari range value tipe data integer maka dia akan mengconvert otomatis ke tipe data atasnya contoh float
echo "Integer Overflow : ";
var_dump(9223_3720_3685_4775_808);
