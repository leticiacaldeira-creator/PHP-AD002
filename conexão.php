<?php
$host = 'localhost';
$dbname = "campeonatos";
$usuario = 'root';
$senha = 'mysql';
$port = "3306";

try {
    
 $pdo = new  PDO("mysql:host=$host;dbname=$dbname;charset=utf8;port=$port;",$usuario,$senha);

 $pdo->setAttribute(PDO::ATTR_ERRMODE,
 PDO::ERRMODE_EXCEPTION);


echo "Conectado com sucesso!";

} catch (PDOException $e)  {
   
 die("Erro de conexão:" .$e->getMessage());

}