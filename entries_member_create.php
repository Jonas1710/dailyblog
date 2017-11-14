<?php
if(getUserIdFromSession() == 0) {
  header('Location: index.php?function=login&bid='.$blogId);
}

$meldung = "";

if(empty($_POST['titel']) & empty($_POST['content'])){
  $titel = '';
  $content = '';

}
else{
$titel = $_POST['titel'];
$content = $_POST['content'];
$createdEntry = addEntry($_SESSION['uid'],$titel,$content);
header('Location: index.php?function=entries_member&bid='.$_SESSION['uid']);
}





 ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?function=entries_member_create"; ?>">
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
