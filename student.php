<?php 
    class Student{
        public function login() {
            global $message;
            if(isset($_POST) && $_POST['login']== 'admin' && isset($_POST) && $_POST['password'] == 'admin'){
                $_SESSION['login'] = true;
                $message = '';
            }
            else{
                $message = 'Логін або пароль був введен невірно!!';
            }
        }

        function redirect($url) {
            header('location: '.$url);
        }

        function add_student() {
            $students = array();
            global $message;
            if(isset($_COOKIE['students']) && $_COOKIE['students']){
                $students = unserialize($_COOKIE['students']);
            }
            if(isset($_POST) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['surename']) && !empty($_POST['surename']) && isset($_POST['age']) && !empty($_POST['age'])){
                $students[count($students)] = array("name"=>$_POST['name'], "surename"=> $_POST['surename'], "age"=>$_POST['age']);
                $message = '';
            }
            else{
                $message = "Схоже не всі поля були введені";
            }
            setcookie("students", serialize($students));
            $this->redirect("index.php");
        }
        function logOut() {
            if(isset($_POST['logout'])){
                unset($_SESSION['login']);
                $this->redirect('index.php');
            }
        }
    }

?>