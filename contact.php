<?php
$data= "./assets/data/message.json";
$dataPesan = array();

$dataJson = file_get_contents($data);
$dataPesan = json_decode($dataJson,true);

if(isset($_POST['submit'])){
    $pesan = array();

    $dataBaru = array(
        'nama'=> $_POST['nama'],
        'email'=> $_POST['email'],
        'pesan'=> $_POST['pesan']
    );

    array_push($dataPesan,$dataBaru);
    $dataJson = json_encode($dataPesan,JSON_PRETTY_PRINT);
    file_put_contents($data,$dataJson);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap 5 Css -->
    <link rel="stylesheet" href="./library/css/bootstrap.min.css" />
    <!-- Style Scss -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Title Website -->
    <title>Contact - Furnilux</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-fl fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/images/logo.svg" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link " href="index.php">Home</a>
                    <a class="nav-link " href="product.php">Products</a>
                    <a class="nav-link" href="#">Categories</a>
                    <a class="nav-link active" href="#">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contact -->
    <div class="contact">
        <div class="box">
            <div class="row gx-4">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="./assets/images/Online consulting-bro.png" alt="">
                </div>
                <div class="col-12 col-lg-6">
                    <form method="POST" action=""><h2 class="mb-4">Contact Form</h2>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required="">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="name" required="">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="pesan" rows="3" required=""></textarea>
                          </div>

                        <button name="submit" class="btn-home">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="clip"></div>
    </div>

    <!-- Script Bootstrap 5 -->
    <script src="./library/js/bootstrap.js"></script>
</body>

</html>