<?php
// Démarrer la session
session_start();

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ship_order'])) {
    if (isset($_SESSION['current_order'])) {
        $_SESSION['current_order']['status'] = 'SHIPPED';
        $message = "Commande expédiée avec succès !";
    } else {
        $message = "Aucune commande à expédier.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Expédition de commande</title>
    <style>
        .message { padding: 10px; margin: 10px 0; border-radius: 4px; }
        .success { background-color: #d4edda; color: #155724; }
    </style>
</head>
<body>
<h1>Expédier la commande</h1>
    
    <?php if (!empty($message)): ?>
        <p style="color: green;"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>
    
    <form method="POST">
        <button type="submit" name="ship_order">Expédiez la commande</button>
    </form>
</body>
</html>