<?php
session_start();
if(isset($_SESSION['owner']))
{

}
else
{
    echo'
    <script>
     window.location.href="../index.php";
    </script>
    ';
}
?>
<?php
     $con=mysqli_connect("localhost","root","","gym_project")or die("database Error");
     $id=$_GET['id'];
     if($res=mysqli_query($con,"DELETE FROM owner_add_staff WHERE id='".$id."'"))
     	{
    echo"
    <script>
    alert('Gym Staff Account Deleted');
    window.location.href='view_staff.php';
    </script>
    ";
  }
  else
  {
    echo"
    <script>
    alert('Please try again!!!');
    window.location.href='view_staff.php';
    </script>
    ";
  }
?>