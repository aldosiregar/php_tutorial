<?php
    //Number dalam php
    /**
     * Dalam php, terdapat 3 tipe angka utama yaitu : Interger, Float, dan Number Strings
     * Selain itu, ada juga 2 tipe data yang digunakan dalam angka yaitu : Infinity dan NaN
     * tipe data variable dibuat ketika ditambahkan nilai didalamnya
     * 
     * untuk melihat tipe data dari object dalam php, dapat menggunakan var_dump()
     */
    $x = ["a" => 5, "b" => 12.5, "c" => "25"];
    var_dump($x); //output : { ["a"]=> int(5) ["b"]=> float(12.5) ["c"]=> string(2) "25" }
    echo "<br>";

    //Php Interger
    /**
     * interger adalah angka yang tidak memiliki nilai desimal
     * dalam sistem 32 bit, nilai interger berada dalam rentang -2147483648 sampai 2147483647
     * dan dalam sistem 64 bit, nilainya berada dalam rentang -9223372036854775808 sampai 9223372036854775807
     * nilai yang lebih besar atau lebih kecil dari ini akan masuk kedalam tipe data float
     * note : dan juga 4 * 2.5 akan masuk kedalam float karena 2.5 termasuk tipe data float
     * 
     * beberapa aturan untuk interger adalah :
     *  1. sebuah interger harus setidaknya memiliki 1 digit
     *  2. sebuah interger tidak boleh memiliki nilai desimal
     *  3. sebuah interger dapat bernilai positif ataupun negatif
     *  4. sebuah interger dapat dispesifikkan menjadi 3 format : decimal (base 10), 
     *     hexadecimal (base 16, prefixed dengan 0x), octal (base 8, prefixed dengan 0),
     *     atau binary (base 2, prefixed with 0b)
     * 
     * Php memiliki beberapa predifined constant untuk interger
     *  1. PHP_INT_MAX - nilai terbesar yang di support oleh interger
     *  2. PHP_INT_MIN - nilai terkecil yang di support oleh interger
     *  3. PHP_INT_SIZE - besar dari interger dalam bytes
     * 
     * Php memiliki fungsi bawaan untuk memastikan jika sebuah tipe data adalah interger atau bukan
     *  1. is_int()
     *  2. is_interger() -alias dari is_int()
     *  3. is_long() -alias dari is_int() 
     */
    $x = ["i_1" => 12, "i_2" => 0x3A, "i_3" => 073, "i_4" => 0b1011];
    var_dump($x); // output : { ["i_1"]=> int(12) ["i_2"]=> int(58) ["i_3"]=> int(59) ["i_4"]=> int(11) }
    
?>