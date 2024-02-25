<?php
// Verifica se os campos de usuário e senha foram enviados via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de usuário e senha foram preenchidos
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        // Verifica as credenciais do usuário (substitua esta lógica com sua própria lógica de autenticação)
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Verifica se o usuário e a senha são válidos (exemplo simples)
        if ($username === 'usuario' && $password === 'senha') {
            // Inicia a sessão (você pode armazenar informações de login na sessão)
            session_start();

            // Redireciona o usuário para a página de boas-vindas após o login bem-sucedido
            header("Location: welcome.php");
            exit;
        } else {
            // Exibe uma mensagem de erro se as credenciais forem inválidas
            echo "Credenciais inválidas. Por favor, tente novamente.";
        }
    } else {
        // Exibe uma mensagem de erro se os campos estiverem vazios
        echo "Por favor, preencha todos os campos.";
    }
}
?>