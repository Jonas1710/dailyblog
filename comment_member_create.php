 <?php
 if(getUserIdFromSession() == 0) {
       die('Bitte zuerst <a href="index.php?function=login">einloggen</a>');
 } else {


   if(empty($_POST['titleComment']) & empty($_POST['contentComment'])){
     $titel = '';
     $content = '';

   } else {
   $titel = $_POST['titleComment'];
   $content = $_POST['contentComment'];
   $createdComment = addComment($entryId ,$titel,$content);
   header("Location: index.php?function=entries_member_details&bid='.$_SESSION['uid'].'&eid='.$_SESSION['eid']'");
   }

 }
  ?>
