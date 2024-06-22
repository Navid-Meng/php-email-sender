<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender</title>
</head>
<body>
    <form action="send.php" method="POST">
        Name <input type="text" name="name"> <br><br>
        Email <input type="email" name="email"> <br><br>
        Subject <input type="text" name="subject"> <br><br>
        Message <br> <textarea name="message" cols="50" rows="10"></textarea> <br><br>
        <button type="submit" name="send">Send</button>
    </form>
</body>
</html>