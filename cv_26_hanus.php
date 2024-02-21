<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Formulář</title>
</head>
<body>

<h1>Formulář</h1>

<form action="zpracovani.php" method="post">

  Jméno: <input type="text" name="jmeno" required><br>
  Datum: <input type="date" name="datum" required><br>
  E-mail: <input type="email" name="email" required><br>

  <button type="submit">Odeslat</button>
<?php

// Zjistěte, zda byl formulář odeslán
if (isset($_POST["jmeno"]) && isset($_POST["datum"]) && isset($_POST["email"])) {

  // Spočítání délky zadaného jména
  $delka_jmena = strlen($_POST["jmeno"]);

  // Kontrola, zda byl vyplněn datum
  if (empty($_POST["datum"])) {
    echo "Zadejte prosím datum.";
    exit;
  }

  // Kontrola, zda byl zadán e-mail
  if (empty($_POST["email"])) {
    echo "Zadejte prosím e-mailovou adresu.";
    exit;
  }

  // Vypisování dat
  echo "Jméno: " . $_POST["jmeno"] . "<br>";
  echo "Délka jména: " . $delka_jmena . "<br>";
  echo "Datum: " . $_POST["datum"] . "<br>";
  echo "E-mail: " . $_POST["email"] . "<br>";

} else {
  echo "Formulář nebyl odeslán.";
}

?>

</form>

</body>
</html>