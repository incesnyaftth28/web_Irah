<?php
include 'koneksi.php';
$nim=$_POST['NIM'];
$nama=$_POST['NAMA'];
$alamat=$_POST['ALAMAT'];
$jkl=$_POST['jkl'];

$sql="UPDATE Mahasiswa SET NAMA='$nama', ALAMAT='$alamat', jKL='$jkl' WHERE NIM ='$nim' ";

if ($conn->query($sql) === TRUE) {
    header('location:form.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

  ?>