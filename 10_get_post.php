<?php
/* --- Superglobais $_GET & $_POST -- */

/*
  Podemos passar dados por URLs e formulários usando as superglobais $_GET e $_POST.
*/

if (isset($_POST['submit'])) {
  // echo '<h3>' . $GET['username'] . '</h3>';
  echo '<h3>' . $_POST['username'] . '</h3>';
} ?>

<!-- Passar dados por um link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Brad">Link</a>


<br><br>

<!-- Passar dados por um formulário -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Nome: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Senha: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Enviar">
</form>
