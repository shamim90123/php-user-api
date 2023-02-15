<?php

require 'UserRepository.php';

require 'Validation.php';

class UserController
{

    public function index()
    {
      $product = new UserRepository();

      $product->getAll();
    }


    public function create($firstName, $lastName, $email, $mobileNo)
    {

      // let's validate form data
      $validate = new Validation();
      $validate->formValidation($firstName, $lastName, $email, $mobileNo);

      // let's add user
      $product = new UserRepository();

      $product->createUser($firstName, $lastName, $email, $mobileNo);
    }
}

?>