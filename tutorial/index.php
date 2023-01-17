<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regristration Form</title>
</head>
<h1>Los Angeles Lakers Regristration</h1>
<body bgcolor="#C133FF">
<div><h2>Regristation Form</h2></div>
<form action='connect.php' method='POST'>
    <label for="user">Name:</label> <br>
    <input type='text' name='name' id="name" required/> <br> <br>
    
    <label for="email">Email:</label> <br>
    <input type='email' name='email' id="email" required/> <br> <br>

    <label for="phone">Phone:</label> <br>
    <input type='text' name='phone' id="phone" required/> <br> <br>

    <label for="position">Position:</label> <br>
    <input type='text' name='position' id="position" required/> <br> <br>

    <input type='submit' name='submit' id="submit" />
</form>
</body>

</html>  