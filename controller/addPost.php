<?php
//*session start

session_start();

//*input collection
$title=$_REQUEST['title'];
$detail=$_REQUEST['detail'];
$name=$_REQUEST['name'];
$author=$_REQUEST['author'];


$errors=[];

//*Validation

if (empty($title)) {
    $errors['title_error']="Subject Not Found?";
} elseif(strlen($title)>=50){
    $errors['title_error']="Long Title do not exist";
}

if (empty($detail)) {
    $errors['detail_error']= "Please add the details";
}
if (empty($name)) {
    $errors['name_error']= "Please add your name";
}

if (count($errors)> 0) {


    //*Redirect to the previous one
    //* header() is redirect or transfer function
    //*session making


    $_SESSION['form_errors']=$errors;
    $_SESSION['old']=$_REQUEST;
    header("Location:../index(7).php");
} else {


    //*Move forward
}


?>