					
<?php
//include('includes/database.php');
$conn = mysqli_connect("localhost", "root", "","biobook");

	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
	{
		$result = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email' and password='$password'");
		
		$row = mysqli_fetch_array($result);
		$count = mysqli_num_rows($result);				
			if ($count == 0) 
				{
				echo "<script>alert('Please check your username and password!'); window.location='signin.php'</script>";
				} 
			else if ($count > 0)
				{
					session_start();
					$_SESSION['id'] = $row['user_id'];
					header("location:home.php");
				}
	}				
	}
?>