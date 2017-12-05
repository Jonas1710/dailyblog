<?php
$meldung = '';
$password = '';
$confirm_password = '';


    if(empty($_POST)){
      $benutzername = '';
      $email = '';
      $password = '';

    } else {
      if ($_POST['password'] === $_POST['confirm_password']) {
        $benutzername = $_POST['benutzername'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rolle = $_POST['role'];
        $password = md5($password);
        addUser($benutzername, $email, $password, $rolle);
          header('Location: index.php?function=login&bid='.$blogId.'');
      } else {
        $meldung = "Ihr Passwörter stimmen nicht überein";
      }

    }


 ?>


<form method="post" action="<?= $_SERVER['PHP_SELF']."?function=register"; ?>">
  <div class="">
    <input type="hidden" name="bid" value='<?= $blogId ?>'>
  </div>
  <label for="name">Benutzername</label>
  <div>
	<input type="text" id="benutzername" name="benutzername" placeholder="Benutzername" value="" />
  </div>
  <label for="email">E-Mail</label>
  <div>
  <input type="email" id="email" name="email" placeholder="E-Mail" value="" />
  </div>
  <label for="passwort">Passwort</label>
  <div>
	<input type="password" id="password" name="password" placeholder="Passwort" value="" />
  </div>
  <label for="passwort">Passwort Wiederholen</label>
  <div>
  <input type="password" id="confirmpassword" name="confirm_password" placeholder="Passwort Wiederholen" value="" />
  </div>
  <div>
  <input type="hidden" id="role" name="role" value="1" />
  </div>
  <div class="meldung">
    <p style="color:red" ><?php echo $meldung; ?></p>
  </div>
  <div>
	<button type="submit">senden</button>
  </div>
</form>
