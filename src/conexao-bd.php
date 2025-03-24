<?php

//$pdo = new PDO('mysql:host=localhost;dbname=serenatto', 'root', 'admin');

/**
 * https://www.php.net/manual/pt_BR/pdo.drivers.php
 * 1. String de conexão
 * 2. Usuário
 * 3. Senha
 * 
 * Usa drivers específicos para cada BD (Ver php.ini)
 */
$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=web-cc', 'postgres', 'postgres'); 

/**
 * Imprime informações sobre a variável
 */
//var_dump($pdo);

?>
