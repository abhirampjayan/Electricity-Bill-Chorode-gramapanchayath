<?php
require('conn.php');
include('sec.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $year = $_POST['year'];
    $rate = $_POST['rate'];
    $month = $_POST['month'];
    $cid =  $_POST['cid'];
    $sql0="SELECT * FROM ".$year." WHERE `cid`='$cid'";
   
    
    
    
    $sql = "CREATE TABLE `cp`.`$year` ( `cid` INT NOT NULL , `1` INT(0) NOT NULL , `2` INT(0) NOT NULL , `3` INT(0) NOT NULL , `4` INT(0) NOT NULL , `5` DECIMAL(0) NOT NULL , `6` DECIMAL(0) NOT NULL , `7` DECIMAL(0) NOT NULL , `8` DECIMAL(0) NOT NULL , `9` DECIMAL(0) NOT NULL , `10` DECIMAL(0) NOT NULL , `11` INT(0) NOT NULL , `12` DECIMAL(0) NOT NULL , PRIMARY KEY (`cid`)) ENGINE = InnoDB;";
    
    
    
    
    //query that used
        
        $sql1="INSERT INTO `year` VALUES ('$year')";
        $sql2="INSERT INTO `".$year."`(`cid`, `$month`) VALUES ('$cid','$rate')";
        $sql3="UPDATE `".$year."` SET `".$month."`='$rate' WHERE `cid`='$cid'";
    //......................
    
    if($con->query($sql0) === TRUE)
    {
        if ($con->query($sql3) === TRUE) {$_SESSION['l']=1;header("Location:  main.php");exit();}
    }
    else
    {
        //create table
        if ($con->query($sql) === TRUE) {
            $_SESSION['l']=0;            
        } 
        elseif($con->query($sql3) === TRUE) {$_SESSION['l']=1;header("Location:  main.php");exit();}
        
        
        //add new year to table year
        if ($con->query($sql1) === TRUE) {$_SESSION['l']=0;}
        //add values to created year
        if ($con->query($sql2) === TRUE) {$_SESSION['l']=1;header("Location:  main.php");exit();}
    }
}
?>