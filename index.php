<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IoT Lock</title>
  <style>
    input[type="text"] {
      width: 15rem;
      border: 1px solid orange;
    }

    li {
      margin-bottom: 0.5rem;
    }

    li span {
      margin-right: 1rem;
    }
  </style>
</head>
<body>
  <h2>IoT Admin Panel</h2>
  <form id="pinForm">
    <input id="prevPinInput" type="text" placeholder="Enter previous pin" required>
    <br><br>
    <input id="newPinInput" type="text" placeholder="Enter new pin" required>
    <br><br>
    <input type="submit" value="Change pin">
    <br><br><br>
  </form>

  <form id="addChipForm">
    <input type="text" placeholder="Enter chip id to add new one..." id="addChipInput" required>
    <br><br>
    <input type="submit" value="Add new chip">
  </form>

  <ul id="chipsList"></ul>

  <script defer src="main.js"></script>
</body>
</html>