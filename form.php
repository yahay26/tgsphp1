<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form action="#" method="POST">
    <h1>Form Input Nilai</h1>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Masukkan Nama :</label>
        <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="produk" class="col-4 col-form-label">Produk Pilihan :</label>
        <div class="col-8">
            <select id="produk" name="produk" class="custom-select">
                <option value="">-- PILIHAN BARANG --</option>
                <option value="TV">TV</option>
                <option value="KULKAS">KULKAS</option>
                <option value="AC">AC</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Nilai :</label>
        <div class="col-8">
            <input id="jumlah" name="jumlah" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="proses" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form> 

<?php 
    error_reporting(0);

    $nama = $_POST["nama"];
    $produk = $_POST["produk"];
    $jumlah = $_POST["jumlah"];
   


    switch($produk){
        case "TV":
            $hargaSatuan = "2000000";
            break;
            
        case "KULKAS":
            $hargaSatuan = "3000000";
            break;

        case "AC":
            $hargaSatuan = "4000000";
                break;
    }
    $totalBelanja = $jumlah * $hargaSatuan;
    $diskon = 0.20 * $totalBelanja;
    $ppn = 0.10 * ($totalBelanja - $diskon);
    $hargaBersih = ($totalBelanja - $diskon) + $ppn;

    echo "<hr>";
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak PHP</title>
</head>

<body>
  
    <p>Nama pelanggan : <?= $nama ?> </p>
    <p>Produk Pilihan : <?= $produk ?> </p>
    <p>jumlah : <?= $jumlah ?> </p>
    <p>Harga satuan : <?= $hargaSatuan ?> </p>
    <p>Total Belanja : <?= $totalBelanja ?> </p>
    <p>Potongan : <?= $diskon ?> </p>
    <p>PPN : <?= $ppn ?> </p>
    <p>Harga Bersih : <?= $hargaBersih ?> </p>
    
</body>

</html> 