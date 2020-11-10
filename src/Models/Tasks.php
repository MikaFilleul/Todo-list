<?php
declare(strict_types = 1);

namespace Todo\Models;

class Tasks extends Model {
    static string $table = 'todos';

    protected array $task;

    protected function setInfo(string $username, string $assigned_to, string $title, string $description, string $created_at, string $due_date): void {
        $this->task['created_by'] = $username;
        $this->task['assigned_to'] = $assigned_to;
        $this->task['title'] = $title;
        $this->tasl['description'] = $description;
        $this->task['created_at'] = $created_at;
        $this->task['due_date'] = $due_date;
    }  

    protected function addTask(string $created_by, string $assigned_to, string $title, string $description, string $created_at, string $due_date): void {
        $query = 'INSERT INTO todos (created_by, assigned_to, title, description, created_at, due_date) VALUES (?, ?, ?, ?, ?, ?)';
        $stmt = $this->db->prepare($query);
        $stmt->execute([$created_by, $assigned_to, $title, $description, $created_at, $due_date]);
    }
}
