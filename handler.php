<?php 
require_once ("include/initialize.php"); 
$req = $_POST; 
$USERNAME = $req['USERNAME'];
$name = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'db_elearning';

$con = mysqli_connect($name, $user, $pass, "$dbname");
if (!$con) {
    die('Could not connect to database_name: '.mysql_error());
}
if($req['PASS'] == $req['COMFPASS']) { 
        $P = sha1($req['PASS']);
        $update = "UPDATE `tblstudent` SET `STUDPASS` = '$P' WHERE `USERNAME` = '$USERNAME' ";
        $result = mysqli_query($con, $update);
        if($result) {
            $_SESSION['msg'] = 'Your new password has reset successfully, you can now login.';
            header("Location: login.php");
            message("success");
        } else {
            message("Error !");
            header("Location: login.php");
        }
    } else {
        $_SESSION['msg'] = 'Password does not match';
        header("Location: login.php");
    }
?>