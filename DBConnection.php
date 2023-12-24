<?php
/**
 * Database Connection
 */
class DBConnection
{
	public function connect()
	{
                // $databaseHost = 'mysql-container';
                // $port = 3307;
                // $databaseName = 'express_app';
                // $databaseUsername = 'shamim';
                // $databasePassword = '123456';

                // $servername = $_ENV['MYSQL_HOST'];
                // $username = $_ENV['MYSQL_USER'];
                // $password = $_ENV['MYSQL_PASSWORD'];
                // $dbname = $_ENV['MYSQL_DATABASE'];

                // $conn = new mysqli($servername, $username, $password, $dbname);

                $conn = new mysqli("mysql-container", "shamim", "123456", "express_app");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }


                // $conn = new PDO("mysql:host=$databaseHost;port=$port;dbname=$databaseName", $databaseUsername, $databasePassword);
                // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $conn;
	}
}

?>