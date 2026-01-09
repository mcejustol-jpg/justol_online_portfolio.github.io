<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Portfolio</title>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <a href="index.html" class="logo">Portfolio</a>

    <i class='bx bx-menu' id="menu-icon"></i>
    <i class='bx bx-moon' id="theme-toggle"></i>

    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="skills.html">Skills</a>
        <a href="projects.html">Projects</a>
        <a href="education.html">Education</a>
        <a href="contact.php" class="active">Contact</a>
    </nav>
</header>

<section class="contact">
    <h2 class="heading">Contact <span>Me</span></h2>

    <form action="send_message.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" required></textarea>
    <button type="submit" class="btn">Send Message</button>
</form>

<?php if(isset($_GET['success']) && $_GET['success'] == 1): ?>
    <p class="success-message">✅ Thank you! Your message has been sent successfully.</p>
<?php elseif(isset($_GET['success']) && $_GET['success'] == 0): ?>
    <p class="error-message">❌ Something went wrong. Please try again.</p>
<?php endif; ?>


</section>

<script>
setTimeout(() => {
    const msg = document.querySelector(".success-message");
    if(msg){
        msg.style.display = "none";
    }
}, 4000);
</script>

</body>
</html>
