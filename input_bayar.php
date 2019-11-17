<?php
include("koneksi.php");
//fungsi untuk gabung file
if (isset($_POST['simpan'])){
	$query_tambah_bayar="insert into pembayaran(Barang_id,Qty,Harga) values
	('".$_POST['Barang_id']."',
	'".$_POST['Qty']."',
	'".$_POST['Harga']."')";
	$proses_bayar=mysql_query($query_tambah_bayar);
if($proses_bayar){
	echo 'Tambah bayar berhasil';
}else{
	echo mysql_error();
}

}
?>


<form method="POST" action=""><!---form untuk kirim data ke DB-->
<table border="1"><!--name harus sama dengan database-->
	<tr>
		<td>Barang_Id</td>
		<td><input name="Barang_id" type="number"></td>
	</tr>
	<tr>
		<td>Qty</td>
		<td><input name="Qty" type="number"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input name="Harga" type="number"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
	</table>
	</form>