<?php
    /**
     * operator digunakan untuk melakukan operasi pada variabel ataupun nilai
     * 
     * php membagi operator dalam beberapa grup
     *  1. arithmethic operator
     *  2. assignment operator
     *  3. comparison operator
     *  4. increment/decrement operator
     *  5. logical operator
     *  6. string operator
     *  7. array operator
     *  8. condtional assignment operator 
     */

    //php arithmethic operator
    /**
     * php arithmetic operator digunakan untuk nilai angka untuk melakukan operasi matematika sederhana
     * seperti penambahan, pengurangan, perkalian, dan lain sebagainya
     * 
     * (+)  Addition	    =	Sum of $x and $y	
     * (-)	Subtraction	    =	Difference of $x and $y	
     * (*)	Multiplication	=	Product of $x and $y	
     * (/)	Division	    =	Quotient of $x and $y	
     * (%)	Modulus	        =	Remainder of $x divided by $y	
     * (**) Exponentiation	=	Result of raising $x to the $y'th power
     */
    $addition = 14 + 20;
    $subtraction = 30 - 14;
    $multiply = 3 * 17;
    $divide = 5 / 12;
    $modulo = 4 % 2;
    $exponen = 4 ** 2;

    echo "<h1>php arithmethic operator</h1>"; 
    echo "<p>penambahan = $addition </p>"; //output : penambahan = 34
    echo "<p>pengurangan = $subtraction </p>"; //output : pengurangan = 16
    echo "<p>perkalian = $multiply </p>"; //output : perkalian = 51
    echo "<p>pembagian = $divide </p>"; //output : pembagian = 0.41666666666667
    echo "<p>modulus = $modulo </p>"; //output : modulus = 0
    echo "<p>perpangkatan = $exponen </p>"; //output : perpangkatan = 16
    echo "<br><br>";

    //php assignment operator
    /**
     * php assignment operator digunakan untuk nilai numerik untuk mengisi sebuah nilai kedalam variabel
     * 
     * operator assignment paling dasar adalah "=", artinya bagian kiri di-set nilainya dengan bagian kanan
     * 
     * x = y    same as 	x = y	    The left operand gets set to the value of the expression on the right	
     * x += y	same as     x = x + y	Addition	
     * x -= y	same as     x = x - y	Subtraction	
     * x *= y	same as     x = x * y	Multiplication	
     * x /= y	same as     x = x / y	Division	
     * x %= y	same as     x = x % y	Modulus
     */

     //php comparison operator
     /**
      * php comparison operator digunakan untuk membandingkan 2 nilai (baik angka maupun string)
      */
?>