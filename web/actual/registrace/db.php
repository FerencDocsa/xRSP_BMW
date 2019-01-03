<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$okrg = array();

$db = new mysqli('sql212.epizy.com','epiz_23015580','NnZsKkJHN9','epiz_23015580_logos');
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $jmeno = mysqli_real_escape_string($db, $_POST['jmeno']);
  $prijmeni = mysqli_real_escape_string($db, $_POST['prijmeni']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $role =       mysqli_real_escape_string($db, $_POST['role']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Login je povinný"); }
  if (empty($email)) { array_push($errors, "Email je povinný"); }
  if (empty($password_1)) { array_push($errors, "Heslo je povinné"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Hesla se nezhoduji1");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Uživatel už existuje!");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email už existuje!");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
	array_push($okrg, "Uživatel je uspešně zaregistrovan. Ted' se můžete přihlašit!");
  	$query = "INSERT INTO users (username, jmeno, prijmeni, password, email, role) 
  			  VALUES('$username', '$jmeno', '$prijmeni', '$password', '$email', '1')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Jste uspešně zaregistrovan! Ted' se můžete přihlašit!";
  	header('location: ../index.php');
  }
}


?>