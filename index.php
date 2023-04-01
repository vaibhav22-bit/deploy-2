<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
else{
    echo "No connection";
}

mysqli_select_db($con, 'medical record');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$phone_number = $_POST['phone_number'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$email = $_POST['email'];
$adate = $_POST['adate'];
$ddate = $_POST['ddate'];
$reason = $_POST['reason'];
$bp = $_POST['bp'];
$sugar = $_POST['sugar'];
$history = $_POST['history'];

$query = "insert into medical_record(fname, lname,  age, phone_number, gender, address, email, adate, ddate,  reason, bp, sugar, history ) 
values ('$fname', '$lname',  '$age', '$phone_number', '$gender', '$address', '$email', '$adate', '$ddate', '$reason', '$bp', '$sugar', '$history' ); ";

mysqli_query($con, $query);
mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);

?>