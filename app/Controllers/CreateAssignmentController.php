<?php
    class CreateAssignmentController
    {
        public function index()
        {
            require 'app/Views/CreateAssignment.view.php';
        }

        public function create()
        {
            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                $insert = new Model($_POST['Name'], $_POST['Email'], $_POST['Werkzeugname'], $_POST['Dringlichkeit']);
                $insertinto = $insert->create();

                header('Location: ')
            }
        }
        
        public function validate()
        {            
            $name = $_POST['Name'] ?? '';
            $email = $_POST['Email'] ?? '';
            $phone = $_POST['Telefon'] ?? '';
            
            

            if($_SERVER['REQUEST_METHOD']==='POST') 
            {
                if ($email === '') 
                {
                    echo "<script type='text/javascript'>alert('Bitte geben sie eine Email ein');</script>";                    
                } 
                elseif (strpos($email, '@') === false) 
                {
                    echo "<script type='text/javascript'>alert('Diese Emailadresse ist ungültig.');</script>";
                }  
                elseif (!preg_match('/^[\+ 0-9]+$/', $phone)) 
                {
                    echo "<script type='text/javascript'>alert('Diese Telefonnummer ist ungültig.');</script>";
                }                                     
            }

            else 
            {
                header('Location: /createassignment');
            }
    
        } 
                

    }
    

?>