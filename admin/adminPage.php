<?php
session_start();
if (isset($_SESSION['email'])) {
    echo "Admin Page";
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="adminpage.css">
    </head>

    <body>

        <!--  -->

        <h1>All Data from Database</h1>

        <div>
            <?php
            include '../database/connect.php';

            $mysqli = new mysqli('localhost', 'root', '', 'FoodWebsiteDb');

            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }

            $sql = "SELECT * FROM usertable";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    echo "<div class='data'>";
                    echo "ID: " . $row["id"] . "<br>";
                    echo "Name: " . $row["name"] . "<br>";
                    echo "Email: " . $row["email"] . "<br>";
                    echo "Password: " . $row["password"] . "<br>";
                    echo "isAdmin: " . $row["isAdmin"] . "<br>";
                    echo "<br>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }

            $mysqli->close();
            ?>
        </div>

        <!--  -->

        <h1>Product Section</h1>

        <h2>Add product</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include '../database/connect.php';

            $mysqli = new mysqli('localhost', 'root', '', 'FoodWebsiteDb');

            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }

            $upload_dir = "uploads/";
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
                // Create the directory if doesn't exist
            }

            // getting data in variables
            $name = $_POST["name"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $image_name = $_FILES["image"]["name"];
            $image_tmp_name = $_FILES["image"]["tmp_name"];

            // Move uploaded image to a permanent location
            $image_path = $upload_dir . $image_name;
            if (move_uploaded_file($image_tmp_name, $image_path)) {
                // Insert data into the database
                $sql = "INSERT INTO products (name, description, price, image) VALUES ('$name', '$description', '$price', '$image_path')";
                if ($mysqli->query($sql) === TRUE) {
                    echo "New product created successfully<br>";
                } else {
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
                }
            } else {
                echo "Failed to move uploaded file.";
            }

            $mysqli->close();
        }
        ?>

        <!-- form  -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required><br><br>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required><br><br>

            <input type="submit" value="Submit">
        </form>

        <hr>

        <h2>Delete product</h2>

        <!-- form  -->
        <form action="deleteProduct.php" method="post" enctype="multipart/form-data">

            <label for="id">Id:</label>
            <input type="text" id="id" name="id" required><br><br>

            <input type="submit" value="Submit">
        </form>

        <hr>

        <h2>Update product</h2>

        <form action="updateProduct.php" method="post" enctype="multipart/form-data">

            <label for="id">Id:</label>
            <input type="text" id="id" name="id" required><br><br>

            <label for="name">name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="description">description:</label>
            <input type="text" id="description" name="description" required><br><br>

            <label for="price">price:</label>
            <input type="text" id="price" name="price" required><br><br>

            <input type="submit" value="Submit">
        </form>

        <hr>
        <hr>

        <?php
        // Display products
        include '../database/connect.php';

        $mysqli = new mysqli('localhost', 'root', '', 'FoodWebsiteDb');

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        $result = $mysqli->query("SELECT * FROM products");
        if ($result->num_rows > 0) {
            echo "<h2>Products:</h2>";
            while ($row = $result->fetch_assoc()) {
                echo "Id: " . $row["id"] . "<br>";
                echo "Name: " . $row["name"] . "<br>";
                echo "Description: " . $row["description"] . "<br>";
                echo "Price:" . $row["price"] . "<br>";
                echo "Image: <img style='height:50px' src='" . $row["image"] . "'><br><br>";
            }
        } else {
            echo "No products found";
        }

        $mysqli->close();
        ?>


    </body>

    </html>

<?php
} else {
    header("Location: admin.php");
    // Redirect back to admin.php if session doesn't exist
    // means someone has directly typed adminPage.php in the url 
    exit(); // Stop execution
}
?>