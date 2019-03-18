<?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];

    mysqli_query($koneksi,"update tugas set nama='$nama',nim='$nim',jurusan='$jurusan',angkatan='$angkatan' where id='$id'");

    header("location:index.php#tabel");
?>