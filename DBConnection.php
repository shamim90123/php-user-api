<?php
/**
 * Database Connection
 */
class DBConnection
{
	public function connect()
	{
        $databaseHost = 'localhost';
        $databaseName = 'test_db';
        $databaseUsername = 'root';
        $databasePassword = '123456';

        $conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName", $databaseUsername, $databasePassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
	}
}

?>