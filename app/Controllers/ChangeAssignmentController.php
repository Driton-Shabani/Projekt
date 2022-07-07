<?php
    class ChangeAssignmentController{

        public function changeassignment(){
            require 'app/Views/ChangeAssignment.view.php';
        }

        public function edit()
        {
            
        }
        public function validate(){
            $errors = [];
            $name = $_POST['Name'] ?? '';
            $email = $_POST['Email'] ?? '';
            $phone = $_POST['Telefon'] ?? '';
            
            

            if($_SERVER['REQUEST_METHOD']==='POST') {
                if($name === '') {
                    $errors[] = 'Bitte geben Sie einen Namen ein.';
                }
                
                if(($email) === '') {
                    $errors[] = 'Bitte geben Sie eine Email ein.';
                }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $errors = "Die Email-Adresse $email ist ungültig.";
                }
                if(($phone) === '') {
                    $errors[] = 'Bitte geben Sie eine Telefonnummer ein.';
                }elseif (!preg_match('/(\+?\(?[0-9]{2,3}\)?)([ -]?[0-9]{2,4}){3}/', $phone)) {
                    $errors[] = "Die Telefonnummer: $phone ist ungültig.";
                    }
                    if (count($errors) === 0) {
                        require 'app/Views/Assignmets.view.php';
                    } else {
                        require 'app/Views/CreateAssignment.view.php';
                    }                                                
            }
            else {
                header('Location: ' . ROOT_URL . '/createassignment');
                die();
            }
        }
    }
?>