<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="login.css">
  <title>Login</title>

</head>
<body>
  <div class="container">
    <h1>Login</h1>

    <?php
      $usuarios = [
        "cliente@cafe.com" => "123456",
        "usuario@exemplo.com" => "senha123"
      ];

      $email = "";
      $message = "";
      $messageClass = "";

      if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = trim($_POST["email"] ?? "");
        $senha = $_POST["senha"] ?? "";

        if (!$email || !$senha) {
          $message = "Por favor, preencha todos os campos.";
          $messageClass = "error";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $message = "E-mail inválido.";
          $messageClass = "error";
        } elseif (!isset($usuarios[$email])) {
          $message = "Usuário não encontrado.";
          $messageClass = "error";
        } elseif ($usuarios[$email] !== $senha) {
          $message = "Senha incorreta.";
          $messageClass = "error";
        } else {
          $message = "Login realizado com sucesso! Bem-vindo(a).";
          $messageClass = "success";
        }
      }
    ?>

    <?php if ($message): ?>
      <div class="message <?= $messageClass ?>">
        <?= htmlspecialchars($message) ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
      <label for="email">E-mail</label>
      <input
        type="email"
        id="email"
        name="email"
        required
        value="<?= htmlspecialchars($email) ?>"
        placeholder="seu@email.com"
      />

      <label for="senha">Senha</label>
      <input
        type="password"
        id="senha"
        name="senha"
        required
        placeholder="Digite sua senha"
      />

      <button type="submit">Entrar</button>
    </form>
  </div>
</body>
</html>

