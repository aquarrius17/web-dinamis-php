<?php
	include"../koneksi/koneksi.php";
	if(isset($_POST['kirim']))
	{
		if(empty($nm_sis) or empty($kls) or empty($jurusan));

		$nm_sis=$_POST['nm_sis'];
		$kls=$_POST['kls'];
		$jurusan=$_POST['jurusan'];
		
				
		{
			mysql_query("insert into 10tkp2 value(null,'$nm_sis','$kls','$jurusan')")or die ("gagal simpan");
echo "<script>alert ('data telah di simpan '); document.location='input_10tkp2.php' </script> ";
		}
	}
?>

 <?php
	include"../koneksi/koneksi.php";
if(isset($_POST['update']))
{
		$nm_sis=$_POST['nm_sis'];
		$kls=$_POST['kls'];
		$jurusan=$_POST['jurusan'];
		
	{
                $update=mysql_query("update 10tkp2 set nm_sis='$_POST[nm_sis]',kls='$_POST[kls]',jurusan='$_POST[jurusan] where no='$_POST[no]' ") or die ("gagal update ");
echo "<script>alert ('data telah di update ');document.location='input_10tkp2.php' </script> ";
	}
	
{
                $update=mysql_query("update 10tkp2 set nm_sis='$_POST[nm_sis]',kls='$_POST[kls]',jurusan='$_POST[jurusan]' where no='$_POST[no]' ") or die ("gagal update Biodata ");
echo "<script>alert ('data telah di update ');document.location='input_10tkp2.php' </script> ";
}
}

?>

 <?php
	include"../koneksi/koneksi.php";
$hapus=mysql_query("delete from 10tkp2 where no='$_GET[no]' ") or die ("gagal hapus");
echo "<script>alert('data telah di hapus');document.location='view_10tkp2.php' </script> ";
?>
