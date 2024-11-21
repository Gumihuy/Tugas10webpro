<?php
// Periksa apakah file benar-benar ada sebelum require_once
if (!file_exists(__DIR__ . '/app/controllers/TaskController.php')) {
    die("File 'TaskController.php' tidak ditemukan di lokasi yang diharapkan.");
}

// Load konfigurasi dan controller
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/app/controllers/TaskController.php';

$controller = new TaskController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'create') {
    $controller->store();
} else {
    $controller->index();
}
