<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>

<?php
include 'koneksi.php';
$nim =$_GET['nim'];

$sql = "SELECT * FROM mahasiswa WHERE NIM ='$nim'";
$hasil = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($hasil);
?>
<h2>Edit data Mahasiswa</h2>
<form action="proses_Edit.php" METHOD = "POST">

  <label for="NIM">Nim:</label><br>
  <input type="text" id="NIM" name="NIM" value="<?php echo $data['NIM'];?>" readonly >
  <br>

  <label for="NAMA">nama:</label><br>
  <input type="text" id="NAMA" name="NAMA" value="<?php echo $data['NAMA'];?>">
  <br>
 
  <label for="ALAMAT">Alamat :</label><br>
  <input type="text" id="ALAMAT" name="ALAMAT" value="<?php echo $data['ALAMAT'];?>">
  <br>
 
  <label for="nama">jenis kelamain :</label><br>
  <select id="jkl" name="jkl">
    <option value="<?php echo $data['jkl']; ?>"> <?php echo $data['jkl']; ?> </option>
    <option value="laki-laki">laki-laki</option>
    <option value="perempuan">perempuan</option>
<br><br>

  <input type="submit" value="tamabah data">
</form>    

</body>
</html>