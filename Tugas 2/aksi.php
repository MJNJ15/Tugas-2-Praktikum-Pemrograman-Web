<?php
include "koneksi.php";

if(isset($_POST['tambah'])) {
    $nama = $_POST['namalaptop'];
    $cpu = $_POST['cpu'];
    $gpu = $_POST['gpu'];
    $tgpu = $_POST['tipegpu'];
    if(isset($_POST['aksesoris'])){
        $akses = $_POST['aksesoris'];
    }else {
        $akses = "tidak ada";
    }
    $ram = $_POST['ram'];
    $des = $_POST['deskripsi'];
    
    $tambah = "INSERT INTO laptop (nama , cpu, gpu, tipegpu, ram, aksesoris, deskripsi) values ('$nama', '$cpu', '$gpu', '$tgpu', '$ram', '$akses', '$des')";
    $koneksi->query($tambah);
}

if(isset($_POST["update"])){
    $id = $_POST['id'];
    $nama = $_POST['namalaptop'];
    $cpu = $_POST['cpu'];
    $gpu = $_POST['gpu'];
    $tgpu = $_POST['tipegpu'];
    if(isset($_POST['aksesoris'])){
        $akses = $_POST['aksesoris'];
    }else {
        $akses = "tidak ada";
    }
    $ram = $_POST['ram'];
    $des = $_POST['deskripsi'];

    $query = "UPDATE laptop SET nama = '$nama', cpu = '$cpu', gpu = '$gpu', tipegpu = '$tgpu', ram = '$ram', aksesoris = '$akses', deskripsi = '$des' WHERE id = $id";

    $koneksi->query($query);
}

if(isset($_POST["hapus"])){
    $id = $_POST["hapus"];

    $query = "DELETE FROM laptop WHERE id = $id";

    $koneksi->query($query);
}

$lihat = "SELECT * FROM laptop";
$result = $koneksi->query($lihat);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3">
        <div class="container">
            <a href="home.html" class="navbar-brand">MESI CENTER</a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="home.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="form.php" class="nav-link">Tambah Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <h1 class="text-light">Data Laptop</h1>
    </div>

    <div class="container mt-4">
        <div class="row bg-white">
            <table border="1">
                <tr>
                    <td>Nama Laptop</td>
                    <td>CPU</td>
                    <td>GPU</td>
                    <td>Tipe GPU</td>
                    <td>RAM</td>
                    <td>Aksesoris</td>
                    <td>Deskripsi</td>
                </tr>

                <?php
                while ($data = mysqli_fetch_assoc($result)) {
                ?>

                    <tr>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['cpu'] ?></td>
                        <td><?= $data['gpu'] ?></td>
                        <td><?= $data['tipegpu'] ?></td>
                        <td><?= $data['ram'] ?></td>
                        <td><?= $data['aksesoris'] ?></td>
                        <td><?= $data['deskripsi'] ?></td>
                        <td><form action="update.php" method="post"><button type="submit" class="btn btn-success cont" name="update" value="<?= $data['id']; ?>">Update Data</button></form></td>
                        <td><form action="" method="post"><button type="submit" class="btn btn-success cont" name="hapus" value="<?= $data['id']; ?>">Hapus Data</button></form></td>
                    </tr>

                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</body>

</html>