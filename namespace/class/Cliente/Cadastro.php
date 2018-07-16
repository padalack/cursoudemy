<?php
/**
 * Created by PhpStorm.
 * User: KallilRogério
 * Date: 05/07/2018
 * Time: 03:35
 */

namespace Cliente;
class Cadastro extends \Cadastro
{
    public function registrarVenda(){
        echo "Venda realizada para cliente " . $this->getNome();
    }
}