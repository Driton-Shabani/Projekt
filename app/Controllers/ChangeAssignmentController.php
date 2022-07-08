<?php
    class ChangeAssignmentController{

        public function index()
        {
            require 'app/Views/ChangeAssignment.view.php';
        }

        public function edit()
        {
            $AuftragID = $_POST['AuftragID'];

            $edit = new Model($_POST['Name'], $_POST['Email'], $_POST['Telefon'], $_POST['Dringlichkeit'], $_POST['Werkzeug']);
            $edit->update($AuftragID);

        }
        
        
    }
?>