<?php
declare(strict_types=1);

namespace Todo\Models;

class User extends Model {
  protected function userLogin(string $username, string $password): bool {
    $query = 'SELECT 1 FROM users WHERE username = ? AND password = ?';
    $stmt = $this->db->prepare($query);
    $stmt->execute([$username, $password]);
    $res = $stmt->fetchAll();
    
    if (empty($res)) {
      return false;
    }

    return true;
  }

  protected function userExists(string $username): bool {
    $query = 'SELECT 1 FROM users WHERE username = ?';
    $stmt = $this->db->prepare($query);
    $stmt->execute([$username]);
    $res = $stmt->fetchAll();
    
    if (empty($res)) {
      return false;
    }

    return true;
  }

  protected function addUser(string $username, string $password): void {
    $query = 'INSERT INTO users (username, password) VALUES ( ? , ? )';
    $stmt = $this->db->prepare($query);
    $stmt->execute([$username, $password]);
  }
}
