<?php

if(!isset($_POST['btnSubmit'])) {
    header("location:http://localhost/project-one/examples/profile/upload-image.php"); //redirect to new page
}

// var_dump($_POST);
$image_file = $_FILES['file'];

//dstruct file to name, type and temp dir

$image_name = $image_file['name'];
$image_size = $image_file['size']; //file size in bytes
$image_temp = $image_file['tmp_name'];

//detrmin the server target file path
$targe_dir = '../../uploads';

//detrminig avaliable file extenstion
$mimes_type = ['JPG','JPEG','PNG','WEBP'];

//get file extention
$extention = pathinfo($image_name,PATHINFO_EXTENSION);

//fake file name
$val = strtotime("2012-03-27 18:47:00");
$fake_name = random_int(400,4000000)."-file-$val.".$extention;

//validation

$upload_ok = true; //flag for move file

//validation for type

/**
 * 
 * strtoupper($extention) transform text to uppercase
 * strtolower($extention) transform text to lowercase
 */

if(!in_array(strtoupper($extention),$mimes_type)){
    echo "file type is not image";
    $upload_ok = false;
}

//validation for size

$size_in_megaByte = ($image_size/1024)/1024;

if ($size_in_megaByte >= 1) {
    # code...
    echo "file size must to be less than 1 MB";
    $upload_ok = false;
}


//move file from tmp to targe dir

if ($upload_ok) {
    # code...
    
    if (!file_exists("$targe_dir/$fake_name")) {
        # code...
        move_uploaded_file($image_temp,"$targe_dir/$fake_name");
        echo "file upload Sucessfully";
    }
}