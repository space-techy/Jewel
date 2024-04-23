<?php
    include ("./header.php")
    include ("./data/mydata.php")

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        // Prepare and execute SQL statement
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
        if ($conn->query($sql) === TRUE) {
            // Redirect to login page
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>


    <div class="container">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <input type="text" placeholder="Username" name="username" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="submit" value="Register">
        </form>
        <p>Already have an account? <a href="login.php" style="color: #4CAF50;">Login</a></p>
    </div>


<?php
    include ("./footer.php")
?>