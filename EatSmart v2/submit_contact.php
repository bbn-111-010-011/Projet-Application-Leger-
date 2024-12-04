<?php
require_once(__DIR__ . '/header.php');
?>

<main>
    <h2>Confirmation de l'envoi</h2>

    <?php
    // Récupération des données de l'URL
    $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : 'Non fourni';
    $message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : 'Non fourni';
    ?>

    <p><strong>Email :</strong> <?php echo $email; ?></p>
    <p><strong>Message :</strong> <?php echo nl2br($message); ?></p>
</main>

<?php
require_once(__DIR__ . '/footer.php');
?>
