<?php 
require('../conn/db_con.php');

// Inserir registro
function insert($pdo, $nome, $email)
{
    $sql = "INSERT INTO pessoa (usuario, email, senha)
            VALUES (:usuario, :email, :senha)";
    $stmt = $pdo_>prepare($sql);
}
?>