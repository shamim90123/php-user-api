<?php

require 'UserController.php';

$product = new UserController();

 // this will work for list
$product->index();

// this will work for user create
if(isset($_POST['submit'])) {
  $product->create($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['mobile_no']);
}

?>
