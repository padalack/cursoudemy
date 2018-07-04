<?php

function soma(int ...$valores):string {

    return array_sum($valores);

}

var_dump(soma(2,2));
