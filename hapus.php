<?php
/**
* Created by PhpStorm.
* User: alwizen
* Date: 20/05/2017
* Time: 7:48
*/
include 'koneksi.php';
$hapus  = "DELETE FROM tamu  WHERE id = '".$_GET['id']."'"; //query hapus
$hapus1  = "DELETE FROM kamar  WHERE id = '".$_GET['id']."'";

$proses = mysql_query($hapus, $con) or die(mysql_error());
$proses1 = mysql_query($hapus1, $con) or die(mysql_error());
//mysql_query($input2, $con) or die(mysql_error());

echo "<script language=javascript>parent.location.href='rekap.php';</script>";
?>
