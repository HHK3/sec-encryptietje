<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Joël Lakhai - Sec - Symmetrische Encryptie</h1>
    <hr>

    <!-- Opdracht 1 -->
    <h1>Opdracht 1 - Cipher Algoritme</h1>
    
    <?php

    $string = 'Hallo';

    $indexArray = array(
     $string[0],
     $string[1],
     $string[2],
     $string[3],
     $string[4]
    );

    foreach ($indexArray as $k => $v) {
        if ($k % 2 == 0) {
            $asciiValue = ord($indexArray[$k]);
            $higherAscii = $asciiValue + $k;
            $newCharacter = chr($higherAscii);
            echo '<br>' . $newCharacter . ' / ASCII = ' ;

            echo $higherAscii;
        }
        else {
            $asciiValue = ord($indexArray[$k]);
            $lowerAscii = $asciiValue - $k;
            $newCharacter = chr($lowerAscii);
            echo '<br>' . $newCharacter . '   / ASCII = ';

            echo $lowerAscii;
        }
    }
    ?>


    <!-- Opdracht 2 -->
    <h1>Opdracht 2 - Cryptografische Coderingen</h1>
    <h3>Cryptografische coderingen die OpenSSL ondersteunt</h3>
    <ul>
        <li>AES</li>
        <li>Blowfish</li>
        <li>Camellia</li>
        <li>SEED</li>
        <li>CAST-128</li>
        <li>DES</li>
        <li>IDEA</li>
        <li>RC2</li>
        <li>RC4</li>
        <li>RC5</li>
        <li>Triple DES</li>
        <li>GOST 28147-89</li>
    </ul>

    <!-- Opdracht 3 -->
    <h1>Opdracht 3 - OpenSSL</h1>

    <h3>Functies die data encrypten</h3>
    <ol>
        <li>openssl_encrypt</li>
        <li>openssl_private_encrypt</li>
        <li>openssl_public_encrypt</li>
    </ol>

    <h3>Functies die data decrypten</h3>
    <ol>
        <li>openssl_decrypt</li>
        <li>openssl_private_decrypt</li>
        <li>openssl_public_decrypt</li>
    </ol>


    <!-- Opdracht 5A -->
    <h1>Opdracht 5A - Check</h1>
    <form action="verify.php" method="post">
        <input type="text" name="string" placeholder="String">
        <input type="submit" value="submit">
    </form>

    <!-- Opdracht 5B -->
    <h1>Opdracht 5B - OpenSSL, PHP & AES</h1>
    <?php 

    $stringie = "Hello";
    $cipher = "aes-128-gcm";
    $key = "secretKey";

    if (in_array($cipher, openssl_get_cipher_methods())) {
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($ivlen);
        $ciphertext = openssl_encrypt($stringie, $cipher, $key, $options = 0, $iv, $tag);
        echo $ciphertext . "<br>";
        $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options = 0, $iv, $tag);
        echo $original_plaintext . "\n";
    }
    ?>


    </body >
    </html >