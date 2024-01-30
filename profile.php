<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch user data from the database
$host = 'localhost';
$db = 'phptest';
$user = 'root';
$pass = '';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = $mysqli->query($sql);

if ($result->num_rows == 1) {
    $user_data = $result->fetch_assoc();
} else {
    // Handle error
    die("User not found");
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/css/bootstrap.css">
    <?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch user data from the database
$host = 'localhost';
$db = 'phptest';
$user = 'root';
$pass = '';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = $mysqli->query($sql);

if ($result->num_rows == 1) {
    $user_data = $result->fetch_assoc();
} else {
    // Handle error
    die("User not found");
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/css/bootstrap.css">
    <title>User Profile</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    User Profile
                </div>
                <div class="card-body">
                    <p><strong>Username:</strong> <?php echo $user_data['user_name']; ?></p>
                    <p><strong>Email:</strong> <?php echo $user_data['email']; ?></p>
                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

    <title>User Profile</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    User Profile
                </div>
                <div class="card-body">
                    <p><strong>Username:</strong> <?php echo $user_data['user_name']; ?></p>
                    <p><strong>Email:</strong> <?php echo $user_data['email']; ?></p>
                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
