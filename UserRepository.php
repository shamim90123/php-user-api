<?php

require __DIR__ . '/UserInterface.php';
require 'DBConnection.php';
require 'UserList.php';

class UserRepository implements getUserInterface {

  private $connection;

  public function __construct()
  {
    $dbConnection = new DBConnection();
    $this->connection = $dbConnection->connect();
  }

  public function getAll()
  {
    $query = "SELECT id, first_name, last_name, email, mobile_no FROM employees";
    $result = $this->connection->query($query);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Sl No.</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Mobile No.</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['mobile_no'] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No records found";
    }
  }

  public function createUser($firstName = null, $lastName = null, $email = null, $mobileNo = null)
  {
    try {
      $sql = "INSERT INTO employees (first_name, last_name, email, mobile_no)
      VALUES ('$firstName', '$lastName', '$email', '$mobileNo')";

      if ($this->connection->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $this->connection->error;
      }
    } catch(Exception $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}

?>
