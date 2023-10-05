<!DOCTYPE html>
<html>
<head>
  <title>SQL Injection Demo</title>
</head>
<body>
  <h1>Login</h1>
  <form action="backend.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username"><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>
