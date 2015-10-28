<?php
include "connection.php";
$nama= $_POST['nama']; //nge get value dari form
$q = "SELECT * from data_karyawan where nama like '%$nama%' "; //kueri nyang database
$result = mysql_query($q); //ngeksekusi query
echo "<center>";
echo "<h2><font color='orange'>Hasil Pencarian</font></h2>";
echo "<table border='1' cellpadding='10' cellspacing='1'>";
echo "
<tr bgcolor='#B0C4DE'>
<td align='center'>NIK</td>
<td align='center'>Nama Karyawan</td>
<td align='center'>Jabatan</td>
</tr>";
while ($data = mysql_fetch_array($result)) {  //ngubah data dadi array
echo "
<tr>
<td>".$data['nik']."</td>
<td>".$data['nama']."</td>
<td>".$data['jab']."</td>
</tr>";
}
echo "</table>";
?>