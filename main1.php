<?php
require('conn.php');

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
            <a href="main1.php" id=iop>view data</a><a href="main.php">Add data</a>
            <a href="out.php" style="float:right;">Sign Out</a>
            </nav>
<form method="post" action="">
 <div id=p>               
<?php                
echo "Select year : <select name='year'>";
for($i=2000;$i<=date("Y");$i++){
    echo "<option value=".$i.">".$i."</option> ";
} 
                echo"</select>";

?><input type="submit" value="Find"><hr>
     
     <?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') 
     {
    $year = $_POST['year'];
     }
     $s = "SELECT * FROM ".$year." WHERE 1";
     $r = mysqli_query($con, $s);
     ?>
     <table>
        <tr>
            <th rowspan="2">Consumer NO</th>
            <th colspan="12">Month</th>
            <th rowspan="2">Total</th>
        </tr>
         
         <?php
         echo"<tr>";
     for($i=1;$i<=12;$i++)
     {
         echo "<th>".$i."</th>";
     }echo "</tr>";
         if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
$sq = "SELECT * FROM `".$year."` ORDER BY `cid` " ;
$re = $con->query($sq);
             if ($re->num_rows > 0) {
                 $n=1;
                 while($row = $re->fetch_assoc()) {$po=0;
        echo "<tr><td>".$row['cid']."</td>";
                     for($i=1;$i<=12;$i++)
     {
         echo "<td>".$row[$i]."</td>";$po+=$row[$i];
     }echo "<td>$po</td></tr>";
    }
             }
     
         }
     
     ?>
         
         
     </table>
     
     
     
     
     
     
     
     
     
     
     
     
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