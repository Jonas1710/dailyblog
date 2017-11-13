<?php
  // Schreibt einen Wert in den globalen Array
  function setValue($key, $value) {
    global $params;
    $params[$key] = $value;
  }

  // Holt einen Wert aus dem globalen Array
  function getValue($key) {
    global $params;
	if (isset($params[$key])) return $params[$key];
	else return "";
  }

  // Prüft, ob der Benutzer angemeldet ist
  function getUserIdFromSession() {
	if (isset($_SESSION['uid'])) return $_SESSION['uid'];
	else return 0;
  }

  // Holt Menu Titel
  function getMenuTitle ($blogId){
    if ($blogId > 0) return "Blog von ".getUserName($blogId);
    else return "Blog";
  }

  function getMenu($blogId){
    if ($blogId > 0) {
    echo "<li><a href='index.php?function=login&bid=$blogId'>Login</a></li>";
    echo "<li><a href='index.php?function=blogs&bid=$blogId'>Blog wählen</a></li>";
    echo "<li><a href='index.php?function=entries_public&bid=$blogId'>Beiträge anzeigen</a></li>";
    }
    else {
      $blogId = 0;
    }
  }
?>
