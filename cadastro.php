<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="cadastro.css">
  <title>Cadastro</title>
  
</head>
<body>
  <div class="container">
    <h1>Cadastro</h1>

    <?php
      
      function validarEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
      }

      $nome = $email = $senha = $tipoCafe = "";
      $message = "";
      $messageClass = "";

      if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome = trim($_POST["nome"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $senha = $_POST["senha"] ?? "";
        $tipoCafe = $_POST["tipoCafe"] ?? "";

        
        if (!$nome || !$email || !$senha || !$tipoCafe) {
          $message = "Por favor, preencha todos os campos.";
          $messageClass = "error";
        } elseif (!validarEmail($email)) {
          $message = "Por favor, insira um e-mail válido.";
          $messageClass = "error";
        } elseif (strlen($senha) < 6) {
          $message = "A senha deve ter ao menos 6 caracteres.";
          $messageClass = "error";
        } else {
          
          $message = "Cadastro realizado com sucesso! Bem-vindo(a), ".htmlspecialchars($nome).".";
          $messageClass = "success";

         
          $nome = $email = $senha = $tipoCafe = "";
        }
      }
    ?>

    <?php if ($message): ?>
      <div class="message <?= $messageClass ?>">
        <?= htmlspecialchars($message) ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
      <label for="nome">Nome Completo</label>
      <input type="text" id="nome" name="nome" required value="<?= htmlspecialchars($nome) ?>" placeholder="Seu nome completo" />

      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" required value="<?= htmlspecialchars($email) ?>" placeholder="seu@email.com" />

      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" required placeholder="Mínimo 6 caracteres" />

      <label for="tipoCafe">Tipo de Café Preferido</label>
      <select id="tipoCafe" name="tipoCafe" required>
        <option value="" disabled <?= $tipoCafe=="" ? "selected" : "" ?>>Selecione</option>
        <option value="Arábica" <?= $tipoCafe=="Arábica" ? "selected" : "" ?>>Arábica</option>
        <option value="Robusta" <?= $tipoCafe=="Robusta" ? "selected" : "" ?>>Robusta</option>
        <option value="Conilon" <?= $tipoCafe=="Conilon" ? "selected" : "" ?>>Conilon</option>
        <option value="Especial" <?= $tipoCafe=="Especial" ? "selected" : "" ?>>Especial</option>
      </select>

      <button type="submit">Cadastrar</button>
    </form>
  </div>
</body>
</html>

