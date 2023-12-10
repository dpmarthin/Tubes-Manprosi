<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="reservasiForm.css">
    <title>Reservasi</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid" id="id-navbar">
            <a class="navbar-brand" href="index.html">Ujung Landasan Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="reservasiForm.php">Reservasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listReservasi.php">Lihat Reservasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <center>
        <div class="container">
            <h1>Reservasi</h1>
            <br>
            <div class="col">
                <form action="createReservasi.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <br>
                        <input type="string" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="no_telepon">No Telepon</label>
                        <br>
                        <input type="string" class="form-control" name="no_telepon" id="no_telepon">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_orang">Jumlah Orang</label>
                        <br>
                        <input type="number" class="form-control" name="jumlah_orang" id="jumlah_orang" min="1">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_reservasi">Tanggal Reservasi</label>
                        <br>
                        <input type="date" class="form-control" name="tanggal_reservasi" id="tanggal_reservasi">
                    </div>
                    <div class="mb-3">
                        <label for="catatan">Catatan</label>
                        <br>
                        <textarea type="string" class="form-control" name="catatan" id="catatan" rows="5"></textarea>
                    </div>
                    <button type="submit" name="back" id="back" class="btn btn-light"><a href="reservasi.html">Kembali</a></button>
                    <button type="submit" name="create" id="create" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    <center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>