<!DOCTYPE html>
<html>
<head>
    <title>Send SMS</title>
</head>
<body>
    <h1>Send SMS</h1>
    <form method="post" action="send_sms.php">
        <label for="from">From:</label><br>
        <input type="text" id="from" name="from" required><br><br>

        <label for="to">To:</label><br>
        <input type="text" id="to" name="to" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>

        <input type="submit" value="Send">
    </form>
</body>
</html>
