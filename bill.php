<?php


include 'conn.php';
$billid = $_POST['billid'];
$noofitems = $_POST['noofitems'];
$amount = $_POST['amount'];


$query="INSERT INTO users(`billid`,`noofitems`,`amount`)
VALUES('$billid','$noofitems','$amount')";
$result=mysqli_query($con,$query);
if ($result){
	echo "Successfully Registered";
}
else
{
	echo "error in Registration";

}
?>
