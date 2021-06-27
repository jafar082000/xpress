<?php
    $con=mysqli_connect("localhost","root","");
	mysqli_select_db($con, "schools");
	
	
	if(isset($_POST['submit'])){
	
		 $id = $_POST['id'];
		 $name = $_POST['name'];
		 $school_location = $_POST['school_location'];
		 $principal = $_POST['principal'];
		 $phone = $_POST['phone'];
		 $email = $_POST['email'];
		 $students = $_POST['students'];
		 $messages = $_POST['messages'];
		 
	
		
		if($name=='' OR $school_location=='' OR $principal=='' OR $phone==''){
		
		echo "<script>alert('please fill all the fields!')</script>";
		
		exit();
		}
		else {
		
		$insert_query = "insert into eschool (id,school_location,principal,phone,email,students,messages) values ('$id','$name','$school_location','$principal','$phone', '$email', 'students', 'messages')";
	
		if(mysqli_query($con, $insert_query)){
		
		echo "<script>alert('Data inserted into table')</script>";
		
		
		}
		
		}
	
	}


?>