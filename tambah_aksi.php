<?php
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];

    mysqli_query($koneksi,"insert into tugas values('','$nama','$nim','$jurusan','$angkatan')");

    header("location:index.php");
?>