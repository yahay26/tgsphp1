<?php

$m1 = ['nama'=>'Syahna Ayu Riani Hermawan', 'nim'=>'210313155', 'nilai'=>51];
$m2 = ['nama'=>'Iif Sofiyatun Nafisah', 'nim'=>'3111211048', 'nilai'=>21];
$m3 = ['nama'=>'Ariadna Aqila Faranisa', 'nim'=>'222020001', 'nilai'=>32];
$m4 = ['nama'=>'Lidia Nurliana', 'nim'=>'210262201258', 'nilai'=>46];
$m5 = ['nama'=>'Afanin Zakira Manurung', 'nim'=>'21011033', 'nilai'=>35];
$m6 = ['nama'=>'Revhani Az-Zahra Rizky', 'nim'=>'2101581082', 'nilai'=>85];
$m7 = ['nama'=>'Adetia Laeta', 'nim'=>'11210307', 'nilai'=>25];
$m8 = ['nama'=>'Widi Andini', 'nim'=>'20200080150', 'nilai'=>79];
$m9 = ['nama'=>'Raka Yusron', 'nim'=>'01202140002', 'nilai'=>39];
$m10 = ['nama'=>'Muhammad Azis Faturrohman', 'nim'=>'121100015', 'nilai'=>51];
$m11 = ['nama'=>'Hilman Alawi Muharom', 'nim'=>'044093731', 'nilai'=>78];
$m12 = ['nama'=>'Rasya Safira Ishamiyya', 'nim'=>'215030201111026', 'nilai'=>77];
$m13 = ['nama'=>'Susan Rahmawati', 'nim'=>'A10200211', 'nilai'=>48];
$m14 = ['nama'=>'Aris Cendikia Fikri', 'nim'=>'21130210018', 'nilai'=>94];
$m15 = ['nama'=>'Lingling Ayu Alika', 'nim'=>'22101081413', 'nilai'=>46];

$daftar_m = [
 
  $m1, $m2, $m3, $m4, $m5,
  $m6, $m7, $m8, $m9, $m10,
  $m11, $m12, $m13, $m14, $m15,];

$ar_judul = ['no', 'Nama', 'Nim', 'nilai', 'ket', 'grade', 'predikat'];

$jumNilai = array_column($daftar_m, 'nilai');
$ar_nilaiTotal = array_sum($jumNilai );
$ar_nilaiTertinggi = max($jumNilai);
$ar_nilaiTerendah = min($jumNilai);
$ar_jumMahasiswa = count($daftar_m);
$ar_nilaiRata = $ar_nilaiTotal / $ar_jumMahasiswa;
$ketNilai = [
    'Nilai Total' => $ar_nilaiTotal,
    'nilai Tertinggi' => $ar_nilaiTertinggi,
    'nilai Terendah' => $ar_nilaiTerendah,
    'nilai Rata' => $ar_nilaiRata,
    'jumlah Mahasiswa' => $ar_jumMahasiswa,
    
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
    <table border=1>
    <thead>
    <tr>
    <?php foreach($ar_judul as $judul){ ?>
        <th><?= $judul?></th>
<?php } ?>
    
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    foreach($daftar_m as $g){
        if($g['nilai'] >= 85 && $g['nilai'] <= 100 ){
            $grade = 'A';
        }
        elseif($g['nilai'] >= 75 && $g['nilai'] <= 85 ){
            $grade = 'B';
        }
        elseif($g['nilai'] >= 65 && $g['nilai'] <=75 ){
            $grade = 'C';
        }
        elseif($g['nilai'] >= 55 && $g['nilai'] <=65 ){
            $grade = 'D';
        }
        elseif($g['nilai'] >= 0 && $g['nilai'] <=55 ){
            $grade = 'E';
        }
        else{$grade = 'tidak valid';};
        $keterangan = ($g['nilai'] >= 65 )?'Lulus':'Tidak Lulus';
        switch ($grade) {
            case 'A':
              $predikat = 'Memuaskan';
                break;
            case 'B':
              $predikat = 'Bagus';
               break;  
            case 'C':
                    $predikat = 'Cukup';
                    break;
            case 'D':
                    $predikat = 'Kurang';
                    break;
            case 'E': 
                    $predikat = 'Buruk';
                    break;
    
            
            default: 
            $predikat = 'Tidak valid';
                
                break;
        }

        

    ?>
<tr>
<td>
    <?= $no++?>
</td>
<td>
    <?= $g['nama']?>
</td>
<td>
    <?= $g['nim']?>
</td>
<td>
    <?= $g['nilai']?> 
</td>
<td>
    <?= $keterangan?>
</td>
<td>
    <?= $grade?>
</td>
<td>
    <?= $predikat?>
</td>

</tr>
<?php }
?>
    </tbody>
    <tfoot>
    <?php foreach($ketNilai as $id => $aku){?>
        <tr>
        <td colspan="3">
            <?= $id?>
        </td>
        <td colspan='4'>
            <?= $aku?>
        </td>
        </tr>
    <?php }?>
    </tfoot>
    </table>
    </h3>
</body>
</html>








