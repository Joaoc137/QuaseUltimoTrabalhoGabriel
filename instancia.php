<?php
require "conta.php";
require "cliente.php";

$conta = new Conta("001","Conta João","007");
$cliente = new Cliente("001","João","111.111.111-11","joaopcontaescola@gmail.com",$conta);


echo "---------------------".PHP_EOL;
echo $cliente->exibirConta()->exibirCode();