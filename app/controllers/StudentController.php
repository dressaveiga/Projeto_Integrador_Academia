<?php

// Exibe os erros em uma página web (DEVERIA ESTAR AQUI?).
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../repository/StudentRepository.php";
require_once __DIR__ . "/Controller.php";


function create(){
    
    $studentname = $_POST['studentname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    

    $student = new StudentModel();
    $student->setstudentname($studentname);
    $student->setEmail($email);
    $student->setPassword($password);
    $student->setAge($age);
    $student->setHeight($height);
    $student->setWeight($weight);
    $student->setCpf($cpf);
    $student->setRg($rg);

    $studentRepository = new StudentRepository();
    $id = $studentRepository->create($student);
    
    header("location: StudentController.php?action=findAll");
}

function update(){
    
    $id = $_POST['id'];
    $studentname = $_POST['studentname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    
    
    $student = new StudentModel();
    $student->setId($id);
    $student->setstudentname($studentname);
    $student->setEmail($email);
    $student->setPassword($password);
    $student->setAge($age);
    $student->setHeight($height);
    $student->setWeight($weight);
    $student->setCpf($cpf);
    $student->setRg($rg);

    $studentRepository = new StudentRepository();
    $studentRepository->update($student);
    
    header("location: StudentController.php?action=findAll");
}

function findAll()
{
    $studentRepository = new StudentRepository();

    $students = $studentRepository->findAll();
    $data['students'] = $students;
    //$data['titulo'] = "listar usuarios";
 

    Controller::loadView("users/list.php", $data);
}

function findStudentById()
{
    $idParam =  $_GET['id'];
    $studentRepository = new StudentRepository();
    $students = $studentRepository->findStudentById($idParam);
    $data['students'] = $students;

    Controller::loadView("users/edit.php", $data);
}

function deleteStudentById()
{
    $idParam = $_GET['id'];
    $studentRepository = new StudentRepository();    

    $studentRepository->deleteStudentById($idParam);

    header("location: StudentController.php?action=findAll");
}

function padrao() {
    echo("DEU CERRTO");
}

?>