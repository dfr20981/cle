<?php
$nombre=$_POST['nombre'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$numcontrol=$_POST['numcontrol'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$id=$_POST['id']; 

if (		!empty($nombre) || 
			!empty($apaterno) ||
			!empty($amaterno) ||
			!empty($numcontrol) ||
			!empty($tel) ||
			!empty($email) ||
			!empty($id)) {
	# code...

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "cel";

//
$conn = new mysqli($nombre, $apaterno, $amaterno, $numcontrol, $tel, $email, $id);
if (mysqli_connect_error()) {
	# code...
	die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
}else{
	 $SELECT = "SELECT email From register Where email = ? Limit 1";
	 $INSERT  "INSERT Into register (nombre, apaterno, amaterno, numcontrol, tel, email, id) value(?, ?, ?, ?, ?, ?, ?)";

//
	 $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $username, $password, $gender, $email, $phoneCode, $phone);
      $stmt->execute();


	echo "New record inserted sucessfully";

 } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
 ?>

