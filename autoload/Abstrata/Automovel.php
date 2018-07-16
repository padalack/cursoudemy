<?php

class Automovel implements Veiculo
{
    public function acelerar($velocidade){
        echo "acelera $velocidade<br/>";
    }
    public function frenar($velocidade){
        echo "frena $velocidade<br/>";
    }
    public function trocarMarcha($marcha){
        echo "trocamarcha $marcha<br/>";
    }
}