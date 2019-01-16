<?php
    include('interfaces/IDataBase.php');
    include('repository.php');
    class MySQl implements IDataBase{

        private $pdo;
        private $aaa;

        public function __construct(){
            $this->aaa = 'value aaa';

            $host = '127.0.0.1';
            $db   = 'portfolio';
            $user = 'root';
            $pass = '';
            $charset = 'utf8mb4';

            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            try {
                $this->pdo = new PDO($dsn, $user, $pass, $options);
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
        }
        
        //Work
        public function store(IDataObject $dataObject){
            try{
                $sql = 'INSERT INTO repositories(projectName, description) VALUES(:name, :des)';
                $query = $this->pdo->prepare($sql);
                $query->execute([':name' => $dataObject->getName(), ':des' => $dataObject->getDescription()]);
            }catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
        }

        public function get(string $projectName): IDataObject{
            $repo = null;
            try{
                $sql = 'SELECT * FROM repositories WHERE projectName = :name';
                $query = $this->pdo->prepare($sql);
                $query->execute([':name' => $projectName]);

                $res = $query->fetch();
                $repo = new Repository($res['projectID'], $res['projectName'], $res['description']);
            }catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
            return $repo;
        }

        public function getAll(): array{
            $repo = array();
            try{
                $sql = 'SELECT * FROM repositories';
                $query = $this->pdo->prepare($sql);
                $query->execute();

                $res = $query->fetchAll();
                while($row = array_shift($res)){
                    array_push($repo, new Repository($row['projectID'], $row['projectName'], $row['description']));
                }
                // $repo = new Repository($res['projectID'], $res['projectName'], $res['description']);
            }catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
            return $repo;
        }

        public function pdoTeste(){
            if($this->pdo == null){
                echo 'pdo null';
            }else{
                $sql = 'SELECT * FROM repositories';
                try{
                    $query = $this->pdo->prepare($sql);
                    $query->execute();
                    while($row = $query->fetch(PDO::FETCH_ASSOC)) 
                    {
                        print_r($row);
                    }
                }catch (\PDOException $e) {
                    throw new \PDOException($e->getMessage(), (int)$e->getCode());
                }
            }
        }
        
    }
?>