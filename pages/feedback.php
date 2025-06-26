<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
    
    <!-- Font Stylesheet -->
    <?php include '../templates/font.php'; ?>

    <!-- Additional Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Header and Navigation -->
    <?php include '../templates/header.php'; ?>

    <main>
        <section class="feedback-section">
            <h2>We value your feedback!</h2>
            <form action="" method="post" class="feedback-form">
                <label for="feedback">Your Feedback:</label><br>
                <textarea id="feedback" name="feedback" rows="5" cols="40" required></textarea><br><br>

                <label for="rating">Your Rating:</label><br>
                <div class="rating">
                    <?php
                    for ($i = 5; $i >= 1; $i--) {
                        echo '<input type="radio" id="star'.$i.'" name="rating" value="'.$i.'" required>';
                        echo '<label for="star'.$i.'" title="'.$i.' stars"><i class="fa fa-star"></i></label>';
                    }
                    ?>
                </div>
                <br>
                <button type="submit">Submit Feedback</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $feedback = htmlspecialchars($_POST['feedback'] ?? '');
                $rating = intval($_POST['rating'] ?? 0);

                if ($feedback && $rating) {
                    echo '<div class="feedback-success">';
                    echo 'Thank you for your feedback!<br>';
                    echo 'You rated us: <strong>' . $rating . ' / 5</strong>';
                    echo '</div>';
                    // Here you can add code to save feedback to a database or send an email
                }
            }
            ?>
        </section>
    </main>

    <!-- Header and Navigation -->
    <?php include '../templates/footer.php'; ?>
</body>
</html>