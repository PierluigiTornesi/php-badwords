<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>

        <h1>Inserisci un paragrafo e una parola da censurare</h1>

        <!-- Form per far inserire un paragrafo e una parola da censurare all'interno di quest'ultimo-->
        <form action="censured.php" method="GET">
            <!-- textarea per far inserire il paragrafo -->
            <textarea name="paragraph" id="paragraph" cols="60" rows="10" placeholder="Inserisci un paragrafo"></textarea>

            <br>

            <!-- input text per far inserire la parola -->
            <label for="badword">Inserisci una parola da censurare nel paragrafo</label>
            <input type="text" id="badword" name="badword">

            <br>

            <!-- bottone per inviare i dati -->
            <button type="submit">Invia</button>
        </form>


    </body>
</html>