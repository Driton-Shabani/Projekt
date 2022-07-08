<?php
    class CreateAssignmentController
    {
        public function index()
        {
            $tools = new Model("","","","", 0);
            $tools = $tools->selectTools();
            
            require 'app/Views/CreateAssignment.view.php';
        }

        public function create()
        {

            $WerkzeugID = $_POST['Werkzeug'];

            $insert = new Model($_POST['Name'], $_POST['Email'], $_POST['Telefon'], $_POST['Dringlichkeit'], $WerkzeugID);
            $insert->create();
            header('Location: assignments');

        }
        

        public function validate()
        {     

            if($_SERVER['REQUEST_METHOD']==='POST') 
            {
                $Name = $_POST['Name'];
                $Email  = $_POST['Email'];
                $Tel = $_POST['Telefon'];
                $i = 0;
                
                if($Name === '')
                {
                    echo "<script type='text/javascript'>alert('Name darf nicht leer sein');</script>";
                    $i++;
                }
                elseif ($Email === '') 
                {
                    echo "<script type='text/javascript'>alert('Bitte geben sie eine Email ein');</script>";
                    $i++;           
                } 
                elseif (strpos($Email, '@') === false) 
                {
                    echo "<script type='text/javascript'>alert('Diese Emailadresse ist ungültig.');</script>";
                    $i++;
                    
                } 
                elseif ($Tel !== '') 
                {
                    if (!preg_match('/^[\+ 0-9]+$/', $Tel)) 
                    {
                        echo "<script type='text/javascript'>alert('Diese Telefonnummer ist ungültig.');</script>";
                        $i++;
                    }
                                       
                } 
                
                if($i == 0)
                {
                    header('Location: create-model');
                }



                

                
            }
        }
        
    }
    

?>