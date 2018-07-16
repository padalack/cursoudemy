<?php
/**
 * Created by PhpStorm.
 * User: KallilRogério
 * Date: 05/07/2018
 * Time: 03:25
 */

require_once "config.php";

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("kallil");
$cad->setEmail("a@a.com");
$cad->setSenha("123456");

$cad->registrarVenda();