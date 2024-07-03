<?php
/* ------------- Cookies ------------ */

/*
  Cookies são um mecanismo para armazenar dados no navegador remoto e, portanto, rastrear ou identificar usuários que retornam. Você pode definir dados específicos para serem armazenados no navegador e depois recuperá-los quando o usuário visitar o site novamente.
*/

// Como os cookies são armazenados no cliente, você não deve armazenar dados sensíveis neles. Sessões são uma escolha melhor para armazenar dados sensíveis.

// Definir um cookie
setcookie('name', 'Brad', time() + 86400 * 30); // 86400 = 1 dia

// echo time();

// Obter um cookie
if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

// Excluir um cookie
setcookie('name', '', time() - 86400);
?>
