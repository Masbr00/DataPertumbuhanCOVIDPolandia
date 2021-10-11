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
                        <a class="nav-link disabled" tabindex="-1" aria-disabled="true"><b>Data COVID-19 Hari Ini</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- Container -->
    <div class="container">
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

        <!-- DATA HARI INI -->
        <div class="container mt-3 px-0" style="text-align: center;">
            <div class="row row-cols-4">
                <div class="col">
                    <div class="card mt-3" style="width: auto;">
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title">Data Pasien Terkonfirmasi COVID-19</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-text">Total</h5>
                            <?php
                                $length = count($data);
                                echo '<h5 class="card-text">';
                                echo $data[$length-1] ["Confirmed"];
                                echo ' Jiwa</h5>';
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mt-3" style="width: auto;">
                        <div class="card-body bg-danger text-light">
                            <h5 class="card-title">Data Pasien Meninggal Dunia</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-text">Total</h5>
                            <?php
                                $length = count($data);
                                echo '<h5 class="card-text">';
                                echo $data[$length-1] ["Deaths"];
                                echo ' Jiwa</h5>';
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mt-3" style="width: auto;">
                        <div class="card-body bg-success text-light">
                            <h5 class="card-title">Data Pasien Sembuh</h5>
                            <br>
                        </div>
                        <div class="card-body">
                            <h5 class="card-text">Total</h5>
                            <?php
                                $length = count($data);
                                echo '<h5 class="card-text">';
                                echo $data[$length-1] ["Recovered"];
                                echo ' Jiwa</h5>';
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mt-3" style="width: auto;">
                        <div class="card-body bg-warning text-light">
                            <h5 class="card-title">Data Pasien Aktif COVID-19</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-text">Total</h5>
                            <?php
                                $length = count($data);
                                echo '<h5 class="card-text">';
                                echo $data[$length-1] ["Active"];
                                echo ' Jiwa</h5>';
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- END OF DATA HARI INI -->
    </div>
    
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>