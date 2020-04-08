<?php
&fname_error = $email_error = $lname_error = $pwd_error = $cpwd_error ="";
$fname = $lname = $email =$pwd = $cpwd ="";

if($_SERVER["REQUEST_METHOD"]== "POST"){
    // First name conditions
    if (empty($_POST["fname"])){
        $fname_error = "First name is required";
    }
    else{
        $fname = test_input($_POST["fname"]);
        if(!preg_match("/^[a-zA-Z]*$/",$fname)){
            $fname_error="Your 1st name can only contain letters";
        }
    }
    //Last name conditions
     if (empty($_POST["lname"])){
        $lname_error = "Last name is required";
    }
    else{
        $lname = test_input($_POST["fname"]);
        if(!preg_match("/^[a-zA-Z]*$/",$lname)){
            $lname_error="Your Last name can only contain letters";
        }
    }
    
    //email conditions
    if (empty($_POST["email"])){
        $email_error = "Email name is required";
    }
    else{
        $email = test_input($_POST["email"]);
        if(!filter_var(email, FILTER_VALIDATE_EMAIL)){
            $email_error="Invalid email format";
        }
    }
	
	//password
	if(empty($_POST["pwd"]) {
		$pwd_error = "password is required";
	}
	 else{
		 $pwd = test_input($_POST["pwd"]);
        if (strlen($_POST["pwd"]) <= '8') {
            $pwd_error = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$pwd)) {
            $pwd_error = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$pwd)) {
            $pwd_error = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$pwd)) {
            $pwd_error = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } else {
    
        }
    }
	//confirm pwd
	 if (empty($_POST["cpassword"]) || ($_POST["cpassword"] != $_POST["password"]) {
        $cpwd_error = "the passwords don't match";
    }
}
function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = stripcslashes($data);
		return $data;
		}
?>