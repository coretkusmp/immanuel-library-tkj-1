<?php
if (isset($_POST['id'])) {
  $id = $_POST['id'];
  echo "User dengan id " . htmlspecialchars($id) . " dihapus.";
} else {
  echo "ID tidak ditemukan.";
}