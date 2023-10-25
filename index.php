<?php
    require_once "./config/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register System</title>
    <link rel="stylesheet" href="./style/style.css"></link>
</head>
<body>

    <div class="container">
        <h3 class="mt-5">Register </h3>
        <hr>
    <form action="singup_db.php" method="post">
  <div class="mb-3">
    <label for="firstname" class="form-label">Firstname</label>
    <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Lastname</label>
    <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" aria-describedby="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3">
    <label for="confirm password" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="c_password">
  </div>
  <button type="submit" name ="singup" class="btn btn-primary">Sing Up</button>
</form>
<hr>
<p>if you have account. click here <a href="signin.php" >Signin</a></p>

    </div>

</body>
<script src="./style/javascript/style.js">
</script>
</html>