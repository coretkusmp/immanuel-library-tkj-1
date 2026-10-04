<?php
if (isset($_POST['id'])) {
  $id = $_POST['id'];
  echo "Kategori dengan id " . htmlspecialchars($id) . " dihapus.";
} else {
  echo "ID tidak ditemukan.";
}