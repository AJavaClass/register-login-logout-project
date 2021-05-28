<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{ width: 360px; padding: 20px; }
        body{ font: 14px sans-serif;}
    </style>
</head>
<body>

<div style="margin:20px;text-align:center;" class="form-group">
  <form action="createDB.php" method="get">
    <input type="submit" value="Δημιουργία ΒΔ">
  </form><br>
  <form action="script.php" method="get">
    <input type="submit" value="Αναζήτηση">
  </form><br>
  <form action="script.php" method="get">
    <input type="submit" value="Δείξε Στοιχεία">
  </form><br>
</div>

</body>

</html>