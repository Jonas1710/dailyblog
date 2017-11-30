<?php
  // Alle Blogeinträge holen, die Blog-ID ist in der Variablen $blogId gespeichert (wird in index.php gesetzt)
  // Hier Code... (Schlaufe über alle Einträge dieses Blogs)
  $entries = getEntries($blogId);

  foreach ($entries as $entry => $blogs) {
    $content = preg_replace("/[^ ]*$/", '', substr($blogs['content'], 0, 200));
    echo '<h4>'.$blogs['title'].'</h4>';
    echo date('d.m.Y',$blogs['datetime']);
    echo '<br>';
    echo $content.'...';
    echo '<a href="index.php?function=entries_public_details&bid='.$blogId.'&eid='.$blogs['eid'].'">Blog anzeigen </a>';
    echo "<br>"."<br>";

  }

  echo '<br><a href="index.php?function=blogs&bid='.$blogId.'">Zurück</a>';
  // Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blog-Beiträge und der Ausgabe mit PHP ersetzt werden
?>
