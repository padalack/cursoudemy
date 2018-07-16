<?php

function __autoload($nomeClasse){
    require_once("$nomeClasse.php");
}
$example = new DelRey();
$example->trocarMarcha(5);