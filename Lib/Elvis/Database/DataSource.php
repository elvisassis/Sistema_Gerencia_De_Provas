<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 15/02/17
 * Time: 19:29
 */

namespace Elvis\Database;

define('HOST', 'localhost');
define('PORT','3307');
define('DBNAME','cadasto');
define('CHARSET','UTF-8');
define('USER', 'root');
define('PASSWORD', 'Admin123');

class DataSource
{


    private $conn;

    /**
     * conexao constructor.
     */
    public function __construct()
    {
    }

    public function conexao()
    {
        try {
            $this->conn = new \PDO('mysql:host=localhost; port=3306; dbname=sgp', 'root', 'Admin123');
        } catch (\PDOException $e) {
            echo "Erro!: " . $e->getMessage();
        }
        return $this->conn;
    }
}