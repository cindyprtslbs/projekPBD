<?php include 'konek.php';
  $idbarang = $_GET['id'];
  $q = $db->query("DELETE FROM barang WHERE idbarang='$idbarang' ");

  header("location:barang.php");

?>