<?php
    $url = file_get_contents('https://api.covid19api.com/live/country/Poland');
    $data = json_decode($url, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <title>Data Pertumbuhan Kasus COVID-19</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">COVID-19</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>Data yang Ditampilkan</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php">Data COVID 19 Hari Ini</a></li>
                            <li><a class="dropdown-item" href="semuaData.php">Data COVID 19 Sebelumnya</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" tabindex="-1" aria-disabled="true"><b>Data COVID-19 Sebelumnya</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- Container -->
    <div class="container my-3">
        <div>
            <center><h1>Data Perkembangan COVID-19</h1></center>
            <div class="card mt-3" style="width: auto;">
                <div class="card-body bg-secondary text-light">
                    <h5 class="card-title">Data Negara</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Nama Negara = <?= $data[0] ['Country'];?></p>
                    <p class="card-text">Kode Negara = <?= $data[0] ['CountryCode'];?></p>
                    <a href="javascript:history.go(0)" class="btn btn-primary">Refresh Halaman</a>
                </div>
            </div>
        </div>

    <!-- tabel data -->
        <div class="table-responsive mt-3">
            <table class="table table-hover table-bordered">
                <thead class="bg-dark text-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Terkonfirmasi</th>
                        <th scope="col">Pasien Meninggal Dunia</th>
                        <th scope="col">Pasien Sembuh</th>
                        <th scope="col">Pasien Aktif</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $lenght = count($data);
                        $no = 0;
                        for ($i=$lenght-1; $i >= 0 ; $i--) {?>
                            <tr>
                                <th scope="col"><?= $no = $no+1; ?></th>
                                <td scope="col"><?= $data[$i] ['Confirmed'];?> Jiwa</td>
                                <td scope="col"><?= $data[$i] ['Deaths'];?> Jiwa</td>
                                <td scope="col"><?= $data[$i] ['Recovered'];?> Jiwa</td>
                                <td scope="col"><?= $data[$i] ['Active'];?> Jiwa</td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <!-- end of tabel data -->
    </div>
    
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>