<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <a href="http://localhost/myfiles/loginboot/index2.php" target="_blank">
  <img src="booking1.png" alt="Logo"
    style="width:200px;height:100px;">
  </a>
    <title>Employee Help Desk Contact Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <main>
      <p>EMPLOYEE HELP DESK E-MAIL</p>
      <form class="contact-form" action="contactform.php" method="post">
        <input type="text" name="name" placeholder="Employee name">
        <input type="text" name="mail" placeholder="E-mail Address">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit" name="submit">SEND MAIL</button>
      </form>

    </main>
  </body>
</html>
