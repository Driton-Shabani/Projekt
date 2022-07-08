<?php
    class AssignmentController{

        public function index()
        {
            
            $tasks = new Model("","","","",0);
            $tasks = $tasks->selectAll();
            
            
            require 'app/Views/Assignments.view.php';
        }

    }
?>