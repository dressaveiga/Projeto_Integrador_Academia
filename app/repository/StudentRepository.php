<?php 

    require_once __DIR__ . "/../connection/Connection.php";
    require_once __DIR__ . "/../models/studentModel.php";

    class StudentRepository {

        public PDO $conn;

        function __construct()
        {
            $this->conn = Connection::getConnection();
        }

        public function create(StudentModel $student) {

            try {

                $query = "INSERT INTO students (studentname, email, password, age, height, weight, cpf, rg) VALUES (:studentname, :email, :password,:age, :height, :weight, :cpf, :rg)";
                $prepare = $this->conn->prepare($query);
                $prepare->bindValue(":studentname", $student->getStudentname());
                $prepare->bindValue(":email", $student->getEmail());
                $prepare->bindValue(":password", $student->getPassword());
                $prepare->bindValue(":age", $student->getAge());
                $prepare->bindValue(":height", $student->getHeight());
                $prepare->bindValue(":weight", $student->getWeight());
                $prepare->bindValue(":cpf", $student->getCpf());
                $prepare->bindValue(":rg", $student->getRg());
                
                $prepare->execute();

                return $this->conn->lastInsertId();
                
            } catch(Exception $e) {
                    print("Erro ao inserir usuário no banco de dados");
            }
        }

        public function findAll(): array {

            $table = $this->conn->query("SELECT * FROM students");
            $students  = $table->fetchAll(PDO::FETCH_ASSOC);

            return $students;
        }

        public function findstudentById(int $studentId) {
            $query = "SELECT * FROM students WHERE students.id = ?";
            
            $prepare = $this->conn->prepare($query);
            $prepare->bindParam(1, $studentId, PDO::PARAM_INT);
            if($prepare->execute()){
            
                $usuario  = $prepare->fetchObject("studentModel");
            
            } else {
                $usuario = null;
            }
            return $usuario;
        }
        

        public function update(StudentModel $student) {

            $query = "UPDATE students SET studentname = :studentname, email = :email, password = :password, age = :age, height = :height, weight = :weight, cpf = :cpf, rg = :rg    WHERE  id = :id";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":studentname", $student->getstudentname());
            $prepare->bindValue(":email", $student->getEmail());
            $prepare->bindValue(":password", $student->getPassword());
            $prepare->bindValue(":age", $student->getAge());
            $prepare->bindValue(":height", $student->getHeight());
            $prepare->bindValue(":weight", $student->getWeight());
            $prepare->bindValue(":cpf", $student->getCpf());
            $prepare->bindValue(":rg", $student->getRg());
            $prepare->bindValue(":id", $student->getId());
            $prepare->execute();
        }

        public function deleteStudentById(int $id) {

            $query = "DELETE FROM students WHERE id = :id";

            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":id", $id);
            $prepare->execute();
            
        }
    }