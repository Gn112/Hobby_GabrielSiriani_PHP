<?php
header('Content-Type: text/html; charset=utf-8'); // Setando Charset

session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: src/dashboard.php");
    exit;
}
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique o login do usuário (faça a validação adequada)
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Verifique no banco de dados ou onde quer que estejam as informações do usuário
    if ($username === 'Siri' && $password === 'brenda1806') {
        $_SESSION['user_id'] = 1;
        header("Location: ./src/dashboard.php");
        exit;
    } else {
        $message = "Nome de usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobby - Gabriel Siriani</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen">
    <div class="min-w-full bg-white rounded shadow-md inline-flex flex-row">
        <form method="post" class="inline-flex flex-row items-center">
            <label for="username" class="m-2 block text-sm font-medium text-gray-700">Usuário</label>
            <input type="text" id="username" name="username" class="mt-1 p-2 border rounded-md">

            <label for="email" class="m-2 block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">

            <label for="password" class="m-2 block text-sm font-medium text-gray-700">Senha</label>
            <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">

            <button type="submit" class="m-4 w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Cadastrar</button>
        </form>
        <p class="mt-3 text-red-500"><?php echo $message; ?></p>
    </div>
</body>

</html>