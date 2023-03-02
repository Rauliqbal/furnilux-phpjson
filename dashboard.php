<?php
$data = './assets/data/data.json';
$pesan = './assets/data/message.json';

$dataProducts = array();

$dataJson = file_get_contents($data);
$dataPesanJson = file_get_contents($pesan);

$dataProducts = json_decode($dataJson, true);
$dataPesan = json_decode($dataPesanJson, true);




if (isset($_POST['submit'])) {
    $item = array();

    $dataBaru = array(
        'nama' => $_POST['nama'],
        'harga' => $_POST['harga'],
        'image' => $_POST['image']
    );

    array_push($dataProducts, $dataBaru);
    $dataJson = json_encode($dataProducts, JSON_PRETTY_PRINT);
    file_put_contents($data, $dataJson);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 Css -->
    <link rel="stylesheet" href="./library/css/bootstrap.min.css" />
    <!-- Style Scss -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- Title Website -->
    <title>Dashboard - Furnilux</title>
</head>

<body class="dashboard">
    <div class="container">
        <div class="box mt-4">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="section-title">Daftar Produk</h2>
                <button type="button" class="btn-home" data-bs-toggle="modal" data-bs-target="#exampleModal"> Tambah Produk</button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="box">
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama produk</label>
                                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama produk" required="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Harga produk</label>
                                        <input type="number" name="harga" class="form-control" id="exampleFormControlInput1" placeholder="Rp. 20.000" required="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Foto produk</label>
                                        <input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="Rp. 20.000" required="">
                                    </div>
                                    <button class="btn-home mt-4" name="submit">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Table -->
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto Produk</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($dataProducts as $index => $product) : {
                            $i++;
                        }
                    ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><img class="img-table" src="./assets/photo/<?= $product['image'] ?>" alt=""></td>
                            <td><?= $product['nama'] ?> </td>
                            <td><?= $product['harga'] ?> </td>
                            <td><a class="btn btn-danger" href="delete.php?id=<?php echo $index ?>">Delete</a></td>
                        </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <div class="box mt-4">
            <h2 class="section-title">Pesan Dari Customer</h2>
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($dataPesan as $index => $product) : {
                            $i++;
                        }
                    ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $product['nama'] ?> </td>
                            <td><?= $product['email'] ?> </td>
                            <td><?= $product['pesan'] ?> </td>
                            <td><a class="btn btn-danger" href="deletepesan.php?id=<?php echo $index ?>">Delete</a></td>
                        </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Script Bootstrap 5 -->
    <script src="./library/js/bootstrap.js"></script>
</body>

</html>