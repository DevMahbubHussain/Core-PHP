<?php

require_once 'Form_Validation.php';
class UserRegistration{
        use FormValidationTraint;

        public function registerUser($fname,$lname,$email,$profileImage)
        {
            $this->validateFirstName($fname);
            $this->validateLastName($lname);
            $this->validateEmail($email);
            $this->validateProfileImage($profileImage);

             $targetDirectory = 'uploads/';
             $targetFileName = $targetDirectory . basename($profileImage['name']);
             move_uploaded_file($profileImage['tmp_name'], $targetFileName);

             echo 'User registered successfully!';

        }
}