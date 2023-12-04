<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CAPTCHA Example</title>
</head>
<body>

<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['captcha_input']) && strtoupper($_POST['captcha_input']) === strtoupper($_SESSION['captcha'])) {
        echo '<p style="color: green;">CAPTCHA corretto! Puoi procedere.</p>';
    } else {
        echo '<p style="color: red;">Errore nel CAPTCHA. Riprova.</p>';
    }
}
?>
<form method="post" action="">
    <label for="captcha_input">Inserisci il testo visualizzato nell'immagine:</label><br>
    <img src="captcha.php" alt="Codice di controllo"><br>
    <input type="text" id="captcha_input" name="captcha_input" required><br>
    <button type="submit">Verifica</button>
</form>

</body>
</html>
