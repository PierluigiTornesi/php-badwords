<?php 
    //paragrafo
    $paragraph = $_GET['paragraph'];
    //parola da censurare
    $badword = $_GET['badword'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords - Censored </title>
    </head>
    <body>

        <!-- stampo il paragrafo senza censura -->
        <h2>
            Questo é il paragrafo originale:
        </h2>
        <p>
            <?php echo $paragraph; ?>
        </p>

        <!-- stampo la lunghezza del paragrafo -->
        <?php
        $length = strlen($paragraph);
        ?>
        <p>
            La lunghezza del paragrafo è di <?php echo $length; ?> caratteri
        </p>

        <br>

        <!-- censuro la parola nel paragrafo -->
        <?php
        $new_paragraph = str_replace($badword, '***', $paragraph);
        ?>

        <!-- stampo il paragrafo con la censura -->
        <h2>
            Questo é il paragrafo con la censura:
        </h2>
        <p>
            <?php echo $new_paragraph; ?>
        </p>

        <!-- stampo la lunghezza del paragrafo con la censura -->
        <?php
        $length_cens = strlen($new_paragraph);
        ?>
        <p>
            La lunghezza del paragrafo con la censura è di  <?php echo $length_cens; ?> caratteri
        </p>
        
    </body>
</html>
