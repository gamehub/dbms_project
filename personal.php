<?php
session_start();
    if(!isset($_SESSION['status']))
    {
        header('Location:index.html');
        exit;
    }
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=0.75">
<link rel="stylesheet" href="external_css_signup.css">
<style>
p
{
    text-align: center;
}
a
{
    text-decoration: none;
}
</style>
</head>
<body>
<div class="logout">
<a href="student_page.php">HOME |</a>
<a href="logout.php"> LOGOUT</a>
</div>

<form name="f1" action = "changepass.php"  method = "POST"> 
<div class ="centered">
<div class = "login_box">
<?php
    include('connection.php'); 
     $username = $_SESSION['user2'];
     $branch = $_SESSION['branch1'];
     $username= stripcslashes($username);   
     $username = mysqli_real_escape_string($con,$username); 
     $branch= stripcslashes($branch);   
     $branch = mysqli_real_escape_string($con,$branch);
     $sql = "select name,username,branch from login where username = '$username'";
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_array($result);
     echo "Username - ".$row['username']."<br>";
     echo "    Name - ".$row['name']."<br>";
     echo "  Branch - ".$row['branch']."<br>";
?>   
</div>
<p>     
<a href="changepass.php" id = "btn">CHANGE PASS</a>
</p>
</div>
</form>
</body>
</html>

     
