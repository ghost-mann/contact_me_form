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
                <label id="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label id="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label id="dob">Date of Birth:</label>
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
</div>
</body>
</html>

