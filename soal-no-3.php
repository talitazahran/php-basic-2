<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Function</title>
    </head>

    <body>
        <h1>Berlatih Function PHP</h1>
            <?php

            echo "<h3>Soal No 3 Palindrome </h3>";
            /* 
            Soal No 3 
            Palindrome
            Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
            Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
            Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
            NB: 
            Contoh: 
            palindrome("katak") => output : "true"
            palindrome("jambu") => output : "false"
            NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!

            */

            function palindrome($string) {
                $reverse = "";
                for ($i = strlen($string) - 1; $i >= 0; $i--) {
                    $reverse .= $string[$i];
                } if ($reverse == $string) {
                    echo "true";
                } else {
                    echo "false";
                }
            }
            // Hapus komentar di bawah ini untuk jalankan code
            palindrome("civic") ; // true
            echo "<br>";
            palindrome("nababan") ; // true
            echo "<br>";
            palindrome("jambaban"); // false
            echo "<br>";
            palindrome("racecar"); // true

            ?>
    </body>

</html>