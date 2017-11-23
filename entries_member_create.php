<?php
if(getUserIdFromSession() == 0) {
      die('Bitte zuerst <a href="index.php?function=login">einloggen</a>');
} else {


  $meldung = "";

  if(empty($_POST['titel']) & empty($_POST['content'])){
    $titel = '';
    $content = '';

  } else {
  $titel = $_POST['titel'];
  $content = $_POST['content'];
  $createdEntry = addEntry($_SESSION['uid'],$titel,$content);
  header('Location: index.php?function=entries_member&bid='.$_SESSION['uid']);
  }

}
 ?>

<form method="post" action="<?=  $_SERVER['PHP_SELF']."?function=entries_member_create"; ?>">
  <label for="titel">Titel</label>
  <div>
	<input type="text" id="titel" name="titel" placeholder="Blog Titel" required="required"/>
  </div>
  <label for="content">Blog content</label>
  <div>
    <textarea name="content" rows="10" cols="80"></textarea>
  </div>
  <div>
	<button type="submit">senden</button>
  </div>
</form>

<?= "<br><a href=\"javascript:history.go(-1)\">zurück</a>"; ?>
