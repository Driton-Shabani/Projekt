<?php

    class Model
    {

        public string $Name;
        public string $Email;
        public string $Tel;
        public string $Werkzeugname;
        public string $Dringlichkeit;
        public int $fk_WerkzeugID;

        /**
         * @var PDO
         */

        public $db;

        public function __construct(string $Name, string $Email, string $tel, string $Dringlichkeit, int $fk_WerkzeugID)
        {
            $this->Name = $Name;
            $this->Email = $Email;
            $this->Tel = $tel;
            $this->Dringlichkeit = $Dringlichkeit;
            $this->fk_WerkzeugID = $fk_WerkzeugID;
            
            
            $this->db = db();
        }

        public function create()
        {
            
            if($this->Dringlichkeit == "sehr tief"){
                $AnzTage = 25;
            }
            elseif($this->Dringlichkeit == "tief"){
                $AnzTage = 20;
            } 
             elseif($this->Dringlichkeit == "normal"){
                $AnzTage = 15;
            }
            elseif($this->Dringlichkeit == "hoch"){
                $AnzTage = 10;
            }
            elseif($this->Dringlichkeit == "sehr hoch"){
                $AnzTage = 5;
            }

            $statement = $this->db->prepare("INSERT INTO auftrag(Name, Email, TelefonNr, Dringlichkeit, fk_WerkzeugID) 
            VALUES (:Namen, :Email, :Telefon, :Dringlichkeit, :fk_WerkzeugID);");
            
            $statement->bindParam(':Namen', $this->Name, PDO::PARAM_STR);
            $statement->bindParam(':Email', $this->Email, PDO::PARAM_STR);
            $statement->bindParam(':Telefon',$this->Tel, PDO::PARAM_STR);
            $statement->bindParam(':fk_WerkzeugID',$this->fk_WerkzeugID, PDO::PARAM_STR);
            $statement->bindParam(':Dringlichkeit', $AnzTage);

            return $statement->execute();    
        }

        public function selectTools(): array
        {
            $statement = $this->db->prepare("SELECT * FROM werkzeug;");
            $statement->execute();

            return $statement->fetchAll();
        }

        public function selectall() : array
        {
         
            $statement = $this->db->prepare("SELECT * FROM auftrag JOIN werkzeug ON werkzeug.WerkzeugID = auftrag.fk_WerkzeugID");
            $statement->execute();

            return $statement->fetchAll();
        }
        
        public function select(){
            
            $statement = $this->db->perpare('SELECT * FROM auftrag JOIN werkzeug ON werkzeug.Werkzeugname = :Werkzeugname');
            $statement->bindParam(':Werkzeugname', $Werkzeug);
            $statement->execute();

            return $statement->fetchAll();
        }

        
        public function update(int $AuftragID)
        {

            $statement = $this->db->prepare('UPDATE auftrag SET Name = :name, Email = :Email, TelefonNr  = :tel, Dringlichkeit = :Dringlichkeit
            WHERE auftrag.AuftragID = :AuftragID');
            
            $statement->bindParam(':Namen', $this->Name, PDO::PARAM_STR);
            $statement->bindParam(':Email', $this->Email, PDO::PARAM_STR);
            $statement->bindParam(':Telefon',$this->Tel, PDO::PARAM_STR);
            $statement->bindParam(':Dringlichkeit', $AnzTage);
            $statement->bindParam(':AuftragID', $AuftragID);

            return $statement->execute();
        }

    }
?>