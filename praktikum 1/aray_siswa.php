<?php
// menangkap data nama dengan method nama
$nama = $_POST['nama'];
// menangkap data kuliah dengan method kuliah
$matkul = $_POST['matkul'];
// menangkap data uts dengan method uts
$UTS = $_POST['UTS'];
// menangkap data uas dengan method uas
$UAS = $_POST['UAS'];
// menangkap data nilai dengan method nilai
$nilai = $_POST['nilai'];
// menangkap data nilai nim
$nim = $_POST['nim'];

// $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
// $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
// $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
// $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
// $ns5 = ['id'=>5,'nim'=>$nim, 'uts'=>$UTS, 'uas'=>$UAS, 'tugas'=>$nilai];

// $ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];

?>
<h3>Daftar Nilai Siswa</h3>
<table border="1" width="100%">
<thead>
<tr>
<th>No</th><th>Nama</th><th>NIM</th><th>Nilai UTS</th>
<th>Nilai UAS</th><th>Nilai Tugas</th><th>Nilai Akhir</th>
</tr>
</thead>
<tbody>
<?php
$nomor = 1;
// foreach($ar_nilai as $ns){
echo '<tr>
<td>'.$nomor.'</td>';
echo '<td>'.$nama.'</td>';
echo '<td>'.$nim.'</td>';
echo '<td>'.$UTS.'</td>';
echo '<td>'.$UAS.'</td>';
echo '<td>'.$nilai.'</td>';
$nilai_akhir = (30*$UTS/100 + 35*$UAS/100 + 35*$nilai/100);
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
// $nomor++;
// }
?>
</tbody>
</table>