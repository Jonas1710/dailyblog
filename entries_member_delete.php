<?php

deleteEntry($entryId);
header('Location: index.php?function=entries_member&bid='.$_SESSION['uid']);

  ?>
