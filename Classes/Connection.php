<?php 

class Connection 
{
    protected $host ; 
    protected $dbname ;
    protected $dbuser;
    protected $dbpass;


    function __construct() 
    {
        $this->host = 'localhost';
        $this->dbname = 'e_commerce';
        $this->dbuser = 'root';
        $this->dbpass = '';
    }

    public function connect() 
    {
        try {
            //driver connection
            $dsn="mysql:host={$this->host};dbname={$this->dbname};";
            $connection = new PDO($dsn,$this->dbuser,$this->dbpass);
             return $connection;
        }
            catch(PDOException $e)
            {
                var_dump($e->getMessage());

            }
    }
}

