<html>
<head><title>Start</title>
	</head>
	<body bgcolor="blue" text="white">
<?php
session_start();
if($_SESSION['name']=='admin')
{
echo'<font face="verdana"><b>';
	if(!isset($_POST['sub2']))
	{
				$_SESSION['q1']=$_POST['q1'];
				$server="localhost";
				$user="root";
				$password="";
				$database="quiz";
				$string="Submit Test";
				$con=mysqli_connect($server,$user,$password,$database);
					if(!$con)
					echo 'Connection failed !';
					else
				echo'
				<center><h2>Quiz Page</h2><hr><br><center>Test has started !<br>Instructions : It is compulsory to attempt all questions.<br>
				1 Mark will be awarded for right answer.<br>- 0.5 Mark will be deducted for wrong answer or for no response.<br>
				0.5 Mark will be awarded in case your score is not a whole number.<br>
				Total Marks : 10<br>The "<i>'.$string.'</i>" button submits the test and displays the result.<br><br><br><br></center>';
				echo'<form name="form45213" action="startfresh3.php" method="post">';
				
				$i=2;
				if($i==2)
				{
					echo '<font face="verdana"><center><table>';
					$query="select number,question,option1,option2,option3,option4 from questions where number=$i";
					$result=mysqli_query($con,$query);
						if($result)
						{
							while ($row=mysqli_fetch_array($result)) // jab tak usko data milte rahe //  jab 
							{
							echo'<tr><th><center>Q'.$row[0].'.</th><th colspan="2"><p align="left">'.$row[1].'</th></tr>';
							echo'<tr><th><center>A :</th><th><p align="left">'.$row[2].'</th><th><p align="right"><input type="radio" name="q'.$i.'" value="1"></th></tr>';
							echo'<tr><th><center>B :</th><th><p align="left">'.$row[3].'</th><th><p align="right"><input type="radio" name="q'.$i.'" value="2"></th></tr>';
							echo'<tr><th><center>C :</th><th><p align="left">'.$row[4].'</th><th><p align="right"><input type="radio" name="q'.$i.'" value="3"></th></tr>';
							echo'<tr><th><center>D :</th><th><p align="left">'.$row[5].'</th><th><p align="right"><input type="radio" name="q'.$i.'" value="4"></th></tr>';
							}
						echo '</table><br><br><input type="submit" name="sub2" value="Submit">';
						}
						
				
				}
				
				
				echo '</form>';
				
				//if($_POST['sub4']) $i=3;
				//echo '<input type="submit" name="submute" value="Submit Test">';
				
				
		}
	
	
			else 
			{
			header('Location: startfresh3.php');
			}

}
else if($_SESSION['name']=='normaluser')
{
echo'<font face="verdana"><b>';
	if(!isset($_POST['sub2']))
	{
				$_SESSION['q1']=$_POST['q1'];
				$server="localhost";
				$user="root";
				$password="";
				$database="quiz";
				$string="Submit Test";
				$con=mysqli_connect($server,$user,$password,$database);
					if(!$con)
					echo 'Connection failed !';
					else
				echo'
				<center><h2>Quiz Page</h2><hr><br><center>Test has started !<br>Instructions : It is compulsory to attempt all questions.<br>
				1 Mark will be awarded for right answer.<br>- 0.5 Mark will be deducted for wrong answer or for no response.<br>
				0.5 Mark will be awarded in case your score is not a whole number.<br>
				Total Marks : 10<br>The "<i>'.$string.'</i>" button submits the test and displays the result.<br><br><br><br></center>';
				echo'<form name="form45213" action="startfresh3.php" method="post">';
				
				$i=2;
				if($i==2)
				{
					echo '<font face="verdana"><center><table>';
					$query="select number,question,option1,option2,option3,option4 from questions where number=$i";
					$result=mysqli_query($con,$query);
						if($result)
						{
							while ($row=mysqli_fetch_array($result)) // jab tak usko data milte rahe //  jab 
							{
							echo'<tr><th><center>Q'.$row[0].'.</th><th colspan="2"><p align="left">'.$row[1].'</th></tr>';
							echo'<tr><th><center>A :</th><th><p align="left">'.$row[2].'</th><th><p align="right"><input type="radio" name="q'.$i.'" value="1"></th></tr>';
							echo'<tr><th><center>B :</th><th><p align="left">'.$row[3].'</th><th><p align="right"><input type="radio" name="q'.$i.'" value="2"></th></tr>';
							echo'<tr><th><center>C :</th><th><p align="left">'.$row[4].'</th><th><p align="right"><input type="radio" name="q'.$i.'" value="3"></th></tr>';
							echo'<tr><th><center>D :</th><th><p align="left">'.$row[5].'</th><th><p align="right"><input type="radio" name="q'.$i.'" value="4"></th></tr>';
							}
						echo '</table><br><br><input type="submit" name="sub2" value="Submit">';
						}
						
				
				}
				
				
				echo '</form>';
				
				//if($_POST['sub4']) $i=3;
				//echo '<input type="submit" name="submute" value="Submit Test">';
				
				
		}
	
	
			else 
			{
			header('Location: startfresh3.php');
			}

}

else header('Location: Login.php');
	?>
</body>
</html>