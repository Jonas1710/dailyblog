 <?php

 if(getUserIdFromSession() == true) {
   echo '<h1>Meine Blogs<h1>';
   $entries = getEntries($blogId);
   if ($entries == NULL) {
     echo "Sie haben noch keinen Blog erstellt";
     echo '<a href="index.php?function=entries_member_create&bid='.$blogId.'">Blog erstellen </a>';
   } else {
     foreach ($entries as $entry => $blogs) {
       $content = preg_replace("/[^ ]*$/", '', substr($blogs['content'], 0, 200));
       echo "<h4>".$blogs['title']."</h4>";
       echo date('d.m.Y',$blogs['datetime'])."<br>";
       echo $content.'...';
       echo '<a href="index.php?function=entries_member_details&bid='.$blogId.'&eid='.$blogs['eid'].'">Blog anzeigen </a>';
       echo '<a onclick="return confirmDelete()" href="index.php?function=entries_member_delete&bid='.$blogId.'&eid='.$blogs['eid'].'">Blog Löschen </a>';
       echo '<a href="index.php?function=entries_member_edit&bid='.$blogId.'&eid='.$blogs['eid'].'">Blog bearbeiten </a>';
       echo "<br>"."<br>";
     }
  }
} else {
     die('Bitte zuerst <a href="index.php?function=login">einloggen</a>');
 }
 ?>
