<?php
    /*
    This interfaces is an database abstraction
    in the case of this application the only thing that will be store is the portfolio
    */
    include('IDataObject.php');
    interface IDataBase {
        public function store(IDataObject $dataObject);
        public function get(string $projectName): IDataObject;
        public function getAll(): array;
    }

?>