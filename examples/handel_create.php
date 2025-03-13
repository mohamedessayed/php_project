<?php

// var_dump($_GET);
// var_dump($_POST);

//1- reciving data

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$age = $_POST['age'];



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
$age = htmlspecialchars(trim($age));

//validation

if (empty($first)) {
    # code...
    echo 'first name is required <br>';
}elseif(strlen($first) < 3){
    echo 'first name can not be less than 3 chars <br>';
}

if (empty($last)) {
    # code...
    echo 'last name is required <br>';
}elseif(strlen($last) < 3){
    echo 'last name can not be less than 3 chars <br>';
}

if (empty($age)) {
    # code...
    echo 'age is required <br>';
}elseif($age < 18){
    echo 'age can not be less than 18 years old <br>';
}

//store data in database

echo "saved successfully";