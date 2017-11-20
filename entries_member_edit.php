<?php

 $detailBlog = getEntry($entryId);
if(getUserIdFromSession() == true) {
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $updateValues['title'] = $_POST['titel'];
    $updateValues['content'] = $_POST['content'];
    $updateValues['id'] = $_POST['id'];
    var_dump($updateValues['id']);
    $createdEntry = updateEntry($updateValues['id'], $updateValues['title'], $updateValues['content']);
    header('Location: index.php?function=entries_member&bid='.$_SESSION['uid']);
  }
} else {
  die('Bitte zuerst <a href="index.php?function=login">einloggen</a>');
}

 ?>

 <form method="post" action="<?= $_SERVER['PHP_SELF']."?function=entries_member_edit" ?>">
  <label class="col-md-2 control-label"></label>
  <div class="col-md-4">
  	<input id="id" name="id" type="hidden" class="form-control input-md" value="<?= $detailBlog['eid']?>">
  </div>
   <label for="titel">Titel</label>
   <div>
 	<input type="text" id="titel" name="titel" placeholder="Blog Titel" required="required" value="<?php  echo $detailBlog['title'] ?>"/>
   </div>
   <label for="content">Blog content</label>
   <div>
     <textarea name="content" rows="10" cols="80"><?= $detailBlog['content'] ?></textarea>
   </div>
   <div>
 	<button type="submit">senden</button>
   </div>
 </form>
