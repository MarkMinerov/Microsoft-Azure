<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Register form</h1>
  <form action="form.php" method="post">
    <label for="name">
      Enter your name:
      <input id="name" type="text" name="name" placeholder="Enter your name">
    </label>
    <br><br>
    <label for="surname">
      Enter your surname:
      <input id="surname" type="text" name="surname" placeholder="Enter your surname">
    </label>
    <br><br>
    <label for="email">
      Enter your email:
      <input id="email" type="email" name="email" placeholder="Enter your email">
    </label>
    <br><br>
    <label for="url">
      Enter your profile logo url:
      <input id="url" type="url" name="url" placeholder="URL">
    </label>
    <br><br>
    <label for="tel">
      Enter your phone number:
      <input id="tel" type="tel" name="tel" placeholder="Enter your phone number">
    </label>
    <br><br>
    <label for="food">
      Enter food you like:
      <input id="food" type="text" name="food" placeholder="Enter food you like">
    </label>
    <br><br><br>
    <input type="submit" value="Send">
  </form>
</body>
</html>