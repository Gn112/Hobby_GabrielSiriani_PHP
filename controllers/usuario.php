<?php 
require('../conn/db_con.php');

// Inserir registro
function insert($pdo, $nome, $email)
{
    $sql = "INSERT INTO pessoa (usuario, email, senha)
            VALUES (:usuario, :email, :senha)";
    $stmt = $pdo_>prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    return $stmt->execute();
}
?>