<?php
if(empty($_POST['titleComment']) & empty($_POST['contentComment'])){
  $titel = '';
  $content = '';

} else {
$titel = $_POST['titleComment'];
$content = $_POST['contentComment'];
$createdEntry = addComment($_SESSION['cid'],$titel,$content);
header('Location: index.php?function=entries_member_details&bid='.$entryId);
}

 ?>
