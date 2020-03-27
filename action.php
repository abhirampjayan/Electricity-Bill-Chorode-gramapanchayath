<?php
require('conn.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
        $username = $_POST['uname'];
        $password = $_POST['passwd'];
        $username = stripslashes($username);
        $username = mysqli_real_escape_string($con,$username);
        $password = stripslashes($password);
        $password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM eusr WHERE uname='$username'
AND passwd='$password'";
        $result = mysqli_query($con,$query);
        $d = mysqli_fetch_array($result);
        if(!$d)
        {
	       header("Location:  index.html");
            exit();
        }
        elseif($d['uname']==$username && $d['passwd']==$password)
        {
            $_SESSION['username'] = $username;
            header("Location: main.php");
            exit();
        }
    }
?>