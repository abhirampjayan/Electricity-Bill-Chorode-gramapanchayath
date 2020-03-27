<?php
require('conn.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
        $name = $_POST['name'];
        $username = $_POST['uname'];
        $password = $_POST['passwd'];
        $passwordc = $_POST['cpasswd'];
        if($password != $passwordc)
        {
            header("Location: newu.html");
            exit();
        }
        else
        {
            $q="INSERT INTO `eusr`( `name`, `uname`, `passwd`) VALUES ('$name','$username','$password')";
            if($con->query($q)===TRUE)
            {
                    header("Location: index.html");
                    exit();
            }
            else
            {
                    header("Location: newu.html");
                    exit();
            }
            
        }
        }

?>
