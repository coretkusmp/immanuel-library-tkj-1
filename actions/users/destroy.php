<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo "User dengan id " . htmlspecialchars($id) . " dihapus.";
} else {
  echo "ID tidak ditemukan.";
}