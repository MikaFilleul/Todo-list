<?php
declare(strict_types=1);

namespace Todo\Models;

class Task extends Model {
  protected function getAllUsers() {
    $query = 'SELECT username FROM users';
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    $res = $stmt->fetchAll();

    return $res;
  }
}
