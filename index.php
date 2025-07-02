<?php 
header('Content-Type:application/json');

$resposta = ["mensagem" => "está funcionando", "status" => 200];

echo json_encode($resposta);

?>