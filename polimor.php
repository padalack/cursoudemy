<?php

abstract class Animal{
    public function mover(){
        return 'Anda <br/>';
    }
    public function falar(){
        return 'Fala <br/>';
    }
}

class Gato extends Animal {
    public function falar()
    {
        return 'Mia <br/>';
    }
}
class Cachorro extends Animal {
    public function falar()
    {
        return 'Late <br/>';
    }
}
class Passaro extends Animal {
    public function falar()
    {
        return 'Canta <br/>';
    }
    public function mover()
    {
        return "Voa e " . parent::mover();
    }
}

$spitz = new Cachorro();
$siames = new Gato();
$gaivota = new Passaro();

echo $spitz->falar();
echo $spitz->mover();
echo '<hr/>';
echo $siames->falar();
echo $siames->mover();
echo '<hr/>';
echo $gaivota->falar();
echo $gaivota->mover();