<?php

echo "Segitiga Bintang Ascending \n";
// jalankan looping luarnya
for($i=1; $i <= 10; $i++) {
    // adapun untuk inner loopnya, maka dijalankan sampai nilai dari variabel i saat ini
    // dan akan menghasilkan sebuah pola segitiga
    for($j=1; $j <= $i; $j++) {
        echo "*";
    }
    // Setelah inner loop dijalankan, maka buat baris baru untuk inner loop berikutnya
    echo "\n";
}
echo "\nSegita Bintang Descending\n";
for($i=1; $i<=10; $i++) {
    for($j=10; $j >= $i; $j--) {
        echo "*";
    }
    echo "\n";
}
