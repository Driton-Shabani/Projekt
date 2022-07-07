<?php
    class AssignmentController{

        public function assignments(){

            $select = new Model;
            $getall = $select->selectAll();
            require 'app/Views/Assignments.view.php';
        }

    }
?>