<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Upload Gambar</title>
</head>
<body>
<h1>Tambah Data Siswa</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="5">
  <tr>
    <td><label for="nis">NIS</label></td>
    <td><input type="text" name="nis"></td>
  </tr>
  <tr>
    <td><label for="nama">Nama</label></td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td><label for="jenis_kelamin">Jenis kelamin</label></td>
    <td>
        <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
        <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
    </td>
  </tr>
  <tr>
    <td><label for="telp">Telepon</label></td>
    <td><input type="text" name="telp"></td>
  </tr>
  <tr>
    <td><label for="alamat">Alamat</label></td>
    <td><textarea name="alamat"></textarea></td>
  </tr>
  <tr>
    <td><label for="foto">Foto</label></td>
    <td><input type="file" name="foto"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>

</body>
</html>