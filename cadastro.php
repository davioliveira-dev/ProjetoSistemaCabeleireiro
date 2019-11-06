<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="cadastro.css">
        <title>Salão de Cabelereiro</title>
    </head>
    <body>
        <div class="box">
            <div class="cont">
                <form class="form" method="POST" action="processa.php">
                    <br><h1>Cadastro de Cliente</h1>
                    <ul>
                        <li>
                            <label>Nome:</label>
                            <input type="text" name="nome" class ="input" required>
                        </li>
                        <li>
                            <label>Endereço:</label>
                            <input type="text" name="endereco" class ="input" required><br>
                        </li>
                        <li>
                            <label>Telefone:</label>
                            <input type="text" name="fone" class ="input" required><br>
                        </li>
                        <li>
                            <label>Data de Nascimento:</label>
                            <input type="text" name="data_nasc" class ="input" required><br>
                        </li>
                        <li>
                            <label>RG:</label>
                            <input type="text" name="rg" class ="input" required><br>
                        </li>
                        <li>
                            <label>CPF:</label>
                            <input type="text" name="cpf" class ="input" required><br>
                        </li>
                        <li>
                            <label>Sexo:</label>
                            <input type="text" name="sexo" class ="input" required><br>
                        </li>
                        <li>
                            <label>Email:</label>
                            <input type="email" name="email" class ="input" required><br>
                        </li>
                        <li>
                            <label>Senha:</label>
                            <input type="text" name="senha" class ="input" required><br>
                        </li>
                        <li>
                            <label>Foto:</label>
                            <input type="file" name="imagem"><br>
                        </li>

                        <br><input type="submit" value="Cadastrar" class="submit">
                    </ul>
                    
                </form>
            </div>
        </div>
    </body>
</html>