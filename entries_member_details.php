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
      echo date('d.m.Y', $comment['datetime'])."<br>";
      echo $comment['content']."<br>";
      echo '<a href="index.php?function=comment_member_delete&bid='.$blogId.'&eid='.$entryId.'&cid='.$comment['cid'].'"> Kommentar Löschen </a>';
    }

?>
  <h3>Neuer Kommentar</h3>
  <form method="post" action='<?= $_SERVER['PHP_SELF']."?function=entries_member_details"; ?>'>
      <label for="id"></label>
      <div>
        <input type="hidden" id="id" name="eid" value='<?= $entryId?>'/>
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
      addComment($_POST['eid'] ,$titel,$content);
      header('Location: index.php?function=entries_member_details&bid='.$_SESSION['uid'].'&eid='.$_POST['eid'].'');
      }

    }

  } else {
        die('Bitte zuerst <a href="index.php?function=login">einloggen</a>');
    }
     ?>
