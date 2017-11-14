 <?php

 if(getUserIdFromSession() == true) {
   $entries = getEntries($blogId);

   foreach ($entries as $entry => $blogs) {
     $content = preg_replace("/[^ ]*$/", '', substr($blogs['content'], 0, 200));
     echo '<h4>';
     echo $blogs['title'];
     echo '</h4>';
     echo date('d.m.Y',$blogs['datetime']);
     echo '<br>';
     echo $content;
     echo '...';
     echo '<a href="index.php?function=entries_member_details&bid=';
     echo $blogId;
     echo '&eid=';
     echo $blogs['eid'];
     echo '">Blog anzeigen </a>';
     echo "<br>"."<br>";

   }

 } else {
     die('Bitte zuerst <a href="index.php?function=login">einloggen</a>');
 }



 ?>
