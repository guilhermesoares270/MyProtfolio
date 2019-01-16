<?php
    // include('interfaces/IDataObject.php');
    class Repository implements IDataObject {
        
        private $repositoryID;
        private $repositoryName;
        private $description;

        public function __construct (int $id, string $name, string $des){
            if($id <= 0){
                //valor a ser inserido no db
                $this->repositoryName = $name;
                $this->description = $des;
            }else{
                $this->repositoryID = $id;
                $this->repositoryName = $name;
                $this->description = $des;
            }
            
        }

        public function schema(): string{
            return 'not implemented';
        }

        public function setName(string $name){
            $this->repositoryName = $name;
        }

        public function setDesscription(string $des){
            $this->description= $des;
        }

        public function setID(int $ID){
            return $this->repositoryID = $ID;
        }

        public function getName(){
            return $this->repositoryName;
        }

        public function getDescription(){
            return $this->description;
        }
        
        public function getID(){
            return $this->repositoryID;
        }
    }
?>