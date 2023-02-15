<?php

require __DIR__ . '/UserInterface.php';

require 'DBConnection.php';

require 'UserList.php';

class UserRepository implements getUserInterface {

  public $connection;

  public function __construct()
    {

      $dbConnection = new DBConnection();

      $this->connection = $dbConnection->connect();

    }


  public function getAll()
  {
    $stmt = $this->connection->prepare("SELECT id, first_name, last_name, email, mobile_no FROM employees");

    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new UserList(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
      echo $v;
    }
  }

  public function createUser($firstName = null, $lastName = null, $email = null, $mobileNo = null)
  {
    try {

      $sql = "INSERT INTO employees (first_name, last_name, email, mobile_no)
      VALUES ('$firstName', '$lastName', '$email', '$mobileNo')";

      // use exec() because no results are returned
      $this->connection->exec($sql);

      echo "  New record created successfully";
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }
}

?>