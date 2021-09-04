<?php  
if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['phone']) && isset($_GET['program'])
&& isset($_GET['state']) && isset($_GET['city'])){
	$name = $_GET['name'];
	$email = $_GET['email'];
	$phone = $_GET['phone'];
	$program = $_GET['program'];
	$state = $_GET['state'];
	$city = $_GET['city'];

	if(preg_match('/[0-9]{10}/', $phone) && preg_match("/^[a-zA-Z-' ]*$/",$name) && preg_match("/^[a-zA-Z- ]*$/", $city)){
	$fp = fopen('19BCE7451.csv', 'a');

    $fields = array($name, $email, $phone, $program,$state,$city,date("d-m-Y"));

    fputcsv($fp, $fields);

    fclose($fp);
}
header("Location: thankyou.html");
}
else{
	echo "Invalid data!";
}
?>