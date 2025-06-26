<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Web Dev Toolkit</title>
    <!-- Font Stylesheet -->
    <?php include '../templates/font.php'; ?>

    <!-- Additional Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        
    </style>
</head>
<body>
    <!-- Header and Navigation -->
    <?php include '../templates/header.php'; ?>

    <!-- Main Content -->
    <div class="kit-logo">
        <img src="../images/logo.png" alt="Web Dev Toolkit Logo" class="logo">
    </div>
    
    <main>
        <h1 style="color: lightgrey;">Welcome to Web Dev Toolkit</h1>
        <p style="color: lightgrey;">Your one-stop assistant and kit for web development needs <br>
            <strong>Get started with customizing
                your resources to enhance <br>
                your web development experience.</strong>
        </p>

        <button type="button" onclick="window.location.href='register.php'">
            Get Started
        </button>

        <button type="button" onclick="window.location.href='register.php'">
            Login
        </button>
    </main>
    
    <!-- Footer -->
    <?php include '../templates/footer.php'; ?>
    <script src="main.js"></script>
</body>
</html>