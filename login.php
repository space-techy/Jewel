<?php
    include ("./header.php")
    include ("./data/mydata.php")

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        // Prepare and execute SQL statement
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Username and password are correct
            header("Location: index.php");
            // You can redirect the user to a secured page or perform other actions
        } else {
            // Username or password is incorrect
            echo "Invalid username or password.";
        }
    }    
?>

    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="register.php" style="color: #4CAF50;">Register</a></p>
    </div>

<?php
    include ("./footer.php")
?>