<?php
    class Constants {
        // Registration
        public static $passwordsDoNotMatch = "Your passwords don't match.";
        public static $passwordNotAlphanumeric = "Your password cand only contain numbers and letters.";
        public static $passwordLength = "Your password must be between 8 and 30 characters.";
        
        public static $emailInvalid = "Your email is invalid.";
        public static $emailsDoNotMatch = "Your emails don't match.";
        public static $emailTaken = "This email was already used to create an account.";
        
        public static $firstNameLength = "Your  name must be between 2 and 25 characters.";
        
        public static $lastNameLength = "Your last name must be between 2 and 25 characters.";

        public static $usernameLength = "Your username must be between 5 and 25 characters.";
        public static $usernameTaken = "This username already exists.";
        

        // Login
        public static $loginFailed = "Your username or password was incorrect";
}

?>