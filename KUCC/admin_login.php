<!DOCTYPE html>
<html>
<head>
    <title>KUCC Admin Panel</title>
    <link rel="stylesheet" type="text/css"href="w3.css"/>
    <link rel="stylesheet" type="text/css"href="stylesheet.css"/>
</head>
<body >
<div class="w3-container">
    <h1 class="w3-section w3-center w3-text-teal">Welcome <br>to <br>KUCC Admin Panel</h1>
</div>

<div class="w3-container w3-section w3-center" style="width: 400px; margin: 0 auto 0;">

    <div class="w3-section w3-teal w3-padding-4"><h4>Login</h4></div>
    
    <form action="server.php" method="POST"  class="w3-container">
        <input class="w3-input w3-border w3-margin-bottom " type="text" name="username" placeholder="Username" required=""  value="Username"/>
        <input class="w3-input w3-border w3-margin-bottom" type="password" name="password" placeholder="Password" required=""/>
        <input class="w3-btn w3-margin w3-teal" type="submit" name="admin_login" value="Login"/>
    </form>
</div>
<hr style="width: 75%; margin: 0 auto 0;">
<div class=" w3-container w3-section w3-center footer">
    <div>

    </div>
</div>


</body>
</html>