<?php include 'konek.php';
  $idvendor = $_GET['id'];
  $q = $db->query("DELETE FROM vendor WHERE idvendor='$idvendor' ");

  header("location:vendor.php");

?>