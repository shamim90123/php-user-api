

<?php

  echo "<table style='border: solid 1px black;'>";
  echo "<tr><th>Sl No.</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Mobile No.</th></tr>";

  class UserList extends RecursiveIteratorIterator {
    function __construct($it) {
      parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
      return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
      echo "<tr>";
    }

    function endChildren() {
      echo "</tr>" . "\n";
    }
  }

?>


<html>
<head>
  <title>Homepage</title>
</head>

<body>
<a href="add.html">Add New User</a><br/><br/>
</body>
</html>
