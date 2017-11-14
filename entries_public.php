<?php
  // Alle Blogeinträge holen, die Blog-ID ist in der Variablen $blogId gespeichert (wird in index.php gesetzt)
  // Hier Code... (Schlaufe über alle Einträge dieses Blogs)
  $entries = getEntries($blogId);

  foreach ($entries as $entry => $blogs) {
    $content = preg_replace("/[^ ]*$/", '', substr($blogs['content'], 0, 200));
    echo '<h4>';
    echo $blogs['title'];
    echo '</h4>';
    echo $content;
    echo '...';
    echo '<a href="index.php?function=entries_public_details&bid=';
    echo $blogId;
    echo '&eid=';
    echo $blogs['eid'];
    echo '">Blog anzeigen </a>';
    echo "<br>"."<br>";

  }


  // Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blog-Beiträge und der Ausgabe mit PHP ersetzt werden
?>
