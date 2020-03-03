<?php

class Pessoa
{
  private $nome;

  private $email;


  public function __construct($nome = null, $email = null)
  {
    $this->nome = $nome;
    $this->email = $email;
  }


  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function setSobrenome($email)
  {
    $this->email = $email;
  }

  public function getNomeCompleto()
  {
    return "{$this->nome} {$this->email}";
  }

  public function receiveData($post)
  {
    $this->nome = $post["nome"];
    $this->email = $post["email"];
    $telefone = $post["telefone"];
  }
}
