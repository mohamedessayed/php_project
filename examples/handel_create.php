<?php

// var_dump($_GET);
// var_dump($_POST);
// var_dump($_SERVER);

// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//     # code...
//     $backUrl = 'http://localhost/project-one/examples/create.php';

//     if (isset($_SERVER['HTTP_REFERER'])) {
//         # code...
//         $backUrl = $_SERVER['HTTP_REFERER']; //geting the pervious page
//     }
//     header("location:$backUrl"); //redirect to new page
// }

if(!isset($_POST['submittedBtn'])) {
    header("location:http://localhost/project-one/examples/create.php"); //redirect to new page
}

//1- reciving data

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$age = $_POST['age'];
$email = $_POST['email'];



// clean data

// trim() delete the space before and after word
//htmlspecialchars() stope excuting scripting into server


// $first = trim($first);
// $last = trim($last);
// $age = trim($age);

// $first = htmlspecialchars($first);
// $last = htmlspecialchars($last);
// $age = htmlspecialchars($age);


$first = htmlspecialchars(trim($first));
$last = htmlspecialchars(trim($last));
$email = htmlspecialchars(trim($email));
$age = htmlspecialchars(trim($age));

//validation

$error = [];

if (empty($first)) {
    # code...
    $error['first_name'] = 'first name is required <br>';
}elseif(strlen($first) < 3){
    $error['first_name'] = 'first name can not be less than 3 chars <br>';
}

if (empty($last)) {
    # code...
    $error['last_name'] =  'last name is required <br>';
}elseif(strlen($last) < 3){
    $error['last_name'] =  'last name can not be less than 3 chars <br>';
}

if (empty($email)) {
    # code...
    $error['email'] =  'email is required <br>';
}elseif(strlen($email) < 3){
    $error['email'] =  'email can not be less than 3 chars <br>';
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $error['email'] =  'email is not valid <br>';
}

if (empty($age)) {
    # code...
    $error['age'] =  'age is required <br>';
}elseif($age < 18){
    $error['age'] =  'age can not be less than 18 years old <br>';
}elseif(!filter_var($age,FILTER_VALIDATE_INT)){
    $error['age'] =  'age is not valid <br>';
}

if (count($error) > 0) {
    # code...
    session_start(); // start session
    $_SESSION["validation_error"] = $error; //store error arry into session

    header("location:http://localhost/project-one/examples/create.php"); //redirect to new page

} else{
    session_start(); // start session
    $_SESSION["message"] ="saved successfully";

    header("location:http://localhost/project-one/examples/users.php"); //redirect to new page

}
