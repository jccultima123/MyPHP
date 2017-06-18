<?php

// checking requirements first using this class
require_once("classes/App.php"); $app = new App();

// load the auth class
require_once("classes/Auth.php"); $auth = new Auth();

// load the registration class for user's registration stuffs
require_once("classes/Registration.php"); $registration = new Registration();

// user management class
require_once("classes/User.php"); $user = new User();

/**
 * Now put your data here and include in render()
 */
$data = array(
    'user_types' => $registration->getUserTypes()
);

/**
 * You can add $app->multi_user_status condition
 * if you want a single-user mode
 */
if (!$auth->isUserLoggedIn()) {
    // echo "<h2>".$auth->generateRandomCode(5)."</h2>"; // TRY THIS ONE (CODE GENERATOR). SAVES TO DATABASE
    $app->render("forgot_password", $data);
}