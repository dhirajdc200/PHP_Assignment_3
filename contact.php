<?php
include 'templates/header.php';
include 'templates/footer.php';

renderHeader('Contact Us');
?>

<main>
    <h1>Contact Us</h1>
    <p>If you have any questions or concerns, please reach out to us using the form below. We'll get back to you as soon as possible!</p>

    <form method="POST" action="contact.php">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>

        <button type="submit" class="btn-submit">Send Message</button>
    </form>
</main>

<?php
renderFooter();
?>
