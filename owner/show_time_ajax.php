<?php
  $con=mysqli_connect("localhost","root","","gym_project")or die("Database Error"); 

	if(isset($_POST['mem_id']))
	{
		$mem_id=$_POST['mem_id'];
		$res=mysqli_query($con,"SELECT * FROM mem_attendance WHERE mem_id='".$mem_id."' ORDER BY ID DESC limit 1");
		$row=mysqli_fetch_row($res);
		$num=mysqli_num_rows($res);
		if($num>0)
		{
			$row1=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM mem_attendance WHERE ID='".$row[0]."'"));

			if($row1[3]=="")
			{
	            echo'<option>Out</option>';
			}
			else
			{
	            echo'<option>In</option>';
			}
		}
		else
		{
	            echo'<option>In</option>';
		}
		
	}
?>