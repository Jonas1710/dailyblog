<?php
  if(empty($_POST['titleComment']) && empty($_POST['contentComment'])){
    $titel = '';
    $content = '';

  } else {
  $titel = $_POST['titleComment'];
  $content = $_POST['contentComment'];
  addComment($_POST['eid'] ,$titel,$content);
  header('Location: index.php?function=entries_member_details&bid='.$blogId.'&eid='.$_POST['eid'].'');
  }
 ?>
