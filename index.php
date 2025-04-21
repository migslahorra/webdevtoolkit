<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Dev Toolkit</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <form>
        <h1>Welcome to Web Dev Toolkit</h1>
        <p>Your one-stop solution for all web development needs.</p>
        <button type="button" onclick="window.location.href='register.php'">Get Started</button>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </form>
    
    <?php include 'footer.php'; ?>
    <script src="main.js"></script>
</body>
</html>