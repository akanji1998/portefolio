<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $recipient = $_POST['recipient'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = 'From: '. $recpient . "\r\n" .
            'Reply-To: akanjikadiriabiola@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    if (mail($recipient, $subject, $message, $headers)) {
        $response = array('success' => true, 'message' => 'E-mail envoyé avec succès');
    } else {
        $response = array('success' => false, 'message' => 'Erreur lors de l\'envoi de l\'e-mail');
    }

    echo json_encode($response);
} else {
    echo 'Méthode non autorisée';
}
?>
