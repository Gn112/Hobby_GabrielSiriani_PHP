<?php
session_start();

// Teste se há conexão ativa
if(!isset($_SESSION['user_id']))
{
    echo 'Sem permissão para acessar esta página<br>';
    echo '<a href="../index.php">Ir para página inicial</a>';
    exit;
}

// Conecta ao banco de dados
require('db_con.php');
?>