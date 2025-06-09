<?php
class Usuario {
    public $id, $nombre, $email;

    public function __construct($nombre, $email, $id = null) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->id = $id;
    }

    public static function getAll() {
        $db = Database::connect();
        $result = $db->query("SELECT * FROM usuarios");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public static function getById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM usuarios WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function save() {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO usuarios (nombre, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $this->nombre, $this->email);
        $stmt->execute();
    }

    public function update() {
        $db = Database::connect();
        $stmt = $db->prepare("UPDATE usuarios SET nombre=?, email=? WHERE id=?");
        $stmt->bind_param("ssi", $this->nombre, $this->email, $this->id);
        $stmt->execute();
    }

    public static function delete($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM usuarios WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}