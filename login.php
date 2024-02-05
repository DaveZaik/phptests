<?php

session_start();
error_reporting(E_ALL);

require_once "./dbh.inc.php";
// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: profile.php");
    exit();
}

// Check  credentials
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

 
    
    $sql = "SELECT * FROM users WHERE user_name = '$username'";
    $result = $mysqli->query($sql);
   
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // var_dump(password_verify($password, $row['password']));
        // var_dump($row['password']);
        // exit;
        if (password_verify($password, $row['password'])) {
            // exit;
            $_SESSION['user_id'] = $row['user_id'];
            // var_dump($_SESSION['user_id']);
            // exit;
            // header("location: ./profile.php");
            header("Location: login.php");

            exit();
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "Invalid username";
    }

    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/css/bootstrap.css">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
<script src='./static/js/bootstrap.js'></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('./images/planet.jpg'); 
            background-size:100%;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8); /* Adjust the background color opacity as needed */
        }
    </style>
    <title>Login</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <p class="mt-3">Dont have an account? <a href="signup.php">signup</a></p>
                    </form>

                    <?php if (isset($error)) { ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
