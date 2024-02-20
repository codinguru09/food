<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>

    <form method="post">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Your Email*" required="">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Your Password*" required="">
                </div>
            </div>
        </div>
        <div class="row login-btn-group align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 order-1">
                <button class="button">Login</button>
            </div>
        </div>
    </form>

    <?php
    session_start();
    include '../database/connect.php';

    $mysqli = new mysqli('localhost', 'root', '', 'FoodWebsiteDb');

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Check if the email exists in the database
        $sql = "SELECT * FROM usertable WHERE email='$email'";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // Email exists, now check if the password matches
            $row = $result->fetch_assoc();
            $stored_password = $row["password"];
            if ($password == $stored_password) {
                // Password matches
                echo "Login successful";
                // Check if the user is an admin
                $is_admin = $row["isAdmin"];
                if ($is_admin == "yes") {
                    // User is an admin
                    $_SESSION['email'] = $email; // Set session variable
                    header("Location: adminPage.php"); // Redirect to adminPage.php
                    exit(); // Stop execution
                } else {
                    echo "You're not an Admin!";
                }
            } else {
                // Password doesn't match
                echo "Incorrect password";
            }
        } else {
            // Email doesn't exist in the database
            echo "Email not found";
        }
    }
    ?>

</body>

</html>