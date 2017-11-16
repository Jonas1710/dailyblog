<?php

if(getUserIdFromSession() == true) {
    $detailBlog = getEntry($entryId);
    echo ' <div class="Entry">
        <div class="title">
          <h1>';
          echo $detailBlog['title'];
    echo '</h1>
        </div>
        <div class="created_on">
          <p>';
          echo date('d.m.Y',$detailBlog['datetime']);
    echo '</p>
        </div>
        <div class="clontent">
          <p>';
    echo $detailBlog['content'];
    echo '<p/>
        </div>
      </div>';
    echo "<br><br>";
    echo "<h3>Kommentare</h3>";
    $allComments =  getComments($entryId);


    foreach ($allComments as $comments => $comment) {
      echo "<h4>".$comment['name']."</h4>";
      echo $comment['content'];
    }
  } else {
        die('Bitte zuerst <a href="index.php?function=login">einloggen</a>');
    }
?>
  <h3>Neuer Kommentar</h3>
  <form method="post" action='<?php echo $_SERVER['PHP_SELF']."?function=comment_member_create"; ?>'>
      <label for="id"></label>
      <div>
        <input type="hidden" id="id" name="cid"/>
      </div>
        <label for="commentTitle">Kommentar Titel</label>
      <div>
    	   <input type="text" id="title" name="titleComment" placeholder="Kommentar Titel" required="required"/>
      </div>
        <label for="contentComment">Kommentar</label>
      <div>
        <textarea name="contentComment" rows="10" cols="80" placeholder="Dein Kommentar"></textarea>
      </div>
      <div>
    	   <button type="submit">senden</button>
      </div>
    </form>
