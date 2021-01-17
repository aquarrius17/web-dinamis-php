<html>
<head>
<title>Data Siswa SMKN 10</title>
</head>
<body>
 <?php
	include"../koneksi/koneksi.php";
echo "<center><table border=1>
<tr>
        	<td><a href='../index.php'>Beranda</a></td>
        	<td><a href='view_10mm1.php'>View 10 MM 1</a></td>
            <td><a href='view_10mm2.php'>View 10 MM 2</a></td>
            <td><a href='view_10tkp1.php'>View 10 TKP 1</a></td>
            <td><a href='view_10tkp2.php'>View 10 TKP 2</a></td>
            <td><a href='view_10ap1.php'>View 10 AP 1</a></td>
            <td><a href='view_10ap2.php'>View 10 AP 2</a></td>
        </tr>
<tr>
	<td width='900' colspan='7'><img src='../image/02.jpg' width='900' height='100'></td>
</tr>
<tr>
	<td width='900' colspan='7'><marquee>Selamat Data Di Halaman Melihat Hasil Data 10 TKP 1</marquee></td>
</tr>

<tr><td colspan='2'>Nama Depan</td><td>Kelas </td><td colspan='2'>Jurusan</td><td colspan='2'>AKSI </td></tr> ";
$lihat=mysql_query("select *from 10tkp1 ");
while($data=mysql_fetch_array($lihat))
{
echo "<tr><td colspan='2'>$data[nm_sis]</td><td>$data[kls]</td> <td colspan='2'>$data[jurusan] </td><td colspan='2'><a href='proses_dt_tkp1.php?no=$data[no]'>hapus</a> | <a href='edit_view_10tkp1.php?no=$data[no]'>edit </a> </td></tr> ";
}
echo "</table>
<a href=input_10tkp1.php>Input Data Lagi </a>
</center>";
?>
</body>
</html>
