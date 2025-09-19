<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <form method="post" action="login_action.php">
    <input type="text" name="txtNome" placeholder="Nome">
    <input type="text" name="txtCPF" placeholder="CPF">
    <input type="text" name="txtEmail" placeholder="Email">
    <input type="password" name="txtSenha" placeholder="Senha">
    <button type="submit" name="btnLogin">Login</button>
    <button type="button" onclick="location.href='primeiro_acesso.php'">Primeiro Acesso</button>
  </form>
</body>
</html>