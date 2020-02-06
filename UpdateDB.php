<?php
$Name = $_POST['name'];
$Email = $_POST['email'];
$Subject =$_POST['subject'];
$TextA =$_POST['textA'];
//$male = $_POST['male'];

//$gender = '';

//if(empty($male)){
  //  $gender = "Female";
//}else{
 //   $gender = "Male";
//}



// echo $name;
// echo "</br>";
// echo $email;
// echo "</br>";
// //echo $password;
// echo "</br>";
// echo "Thanks for registering with us";
// echo "Data captured successfully";


//This code is used toinsert data into the database//
$con=mysql_connect("localhost","root","");
if(!$con)
{
die ('could not connect:'.mysql_error());
}
mysql_select_db("ContactDB",$con);

$query="INSERT INTO cont(name,email,subject,textA) VALUES ('$Name','$Email','$Subject','$TextA')";

if(!mysql_query($query,$con)){
    die('Errorin inserting records'.mysql_error());
}else {
echo "Data Inserted";
    header("Location:index.html");
}


?>