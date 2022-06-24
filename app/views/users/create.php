<!DOCTYPE html>

<html lang = "pt-br">

    <head>
        <meta charset = "utf-8">
        <title>Cadastrar Aluno</title>
    </head>
    <body>
        <h1>Cadastrar Aluno</h1>
        <form method = "post" action = "../../controllers/StudentController.php?action=create">
            <label>Nome: </label>
            <input type = "text" name = "studentname"
            placeholder = "Digite o seu nome">
            <br><br>
            <label>E-mail: </label>
            <input type = "text" name = "email"
            placeholder = "Digite o seu e-mail">
            <br><br>
            <label>Senha: </label>
            <input type = "text" name = "password"
            placeholder = "Digite a sua senha">
            <br><br>
            <label>Idade: </label>
            <input type = "text" name = "age"
            placeholder = "Digite o sua idade">
            <br><br>
            <label>Altura: </label>
            <input type = "text" name = "height"
            placeholder = "Digite o sua altura">
            <br><br>
            <label>Peso: </label>
            <input type = "text" name = "weight"
            placeholder = "Digite o seu peso">
            <br><br>
            <label>Cpf: </label>
            <input type = "text" name = "cpf"
            placeholder = "Digite o seu CPF">
            <br><br>
            <label>Rg: </label>
            <input type = "text" name = "rg"
            placeholder = "Digite o seu RG">
            <br><br>
            <input type = "submit" value = "Cadastrar">
        </form>
    
    </body>
</html>