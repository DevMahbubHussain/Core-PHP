<?php 

trait FormValidationTraint
{

    protected function validateFirstName($fnmae)
    {
        if(empty($fnmae))
        {
            throw new Exception('First Name is Required');

        }
        return true;

    }
    protected function validateLastName($lnmae)
    {
        if(empty($lnmae))
        {
            throw new Exception('Last Name is Required');

        }
        return true;

    }
    protected function validateEmail($email)
    {
        if(empty($email))
        {
            throw new Exception('Email is Required');

        }
        return true;

    }

    protected function validateProfileImage($profileImage)
    {
        if (empty($profileImage['name'])) {
            throw new Exception('Profile image is required');
        }
        
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $fileExtension = strtolower(pathinfo($profileImage['name'], PATHINFO_EXTENSION));
        
        if (!in_array($fileExtension, $allowedExtensions)) {
            throw new Exception('Invalid file format. Allowed formats: JPG, JPEG, PNG');
        }
        
        // Add additional validation rules for profile image if needed
        
        return true;
    }
    
}
