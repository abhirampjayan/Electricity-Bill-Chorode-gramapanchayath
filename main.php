<?php
include("sec.php");
?>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="container" style="width:80%;">
		<div id="log">            
            <h1>Dashboard Of <?php echo $_SESSION['username']; ?></h1>

			<nav>
            <a href="main1.php">view data</a><a href="main.php" id=iop>Add data</a>
            <a href="out.php" style="float:right;">Sign Out</a>
            </nav>
<form method="post" action="add.php">
 <div id=p>               
<?php                
echo "Select year : <select name='year'>";
for($i=2000;$i<=date("Y");$i++){
    echo "<option value=".$i.">".$i."</option> ";
} 
                echo"</select>";
echo "Select Month : <select name='month'>";
for($i=1;$i<=12;$i++){
    echo "<option value=".$i.">".$i."</option>";
} 
                echo"</select>";

?><br><br><br><br>
     Consumer Number : <input type="number" name="cid">Rate : <input type="text" name="rate">
       <input type="submit" value="Add"><hr>
     
     <?php
     
     if($_SESSION['l']!=0)
         echo"<h3>Inserted successfully</h3>";
     $_SESSION['l']=0;
     ?>
     	</div>
			</form>
		</div><br>
			
		</div>
	</body>
</html>