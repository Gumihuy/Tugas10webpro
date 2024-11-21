<?php
require_once __DIR__ . '/../models/Task.php';

class TaskController
{
    private $task;

    public function __construct()
    {
        $this->task = new Task();
    }

    public function index()
{
    $tasks = $this->task->getAllTasks();
    $message = isset($_GET['success']) ? $_GET['success'] : null;
    require_once __DIR__ . '/../views/tasks/index.php';
}

public function store()
{
    if (!empty($_POST['title'])) {
        $this->task->createTask($_POST['title']);
        header('Location: /project-mvc/?success=Tugas berhasil ditambahkan!');
        exit();
    } else {
        header('Location: /project-mvc/?success=Gagal menambahkan tugas.');
        exit();
    }
}
}