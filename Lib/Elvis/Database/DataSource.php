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

    # Variável que guarda a conexão PDO.
    protected static $conn;
    # Private construct - garante que a classe só possa ser instanciada internamente.
    private function __construct()
    {
        # Informações sobre o banco de dados:
        $conn_host = "localhost";
        $conn_nome = "sgp";
        $conn_usuario = "root";
        $conn_senha = "Admin123";
        $conn_driver = "mysql";
        try
        {
            # Atribui o objeto PDO à variável $conn.
            self::$conn = new \PDO("$conn_driver:host=$conn_host; dbname=$conn_nome", $conn_usuario, $conn_senha);
            # Garante que o PDO lance exceções durante erros.
            self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            # Garante que os dados sejam armazenados com codificação UFT-8.
            //self::$conn->exec('SET NAMES utf8');
        }
        catch (\PDOException $e)
        {
            echo "Erro!: " . $e->getMessage();
        }
    }
    # Método estático - acessível sem instanciação.
    public static function conexao()
    {
        # Garante uma única instância. Se não existe uma conexão, criamos uma nova.
        if (!self::$conn)
        {
            new DataSource();
        }
        # Retorna a conexão.
        return self::$conn;
    }

}