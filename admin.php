<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");
  session_start();
  if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");//jika belum login jangan lanjut
}

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD</title>
</head>
<body>

<center>
  <br>
    <h2>HALAMAN USER</h2>
  <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>no</th>
    <th>judul</th>
    <th>isi</th>
    <th>terkhir di update</th>
    <th>opsi</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["judul"] ?></td>
    <td><?= $x["isi"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
    <td>
      <center><button><a href="ubah.php?id=<?= $x["id"]?>">ubah</a></button><br><br><button><a href="hapus.php?id=<?= $x["id"]?>" onclick =" return confirm ('yakin bray mau dihapus?');">hapus</a></button></center>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<br><br>
<button><a href="creat.php">Tambah</a></button>
<br><br>
</center>
  </body>
</html>
