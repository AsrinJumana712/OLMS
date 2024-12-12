<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLMS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="main-container">
        <h1>LIBRARY MANAGEMENT SYSTEM</h1>
        <div class="container">
            <div class="login">
                <h2>Sign In</h2>
                <form action="index.php" method="post">
                    <input type="text" name="RollNo" placeholder="Serial Number" required>
                    <input type="password" name="Password" placeholder="Password" required>
                    <div class="send-button">
                        <input type="submit" name="signin" value="Sign In">
                    </div>
                </form>
            </div>
            <div class="register">
                <h2>Sign Up</h2>
                <form action="index.php" method="post">
                    <input type="text" name="Name" placeholder="Name" required>
                    <input type="text" name="Email" placeholder="Email" required>
                    <input type="password" name="Password" placeholder="Password" required>
                    <input type="text" name="PhoneNumber" placeholder="Phone Number" required>
                    <input type="text" name="RollNo" placeholder="Serial Number" required>
                    <div class="send-button">
                        <input type="submit" name="signup" value="Sign Up">
                    </div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
        <p class="terms">By creating an account, you agree to our <a href="terms.php">Terms</a></p>
    </div>
</body>
</html>
