<?php
  /* ----------- Upload de Arquivos ---------- */


  $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

 if(isset($_POST['submit'])) {
   // Verificar se o arquivo foi enviado
   if(!empty($_FILES['upload']['name'])) {
    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $target_dir = "uploads/${file_name}";
    // Obter a extensão do arquivo
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    // echo $file_ext;

    // Validar tipo/extensão do arquivo
    if(in_array($file_ext, $allowed_ext)) {
      // Validar tamanho do arquivo
      if($file_size <= 1000000) { // 1000000 bytes = 1MB
        // Fazer o upload do arquivo
        move_uploaded_file($file_tmp, $target_dir);

        // Mensagem de sucesso
        echo '<p style="color: green;">Arquivo enviado!</p>';
      } else {
        echo '<p style="color: red;">Arquivo muito grande!</p>';
      }
    } else {
      $message = '<p style="color: red;">Tipo de arquivo inválido!</p>';
    }
   } else {
     $message = '<p style="color: red;">Por favor, escolha um arquivo</p>';
   }
 }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivo</title>
  </head>
  <body>
    <?php echo $message ?? null; ?>
  <form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="post" enctype="multipart/form-data">
    Selecione a imagem para enviar:
  <input type="file" name="upload">
  <input type="submit" value="Enviar" name="submit">
</form>
  </body>
  </html>
