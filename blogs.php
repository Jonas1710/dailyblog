<?php
  // Alle Blogs bzw. Benutzernamen holen und falls Blog bereits ausgewählt, entsprechenden Namen markieren
  $blogs = getUserNames();

  // Schlaufe über alle Blogs bzw. Benutzer
  foreach ($blogs as $blog) {
	?>
		<div><a href="index.php?function=blogs&bid=<?php echo $blog['uid']; ?>"><h4> <?php echo $blog['name']; ?> </h4></a></div>
<?php
  }
	?>
