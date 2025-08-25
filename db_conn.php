<?php
 
$conn=mysqli_connect("localhost","root ", "","test_db");
if($conn){
    echo "connected"."<br/>";
}
else
{
    echo "not connected"."<br/>";
}
?>
