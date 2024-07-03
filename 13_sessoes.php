<?php
/* ------------ Sessões ------------ */

/*
  Sessões são uma maneira de armazenar informações (em variáveis) para serem usadas em várias páginas.
  Ao contrário dos cookies, as sessões são armazenadas no servidor.
*/

session_start(); // Deve ser chamado antes de acessar qualquer dado de sessão

if (isset($_POST['submit'])) {
  $username = filter_input(
    INPUT_POST,
    'username',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );
  $password = filter_input(
    INPUT_POST,
    'password',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );

  if ($username == 'brad' && $password == 'password') {
    // Definir variável de sessão
    $_SESSION['username'] = $username;
    // Redirecionar usuário para outra página
    header('Location: /php-crash/extras/dashboard.php');
  } else {
    echo 'Nome de usuário ou senha incorretos';
  }
}
?>

  <form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
    <div>
      <label>Nome de usuário: </label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Senha: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Enviar">
  </form>
