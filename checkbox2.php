<?php
    include('connection.php');
    if(isset($_POST['ticked']))   
    {
       foreach ($_POST["ticked"] as $id)
       {
           $de1 = "DELETE FROM lost WHERE item='$id'";
           if(mysqli_query($con, $de1))
            {}
           else
               echo "ERROR: Could not execute";
       }
    }
   
    header('Location:lost_found.php');
    exit; 
?>