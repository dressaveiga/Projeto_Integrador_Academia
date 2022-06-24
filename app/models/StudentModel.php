<?php 

    class StudentModel {

        private $id;
        private string $studentname;
        private string $email;
        private string $password;
        private string $age;
        private string $height;
        private string $weight;
        private string $cpf;
        private string $rg;
        


        public function setId(int $id) {
            $this->id = $id;
        }

        public function getId(): int {
            return $this->id;
        }

        public function setStudentname(string $studentname){
            $this->studentname = $studentname;
        }

        public function getStudentname(){
            return $this->studentname;
        }

        public function setEmail(string $email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPassword(string $password){
            $this->password = $password;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setAge(string $age){
            $this->age = $age; 
        }

        public function GetAge(){
            return $this->age;
        }

        public function setWeight(string $weight){
            $this->weight = $weight;
        }

        public function getWeight(){
            return $this->weight;
        }

        public function setHeight(string $height){
            $this->height = $height;
        }

        public function getHeight(){
            return $this->height;
        }


        public function setCpf(string $cpf){
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setRg(string $rg){
            $this->rg = $rg;
        }

        public function getRg(){
            return $this->rg;
        }

    }