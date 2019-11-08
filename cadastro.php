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
                        <div class="coluna1">
                            <li>
                                <label>Nome:</label>
                                <input type="text" name="nome" id="nome" class ="input" required minlength="3" maxlength="50">
                            </li>
                            <li>
                                <label>Endereço:</label>
                                <input type="text" name="endereco" id="endereco" class ="input" required minlength="5" maxlength="100"><br>
                            </li>
                            <li>
                                <label>Telefone:</label>
                                <input type="text" name="fone" id="fone" class ="input" required minlength="11" maxlength="11" onkeypress="if(!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"><br>
                            </li>
                            <li>
                                <label>Data de Nascimento:</label>
                                <input type="date" name="data_nasc" id="data_nasc" class ="input" required><br>
                            </li>
                            <li>
                                <label>Sexo(Masculino ou Feminino):</label>
                                <input type="text" name="sexo" id="sexo" class ="input" required minlength="8" maxlength="9"><br>    
                            </li>
                        </div>
                        <div class="coluna2">
                            <li>
                                <label>CPF (Somente números!):</label>
                                <input type="text" name="cpf" id="cpf" class ="input" required minlength="11" maxlength="11" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"><br>
                            </li>
                            <li>
                                <label>RG:(Somente números!)</label>
                                <input type="text" name="rg" id="rg" class ="input" required minlength="11" maxlength="11" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"><br>
                            </li>
                            <li>
                                <label>Email:</label>
                                <input type="email" name="email" id="email" class ="input" required minlength="5" maxlength="50"><br>
                            </li>
                            <li>
                                <label>Senha(máx. 15 caracteres!):</label>
                                <input pattern="[a-zA-Z0-9]+" type="password" name="senha" id="senha" class="input" required minlength="8" maxlength="15"><br>
                            </li>
                            <li>
                                <label>Foto:</label>
                                <input type="file" class="foto" accept="image/png, image/jpeg"  multiple>
                            </li>
                        </div>
                        <input type="submit" value="Cadastrar" class="submit">
                    </ul>
                </form>
            </div>
        </div>
    </body>
</html>