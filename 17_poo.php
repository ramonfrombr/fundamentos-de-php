<?php 
/* --- Programação Orientada a Objetos -- */

/*
  A partir do PHP5, você pode escrever PHP de forma procedural ou orientada a objetos. O OOP consiste em classes que podem ter "propriedades" e "métodos". Objetos podem ser criados a partir de classes.
*/

class User {
  // Propriedades são apenas variáveis que pertencem a uma classe.
  // Modificadores de Acesso: public, private, protected
  // public - pode ser acessado de qualquer lugar
  // private - só pode ser acessado de dentro da classe
  // protected - só pode ser acessado de dentro da classe e por classes que herdam dela
  private $name;
  public $email;
  public $password;

  // O construtor é chamado sempre que um objeto é criado a partir da classe.
  // Passamos as propriedades para o construtor de fora.
  public function __construct($name, $email, $password) {
    // Atribuímos as propriedades passadas de fora para as propriedades que criamos dentro da classe.
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Métodos são funções que pertencem a uma classe.
  // function setName() {
  //   $this->name = $name;
  // }

  function getName() {
    return $this->name;
  }

  function login() {
    return "Usuário $this->name está logado.";
  }

  // Destruidor é chamado quando um objeto é destruído ou no final do script.
  function __destruct() {
    echo "O nome do usuário é {$this->name}.";
  }
}

// Instanciar um novo usuário
$user1 = new User('Brad', 'brad@gmail.com', '123456');
echo $user1->getName();
echo $user1->login();

// Adicionar um valor a uma propriedade
// $user1->name = 'Brad';

var_dump($user1);
// echo $user1->name;

/* ----------- Herança ---------- */

/*
  Herança é a capacidade de criar uma nova classe a partir de uma classe existente.
  Isso é alcançado criando uma nova classe que estende uma classe existente.
*/

class Funcionario extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }
}

$employee1 = new Funcionario('John','johndoe@gmail.com','123456','Gerente');
echo $employee1->getTitle();
?>
