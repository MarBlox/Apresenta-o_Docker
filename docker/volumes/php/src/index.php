<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Adminer Example</h1>
    <form action="insert.php" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name">
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
