<?php

deleteComment($commentId);
header('Location: index.php?function=entries_member_details&bid='.$blogId.'&eid='.$entryId.'');

  ?>
