<?php
$servername = "localhost";
$username = "web";
$password = "pass";
$dbname = "my_new_schema";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$results = [];
if (isset($_GET['firstname'])) {
  $firstname = $_GET['firstname'];
  $sql = "SELECT * FROM users WHERE firstname = '$firstname' AND active = 1";
  $results = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Get Users</title>
</head>
<body>
  <form method="GET" action="getusers_1.php">
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname">
    <input type="submit" value="Submit">
  </form>

  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Active</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($results) {
        while($row = $results->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["id"] . "</td>";
          echo "<td>" . $row["username"] . "</td>";
          echo "<td>" . $row["email"] . "</td>";
          echo "<td>" . $row["firstname"] . "</td>";
          echo "<td>" . $row["lastname"] . "</td>";
          echo "<td>" . $row["active"] . "</td>";
          echo "</tr>";
        }
      }
      ?>
    </tbody>
  </table>
</body>
</html>
<?php
$conn->close();
?>