<?php
  unset($_SESSION['uid']);
  header('Location: index.php?function=blogs&bid='.$blogId.'');
 ?>
