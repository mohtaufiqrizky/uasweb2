<html>
<head>
<title>
Data Kelas
</title>
</head>
<body>
<table border="1" cellspacing='0'cellpadding='1' align="center">
    <tr>
        <th colspan="7">DAFTAR SISWA KELAS IPA 3</th>
</tr>
<tr>
<td>Nim</td>
<td>Nama Lengkap</td>
<td>Tanggal Lahir</td>
<td>Alamat</td>
<td>Aksi</td>
</tr>

<?php
foreach ($kelas as $kls){ ?>
<tr>
<td><?=$kls->nim?></td>
<td><?=$kls->nama?></td>
<td><?=$kls->tgllahir?></td>
<td><?=$kls->alamat?></td>
<td>
    <input type="button" onclick="location.href='<?=base_url('view/form edit.php')?>'" value="Tambah Data">
    <input type="button" onclick="location.href='<?=base_url('form edit.php')?>'" value="Edit">
    <input type="button" onclick="location.href='<?=base_url('kelas/form_hapus')?>'" value="hapus">
</td>

</tr>
<?php }
?>
</table>
</form>
</body>
</html>