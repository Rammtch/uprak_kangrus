<?php
// Biodata Data
$nama = "Muhammad Rizqi Ramadhan";
$alamat = "Kp.Cimareme RT.01 RW.09";
$sekolah = "SMK ANGKASA 1 MARGAHAYU";
$tanggal_lahir = "2007-Oktober-06";
$gambar = "ram.jpg"; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('background.jpg'); 
            background-size: cover; 
            background-position: center center; 
            background-attachment: fixed;
            margin: 0;
            padding: 20px;
            color: white;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #"fff";
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .biodata-header {
            text-align: center;
        }
        .biodata-header h1 {
            margin-bottom: 10px;
        }
        .biodata-header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 20px;
        }
        .biodata-detail {
            margin-top: 20px;
        }
        .biodata-detail p {
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="biodata-header">
        <h1>Biodata</h1>
        <img src="<?php echo $gambar; ?>" alt="Foto Profil">
    </div>

    <div class="biodata-detail">
        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
        <p><strong>Asal Sekolah:</strong> <?php echo $sekolah; ?></p>
        <p><strong>Tanggal Lahir:</strong> <?php echo $tanggal_lahir; ?></p>
    </div>
</div>

</body>
</html>