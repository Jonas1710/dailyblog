<?php
  // Alle Blogs bzw. Benutzernamen holen und falls Blog bereits ausgewählt, entsprechenden Namen markieren
  $blogs = getUserNames();

  // Schlaufe über alle Blogs bzw. Benutzer
  foreach ($blogs as $blog) {
    if ($blogId == $blog['uid']){
      $color = "red";
    } else {
      $color = '';
    }


	?>
		<div><a href="index.php?function=entries_public&bid=<?=$blog['uid']; ?>"><h4 style='color: <?= $color ?>'> <?= $blog['name']; ?> </h4></a></div>
<?php
  }
	?>
