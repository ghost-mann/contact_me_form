<?php
    $name = $email = $dob = $happy ='';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $dob = htmlspecialchars($_POST['dob']);
        $happy = htmlspecialchars($_POST['happy']);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible">
    <title>Contact Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
        <h1>Contact Details</h1>

        <form action="contact.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob">
            </div>
            <div class="form-group">
                <p>Are you happy?</p>
                <label><input type="radio" name="happy" value="yes" id="yes">Yes</label>
                <label><input type="radio" name="happy" value="no" id="no">No</label>
            </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
        </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
    <div class="results">
        <p>Thanks for submitting data!</p>
        <p><strong>Name:</strong><?php echo $name ?></p>
        <p><strong>Email:</strong><?php echo $email ?></p>
        <p><strong>DOB:</strong><?php echo $dob ?></p>
        <p><strong>Are you happy?</strong><?php echo $happy ?></p>
    </div>
    <?php endif; ?>
</div>
</body>
</html>

