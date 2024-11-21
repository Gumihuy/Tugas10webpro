<?php
class Task
{
    private $db;

    public function __construct()
    {
        $this->db = getConnection();
    }

    public function getAllTasks()
    {
        $stmt = $this->db->query("SELECT * FROM tasks ORDER BY id DESC");
        return $stmt->fetchAll();
    }

    public function createTask($title)
    {
        $stmt = $this->db->prepare("INSERT INTO tasks (title) VALUES (:title)");
        return $stmt->execute(['title' => $title]);
    }
}
