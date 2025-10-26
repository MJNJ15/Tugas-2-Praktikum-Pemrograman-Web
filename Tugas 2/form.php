<?php
include "koneksi.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3">
        <div class="container">
            <a href="#home" class="navbar-brand">MESI CENTER</a>

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
                        <a href="" class="nav-link">Tambah Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <h1 class="text-light">Tambah Data Laptop</h1>
    </div>

    <div class="container mt-4">
        <div class="row bg-white">
            <form action="aksi.php" method="post">
                <div class="mb-3">
                    <div class="row m-2">
                        <div class="col">
                            <label for="namalaptop" class="form-label">Nama Laptop</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="namalaptop" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mb-3">
                    <div class="row m-2">
                        <div class="col">
                            <label for="cpu" class="form-label">CPU</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="cpu" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mb-3">
                    <div class="row m-2">
                        <div class="col">
                            <label for="gpu" class="form-label">GPU</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="gpu" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mb-3">
                    <div class="row m-2">
                        <div class="col">
                            <label for="tipegpu" class="form-label">Tipe GPU</label>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipegpu" value="integreted" checked>
                                <label class="form-check-label" for="tipegpu">
                                    Integrated
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipegpu" value="dedicated">
                                <label class="form-check-label" for="tipegpu">
                                    Dedicated
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipegpu" value="dual">
                                <label class="form-check-label" for="tipegpu">
                                    Dual GPU
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mb-3">
                    <div class="row m-2">
                        <div class="col">
                            <label for="RAM" class="form-label">RAM</label>
                        </div>
                        <div class="col">
                            <select name="ram" class="form-control">
                                <option value="unknown">Belum Ada Data</option>
                                <option value="2 GB">2 GB</option>
                                <option value="4 GB">4 GB</option>
                                <option value="8 GB">8 GB</option>
                                <option value="16 GB">16 GB</option>
                                <option value="32 GB">32 GB</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mb-3">
                    <div class="row m-2">
                        <div class="col">
                            <label for="aksesoris" class="form-label">Aksesoris</label>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="aksesoris" value="terdapat">
                                <label class="form-check-label" for="aksesoris">
                                    Aksesoris Tambahan
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mb-3">
                    <div class="row m-2">
                        <div class="col">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                        </div>
                        <div class="col">
                            <textarea class="form-control" name="deskripsi"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-success cont" name="tambah">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</body>

</html>