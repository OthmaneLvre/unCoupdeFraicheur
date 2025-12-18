<?php
header('Content-Type: application/json');

require_once __DIR__ . "/../models/devis.php";
require_once __DIR__ . "/../managers/devisManager.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée']);
    exit;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $phone === '') {
    echo json_encode(['success' => false, 'message' => 'Champs obligatoires manquants']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Email invalide']);
    exit;
}

$devis = new Devis($name, $email, $phone, $message);
$manager = new DevisManager();

if ($manager->save($devis)) {
    echo json_encode([
        'success' => true,
        'message' => 'Votre demande a bien été envoyée.'
    ]);
    exit;
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Une erreur est survenue côté serveur.'
    ]);
    exit;
}