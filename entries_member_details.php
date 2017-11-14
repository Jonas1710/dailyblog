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

} else {
    die('Bitte zuerst <a href="index.php?function=login">einloggen</a>');
}



?>
