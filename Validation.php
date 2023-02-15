<?php

/**
 * Form Validation
 */
class Validation
{

	public function formValidation($firstName, $lastName, $email, $mobileNo)
 	{

		// checking empty fields
		if(empty($firstName) || empty($lastName) || empty($email) || empty($mobileNo)) {

			if(empty($firstName)) {
				echo "<font color='red'>Name field is empty.</font><br/>";
			}

			if(empty($lastName)) {
				echo "<font color='red'>Age field is empty.</font><br/>";
			}

			if(empty($email)) {
				echo "<font color='red'>Email field is empty.</font><br/>";
			}

			if(empty($mobileNo)) {
				echo "<font color='red'>Email field is empty.</font><br/>";
			}

			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {

			return true;
		}

	}

}

?>