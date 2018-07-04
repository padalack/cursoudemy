<?php

$pessoas=array();

array_push($pessoas, array('nome'=>'kallil','idade'=>18));
array_push($pessoas, array('nome'=>'valdete','idade'=>60));


echo json_encode($pessoas);

$json = '[{"nome":"kallil","idade":18},{"nome":"valdete","idade":60}]';

var_dump(json_decode($json,true));