<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>IoT Lock</title>
</head>
<body>
  <div class="container">
    <h2>IoT Admin Panel</h2>
    <form id="pinForm">
      <input id="prevPinInput" type="text" placeholder="Enter previous pin" required>
      <input id="newPinInput" type="text" placeholder="Enter new pin" required>
      <input type="submit" value="Change pin">
    </form>

    <form id="addChipForm">
      <input type="text" placeholder="Enter chip id to add new one..." id="addChipInput" required>
      <input type="submit" value="Add new chip">
    </form>

    <ul id="chipsList"></ul>
    </div>

  <script defer src="main.js"></script>
</body>
</html>