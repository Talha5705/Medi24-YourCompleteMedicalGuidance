<?php
include('hospital.php');
if(isset($_POST['submitted'])) {
$ufback=$_POST['fback'];


$sql = "insert into message(fback)values('$ufback')";

if (!mysqli_query($conn,$sql)) {
	die('Error!!Inserting new record');
	
}

}
include('cntct.php');

?>