<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title></title>
</head>
<body>
<div id="top">
<nav id="nav">
  <ul id='navbar'>
    <li><a href="index.html">Home</a></li>
    <li><a href="resume.html">My Resume</a></li>
    <li><a href="faq.html">FAQ</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
</nav>
</div>
<div id="contact-section" class="contact">
    <h1>Contact Me</h1>
    <p>Want to get in touch? You can either send me an email at <a href="mailto:moskownadav@gmail.com">moskownadav@gmail.com</a> or fill out a form below</p>
  <div id = "contact-form">
    <form id = "contact-form" method="post" action="contact.php" role="form">
        <label for="name">Name:</label><br>
          <input type="text" id="name" name="name" placeholder="Your Name"><br>
        <label for="email">Email:</label><br>
          <input type="email" id="email" name="email" placeholder="Your Email"><br>
        <label for="message">Message:</label><br>
          <input type="text" id="message" name="message" placeholder="Your Message"><br><br>
          <input type="submit" class="btn btn-success btn-send" value="Submit">
      </form> 
  </div>
      <p>Please note: this form is a work in progress and does not work yet - but it will soon :-)</p>
</div>

</body>
<footer>
    <p> Created by Nadav Moskow</p>
</footer>