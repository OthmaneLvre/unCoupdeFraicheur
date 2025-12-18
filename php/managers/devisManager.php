<?php

require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/../models/devis.php";

class DevisManager
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function save(Devis $devis): bool
    {
        $sql = "INSERT INTO devis (name, email, phone, message, created_at)
                VALUES (:name, :email, :phone, :message, NOW())";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':name'    => $devis->getName(),
            ':email'   => $devis->getEmail(),
            ':phone'   => $devis->getPhone(),
            ':message' => $devis->getMessage()
        ]);
    }
}
