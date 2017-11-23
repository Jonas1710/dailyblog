<?php

$meldung = "";
if(empty($_POST['email']) & empty($_POST['passwort'])){
  $email = "";
  $password = "";



} else {
  $email = $_POST['email'];
  $passwort = $_POST['passwort'];
  $uid = getUserIdFromDb($email, $passwort);
  if (!empty($uid)){
    session_start();
    $_SESSION['uid'] = $uid;
    header('Location: index.php?function=entries_member&bid='.$uid);
  } else {
    $meldung = "Login ist Falsch";
  }


}


  // $_SERVER['PHP_SELF'] = login.php in diesem Fall (also die PHP-Datei, die gerade ausgeführt wird).
  // Mit andern Worten: Nach Senden des Formulars wird wieder login.php aufgerufen.
  // Die Funktionen zur Überprüfung, ob die Login-Daten gültig sind, muss also hier oben im PHP-Teil stehen!
  // Wenn Login-Daten korrekt sind:
  // Session-Variable mit Benutzer-ID setzen und Wechsel in Memberbereich
  // $_SESSION['uid'] = $uid;
  // header('Location: index.php?function=entries_member');
  // Wenn Formular gesendet worden ist, die Login-Daten aber nicht korrekt sind:
  // Unten auf der Seite Anzeige der Fehlermeldung.
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?function=login"; ?>">
  <label for="email">Benutzername</label>
  <div>
	<input type="email" id="email" name="email" placeholder="E-Mail" value="" />
  </div>
  <label for="passwort">Passwort</label>
  <div>
	<input type="password" id="passwort" name="passwort" placeholder="Passwort" value="" />
  </div>
  <div class="meldung">
    <p color="red" ><?php echo $meldung; ?></p>
  </div>
  <div>
	<button type="submit">senden</button>
  </div>
</form>

<?= "<br><a href=\"javascript:history.go(-1)\">zurück</a>"; ?>
