<?php

$id = $data['students'] -> getId();
$name = $data['students'] -> getStudentname();
$email = $data['students'] -> getEmail();
$password = $data['students'] -> getPassword();
$age = $data['students'] -> getAge();
$height = $data['students'] -> getHeight();
$weight = $data['students'] -> getWeight();
$cpf = $data['students'] -> getCpf();
$rg = $data['students'] -> getRg();

?>

<!DOCTYPE html>

<html lang = "pt-br">

    <head>
        <meta charset = "utf-8">
        <title>Editar Aluno</title>
    </head>
    <body>
        <h1>Cadastrar Aluno</h1>
        <form method = "post" action = "StudentController.php?action=update">

            <input type="hidden" name="id" value="<?= $id ?>" >

            <label>Nome: </label>
            <input type = "text" name = "studentname"
            placeholder = "Digite o seu nome" value="<?= $name ?>">
            <br><br>
            <label>E-mail: </label>
            <input type = "text" name = "email"
            placeholder = "Digite o seu e-mail" value="<?= $email ?>">
            <br><br>
            <label>Senha: </label>
            <input type = "text" name = "password"
            placeholder = "Digite a sua senha" value="<?= $password ?>">
            <br><br>
            <label>Idade: </label>
            <input type = "text" name = "age"
            placeholder = "Digite o sua idade" value="<?= $age ?>">
            <br><br>
            <label>Altura: </label>
            <input type = "text" name = "height"
            placeholder = "Digite o sua altura" value="<?= $height ?>">
            <br><br>
            <label>Peso: </label>
            <input type = "text" name = "weight"
            placeholder = "Digite o seu peso" value="<?= $weight ?>">
            <br><br>
            <label>Cpf: </label>
            <input type = "text" name = "cpf"
            placeholder = "Digite o seu CPF" value="<?= $cpf ?>">
            <br><br>
            <label>Rg: </label>
            <input type = "text" name = "rg"
            placeholder = "Digite o seu RG" value="<?= $rg ?>">
            <br><br>
            <input type = "submit" value = "Editar">
        </form>
    
    </body>
</html>