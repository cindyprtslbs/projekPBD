<?php include 'konek.php';
  $idsatuan = $_GET['id'];
  $q = $db->query("DELETE FROM satuan WHERE idsatuan='$idsatuan' ");

  header("location:satuan.php");

?>