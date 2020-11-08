<?php
declare(strict_types=1);

namespace Todo\Models;

class User extends Model {
  public function getAllUsers() {
    $stmt = $this->db->query("SELECT * FROM users");

    $res = "";
    while($row = $stmt->fetch()) {
      $res += $row['id'] . ',';
    }

    return $res;
  }
}
