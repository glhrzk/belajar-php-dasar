<?php

echo 'Nama : ';
echo 'Galih rizki';
echo "\n";
// jika mengunakan single quote (petik satu) kita tidak bisa menggunakan escape sequence

echo "Nama : ";
echo "Galih Rizki \n";
// menggunakan double quote

// NowDoc: fitur untuk membuat string yang panjang, format penulisan di code sama dengan apa yang akan ditampilkan. kita bisa menggunakan escape sequence
echo <<<'GALIH'
Halo namaku adalah galih rizki,
aku sedang mengulang dan mempelajari kembali php dasar karena aku agak lupa.
kode ini menggunakan perintah NowDoc "\n"
GALIH;


// Heredoc: fitur untuk membuat string yang panjang, format penulisan di code sama dengan apa yang akan ditampilkan
echo <<<GALIH
Halo namaku adalah galih rizki,
aku sedang mengulang dan mempelajari kembali php dasar karena aku agak lupa.
kode ini menggunakan perintah HereDoc
GALIH;
