<?php 

$string = $_POST['string'];

// Check of input geldig is en gevuld
if ($string) {
    if (!empty($string)) {
        if ($string != '') {
            if (strlen($string) != 0) {
                if (isset($string)) {
                    if (is_string($string)) {
                        echo $string;
                        echo "<br><a href='index.php'>Terug naar home</a>";
                    } else {
                        echo 'Het String Input veld is geen String Formaat';
                        echo "<br><a href='index.php'>Terug naar home</a>";
                    }
                } else {
                    echo 'Het String Input veld bestaat niet';
                    echo "<br><a href='index.php'>Terug naar home</a>";
                }
            } else {
                echo 'Het String Input veld is gelijk aan 0';
                echo "<br><a href='index.php'>Terug naar home</a>";
            }
        } else {
            echo 'Het String Input veld is een lege string';
            echo "<br><a href='index.php'>Terug naar home</a>";
        }
    } else {
        echo 'String Input veld is leeg';
        echo "<br><a href='index.php'>Terug naar home</a>";
    }
} else {
    echo 'String is niet ingevuld';
    echo "<br><a href='index.php'>Terug naar home</a>";
}

