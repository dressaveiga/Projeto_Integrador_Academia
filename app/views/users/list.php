<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>Alunos</h1>

    <table>

        <tr>
            <td>
                ID
            </td>

            <td>
                NOME
            </td>

            <td>
                EMAIL
            </td>

            <td>
                AGE
            </td>

            <td>
                HEIGHT
            </td>

            <td>
                WEIGHT
            </td>

            <td>
                CPF
            </td>

            <td>
                RG
            </td>

        </tr>

        <?php foreach($data['students'] as $student): ?>

        <tr>
            <td>
                <?= $student['id'] ?>
            </td>

            <td>
                <?= $student['studentname'] ?>
            </td>

            <td>
                <?= $student['email'] ?>
            </td>

            <td>
                <?= $student['age'] ?>
            </td>

            <td>
                <?= $student['height'] ?>
            </td>

            <td>
                <?= $student['weight'] ?>
            </td>

            <td>
                <?= $student['cpf'] ?>
            </td>

            <td>
                <?= $student['rg'] ?>
            </td>

            <td>
             <a href="../controllers/StudentController.php?action=deleteStudentById&id= <?= $student['id']  ?> "> Excluir</a>
           
            </td>

            <td>
             <a href="../controllers/StudentController.php?action=findStudentById&id= <?= $student['id']  ?> ">Editar</a>
            </td>

        </tr>

    <?php endforeach; ?>
    </table>

    <a href="../../index.php"> Cadastrar novo usuario</a>
            

</body>

</html>