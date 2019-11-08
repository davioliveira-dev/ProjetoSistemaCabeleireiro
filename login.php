<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="login.css">
        <title>Salão de Cabelereiro</title>
    </head>
    <body>
        <div class="box">
            <div class="cont">
                <form class="form" method="POST" action="logado.php">
                    <center><div class="user"></div></center><br>
                    <label class="login">E-mail</label><br>
                    <input type="email" name="email" class="input" required>
                    <br><label class="senha">Senha</label><br>
                    <input type="password" name="senha" class="input" required><br>
                    <br><input type="submit" name="submit" value="Logar" class="submit"><br>
                    <a href="https://google.com"><label class="ems">Esqueceu sua senha?</label></a><br>
                    <a href="cadastro.php"><input type="button" name="cadastar" class="submit" value="Cadastrar-se"></a>
                </form>
            </div>
        </div>
    </body>
</html>