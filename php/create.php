<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$place = validate($_POST['place']);
	$persons = validate($_POST['persons']);

	$user_data = 'name='.$name. '&email='.$email. '&place='.$place. '&persons='.$persons; 

	if (empty($name)) {
		header("Location: ../room.php?error=Name is required&$user_data");
	}else if (empty($email)) {
		header("Location: ../room.php?error=Email is required&$user_data");
	}else {

       $sql = "INSERT INTO users(name, email, place, persons) 
               VALUES('$name', '$email','$place', '$persons')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../room.php?error=unknown error occurred&$user_data");
       }
	}

}