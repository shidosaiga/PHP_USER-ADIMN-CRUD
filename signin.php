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
        <h3 class="mt-5">login</h3>
        <hr>
    <form action="singup_db.php" method="post">
  
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" aria-describedby="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  
  <button type="submit" name ="singin" class="btn btn-primary">Sing In</button>
</form>
<hr>
<p>if you don't have account. click here <a href="index.php" >Register</a></p>

    </div>

</body>
<script src="./style/javascript/style.js">
</script>
</html>