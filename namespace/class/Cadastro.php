<?php
/**
 * Created by PhpStorm.
 * User: KallilRogério
 * Date: 05/07/2018
 * Time: 03:14
 */

class Cadastro
{

    //ATRIBUTOS
    private $nome;
    private $email;
    private $senha;


    //GETTERS

    public function getNome():string
    {
        return $this->nome;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function getSenha():string
    {
        return $this->senha;
    }


    //SETTERS

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


    //MAGIC

    public function __toString()
    {
        return json_encode(array(
           "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));
    }

}