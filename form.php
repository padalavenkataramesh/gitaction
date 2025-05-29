<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static PHP Form Example</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .form-container { background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 400px; }
        h2 { text-align: center; color: #333; margin-bottom: 25px; }
        label { display: block; margin-bottom: 8px; color: #555; font-weight: bold;}
        input[type="text"],
        input[type="email"],
        textarea { width: calc(100% - 22px); padding: 10px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;}
        textarea { resize: vertical; min-height: 80px; }
        input[type="submit"] { background-color: #28a745; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 18px; }
        input[type="submit"]:hover { background-color: #218838; }
        .message { text-align: center; margin-top: 15px; padding: 10px; border-radius: 4px; background-color: #e9ecef; color: #333; border: 1px solid #ced4da; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Contact Us DEV</h2>
        <?php
        // You could add a simple success message here if redirected from process.php
        if (isset($_GET['status']) && $_GET['status'] == 'success') {
            echo "<div class='message'>Form submitted successfully!</div>";
        }
        ?>
        <form action="process.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Send Message">
        </form>
    </div>
</body>
</html>
