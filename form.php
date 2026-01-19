<html>
  <head>
    <style>
      table, th, td {
  border: 1px solid black;
}
</style>
</head>

<body>

<h2>Input data Mahasiswa</h2>

<form action="proses_tambah_Mahasiswa.php" METHOD = "POST">

  <label for="NIM">Nim:</label><br>
  <input type="text" id="NIM" name="NIM" value=""><br>

  <label for="NAMA">nama:</label><br>
  <input type="text" id="NAMA" name="NAMA" value=""><br>
 
  <label for="ALAMAT">Alamat :</label><br>
  <input type="text" id="ALAMAT" name="ALAMAT" value=""><br>
 
  <label for="nama">jenis kelamain :</label><br>
  <select id="jkl" name="jkl"><br>
    <option value="">pilih</option> 
    <option value="laki-laki">laki-laki</option>
    <option value="perempuan">perempuan</option>
</select>
<br><br>

  <input type="submit" value="tamabah data">
</form> 

<br>

<?php
include 'koneksi.php';
$sql = "SELECT NIM, NAMA, ALAMAT, jkl FROM Mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr>
  <th>NIM</th>
  <th>NAMA</th>
  <th>ALAMAT</th>
  <th>jenis kelamin</th>
  <th>Aksi</th>
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>". $row["NIM"]. "</td>
    <td>". $row["NAMA"]. "</td>
    <td>". $row["ALAMAT"]. "</td>
    <td>". $row["jkl"]. "</td>
    <td> 
    <a href='edit.php?nim=".$row["NIM"]."'> EDIT </a> |
    <a href='hapus.php?nim=".$row["NIM"]."'> HAPUS </a> </td>

  

    </tr>";

  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
<p>data yang dimasukan akan dikirim ke "proses_tambah_Mahasiswa".php".</p>


</body>
</html>