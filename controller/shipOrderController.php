<?php  
session_start();

class shipOrderController {
    public function index() {
        // Vérifie si le formulaire a été soumis  
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->shipOrderController();
        } else {
            // Affiche la vue  
            $this->showForm();
        }
    }

    public function shipOrderController() {
        // Récupére la commande de l'utilisateur depuis la session  
        if (isset($_SESSION['order'])) {
            $order = $_SESSION['order'];

            // Modifie le statut de la commande  
            $order['status'] = 'SHIPPED';

            // Sauvegarde la commande en session  
            $_SESSION['order'] = $order;

            // Redirige ou affiche un message de succès  
            echo "La commande a été expédiée avec succès !"; 
        } else {
            echo "Aucune commande trouvée.";
        }
    }

    public function showForm() {
        echo '<form method="POST">';
        echo '<button type="submit">Expédiez la commande</button>';
        echo '</form>';
    }
}

// Utilisation du contrôleur  
$controller = new ShipOrderController();
$controller->index();