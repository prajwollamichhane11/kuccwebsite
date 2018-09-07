<?php include_once 'server.php';
include './includes/header.html' ?>
   
<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
</head>

<link rel="stylesheet" type="text/css" href="#">

<br><br><br>
<body>

  <div class="header">
  	<h1>Register</h1>
  </div>
  <div class="container">
    <div class="forrm">

  <form method="post" enctype="multipart/form-data" action = "index.php">
  	<?php include('errors.php'); ?>
    <hr>
    <div class="input-group">
      <label>First Name</label>
      <input type="text" name="fname">
    </div>

    <div class="input-group">
      <label>Last Name</label>
      <input type="text" name="lname">
    </div>

    <div class="input-group">
      <label>Registraton Date</label>
      <input type="text" name="regis_date">
    </div>

    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email">
    </div>

    <div class="input-group">
      <label>Registration No.</label>
      <input type="text" name="reg_no">
    </div>

    <div class="input-group">
      <label>Contact No.</label>
      <input type="numbers" name="contact">
    </div>

    <div class="input-group">
  	  <label>Batch</label> <input type="numbers" name="batch">
    </div>

    <div class = "input-group">
      <label>Program</label>
      <input type="radio" name="program" value="CE">CE
      <input type="radio" name="program" value="CS">CS
    </div>

    <div class="input-group">
      <label>Year</label>
      <input type="radio" name="year" value="1" >First
      <input type="radio" name="year" value="2" >Second
      <input type="radio" name="year" value="3" >Third
      <input type="radio" name="year" value="4" >Fourth
    </div>

    <div class = "input-group">
      <label>Semester</label>
      <input type="radio" name="semester" value="1">First
      <input type="radio" name="semester" value="2">Second
    </div>

  	
    <div class="input-group">
      <label>Bank Voucher No.</label>
      <input type="numbers" name="bank_vouch_no">
    </div>

    <hr>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_student" >Register</button>
  	</div>
</form>

</div>
</div>
<br>

<?php include './includes/footer.html'?>

</body>
</html>
