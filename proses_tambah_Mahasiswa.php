<?php
include 'koneksi.php';
$nim=$_POST['NIM'];
$nama=$_POST['NAMA'];
$alamat=$_POST['ALAMAT'];
$jkl=$_POST['jkl'];

$sql = "INSERT INTO mahasiswa (NIM, NAMA, ALAMAT, jkl)
VALUES ('$nim', '$nama', '$alamat', '$jkl')";

if ($conn->query($sql) === TRUE) {
  header('location:form.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>