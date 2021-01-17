<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Siswa SMKN 10</title>
</head>

<body>
<form action="proses_dt_ap1.php" method="post">
	<table width="900" align="center" border="1">
    	<tr>
        	<td><a href="../index.php">Beranda</a></td>
        	<td><a href="../input_10mm1.php">10 MM 1</a></td>
            <td><a href="input_10mm1.php">10 MM 2</a></td>
            <td><a href="input_10tkp1.php">10 TKP 1</a></td>
            <td><a href="input_10tkp2.php">10 TKP 2</a></td>
            <td><a href="input_10ap1.php">10 AP 1</a></td>
            <td><a href="input_10ap2.php">10 AP 2</a></td>
        </tr>
        <tr>
        	<td colspan="7"><img src="../image/02.jpg" width="900" height="100" /></td>
        </tr>
        <tr>
        	<td colspan="8">Silahkan Input Biodata 10 AP 1</td>
        </tr>	
        <tr>
        	<td colspan="3">Nama Siswa</td>
            <td>:</td>
            <td colspan="3"><input type="text" name="nm_sis" size="50" /></td>
        </tr>
        <tr>
        	<td colspan="3">Kelas</td>
            <td>:</td>
            <td colspan="3"><input type="text" name="kls" size="50" /></td>
        </tr>
        <tr>
        	<td colspan="3">Jurusan</td>
            <td>:</td>
            <td colspan="3"><input type="text" name="jurusan" size="50" /></td>
        </tr>
        <tr>
            <td colspan="7"><input type="submit" name="kirim" value="Kirim" /><input type="reset" name="batal" value="Batal" /></td>
        </tr>
    </table>
</form>
</body>
</html>