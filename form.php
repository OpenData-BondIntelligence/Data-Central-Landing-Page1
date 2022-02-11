<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main>
        <div class="contact-form">
        <p>Send Email</p>
        <form class="contact-form" action="contactform.php" method="post"><br>
            <input type="text" name="name" placeholder="Full Name"><br>
            <input type="text" name="mail" placeholder="Your e-mail"><br>
            <input type="text" name="subject" placeholder="Phone Number"><br>
            <textarea name="message" placeholder="Message"></textarea><br>
            <button type="submit" name="submit">Send Mail</button>
        </form>
        </div>
    </main>
    <!-- <div class="contact-form"> -->
    <!-- <p>Contact Us</p> -->
    <!-- <form class="contact-form" action="" method="post"> -->
    <!-- <input class="form-control"type="text" name="name" placeholder="Full Name"><br> -->
    <!-- <input class="form-control"type="email" name="email" placeholder="Your e-mail"><br> -->
    <!-- <input class="form-control"type="text" name="message" placeholder="Phone"><br> -->
    <!-- <input type="submit" class="form-control submit" value="Send Message"> -->
    <!-- <a class="btn btn-primary" target="blank">Submit</a> -->
    </form>
    </div>
</body>
</html>