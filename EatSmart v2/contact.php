<?php
require_once(__DIR__ . '/header.php');
?>

<main>
    <h2>Contactez-nous</h2>
    <form action="submit_contact.php" method="get">
        <label for="email">Votre email :</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="message">Votre message :</label>
        <textarea id="message" name="message" rows="5" cols="30" required></textarea>
        <br><br>
        <button type="submit">Envoyer</button>
    </form>
</main>

<?php
require_once(__DIR__ . '/footer.php');
?>
