<?php

// variable declaration
$fname = "";
$lname = "";
$reg_date = "";
$email    = "";
$reg_no  = "";
$contact  = "";
$batch = "";
$program = "";
$year = "";
$semester = "";
$bank_vouch_no = "";
$errors = array();

// connect to database
$db = mysqli_connect('localhost', 'root','','kucc');

//Register Student
if (isset($_POST['reg_student'])) {
  
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $reg_date = mysqli_real_escape_string($db, $_POST['regis_date']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $reg_no = mysqli_real_escape_string($db,$_POST['reg_no']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $batch = mysqli_real_escape_string($db, $_POST['batch']);
  $program = mysqli_real_escape_string($db, $_POST['program']);
  $year = mysqli_real_escape_string($db, $_POST['year']);
  $semester = mysqli_real_escape_string($db,$_POST['semester']);
  $bank_vouch_no = mysqli_real_escape_string($db,$_POST['bank_vouch_no']);

  // form validation: ensure that the form is correctly filled
  if (empty($fname)) { array_push($errors, "First name is required"); }
  if (empty($lname)) { array_push($errors, "Last name is required"); }
  if (empty($reg_date)) { array_push($errors, "When were you registered"); }
  if (empty($email)) { array_push($errors, "Your email is mandataory."); }
  if (empty($reg_no)) { array_push($errors, "Your registration number is mandataory."); }
  if (empty($contact)) { array_push($errors, "Contact or Mobile Phone"); }
  if (empty($batch)) { array_push($errors, "Current Batch"); }
  if (empty($program)) { array_push($errors, "Current Program"); }
  if (empty($year)) { array_push($errors, "Your Current university year"); }
  if (empty($semester)) { array_push($errors, "Your current semester."); }
  if (empty($bank_vouch_no)) {array_push($errors,"Bank Voucher Number required.");  }
  

  // register user if there are no errors in the form
  if (count($errors) == 0) {
    
    $query = "INSERT INTO form (fname,lname,reg_date,email,reg_no,contact,batch,program,year,semester,bank_vouch_no) 
          VALUES('$fname','$lname','$reg_date','$email','$reg_no','$contact','$batch','$program','$year','$semester','$bank_vouch_no')";
    
    mysqli_query($db, $query);
    
    
    header('location: index.php');
    exit();
  }
}
?>

<?php
if (isset($_POST['admin_login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = $password;
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $row = mysqli_fetch_assoc($results);
        $_SESSION['uid'] = $row['admin_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['admlogged'] = true;
        $_SESSION['success'] = "You are now logged in";
        header('location: adminpanel.php');
      exit();
    }
    
    else {
      array_push($errors, "Username/Password donot match");
      $t = 0;
      $_SESSION['logged']=false;
      session_destroy();
      header('location:admin_login.php');
      exit();
      }
   }
}

?>