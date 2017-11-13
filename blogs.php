<?php
  // Alle Blogs bzw. Benutzernamen holen und falls Blog bereits ausgewählt, entsprechenden Namen markieren
  $blogs = getUserNames();

  // Schlaufe über alle Blogs bzw. Benutzer
  foreach ($blogs as $blog) {
	?>
		<div><a href=index.php?function=blogs&bid='1'><h4> <?php echo getUserName($uid);  ?></h4></a></div>
<?php
//<?php $blog[$blogId]
  }
	?>


	<div><a href='index.php?function=blogs&bid=4' title='Blog auswählen'><h4>Anna Abegglen</h4></a></div>
	<div><a href='index.php?function=blogs&bid=2' title='Blog auswählen'><h4>Hans Hinterseer</h4></a></div>
	<div><a href='index.php?function=blogs&bid=1' title='Blog auswählen'><h4>Marc Muster</h4></a></div>
	<div><a href='index.php?function=blogs&bid=3' title='Blog auswählen'><h4>Sonja Sauser</h4></a></div>
