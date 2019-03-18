<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h3>Edit Mahasiswa</h3>
    <br><br>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from tugas where id='$id'");
        while($d = mysqli_fetch_array($data)) {
    ?>
    <form method="post" action="update.php">
        <table align="center">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id'] ;?>">
                    <input type="text" name="nama" value="<?php echo $d['nama'] ;?>">
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $d['nim'] ;?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan">
                        <option value=""><?php echo $d['jurusan'] ;?></option>
                        <option value="Sistem Komputer">Sistem Komputer</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Tehnik Informatika">Tehnik Informatika</option>
                    </select></td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td><input type="text" name="angkatan" value="<?php echo $d['angkatan'] ;?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
            <?php
        }
        ?>
</body>
</html>