<?php
$data = './assets/data/data.json';
$dataProducts = array();

$dataJson = file_get_contents($data);
$dataProducts = json_decode($dataJson, true);

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

   <title>Products - FurniLux</title>
</head>
<body>
    <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-fl fixed-top">
      <div class="container">
         <a class="navbar-brand" href="#">
            <img src="./assets/images/logo.svg" alt="" />
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
               <a class="nav-link " href="index.php">Home</a>
               <a class="nav-link active" href="product.php">Products</a>
               <a class="nav-link" href="#">Categories</a>
               <a class="nav-link" href="contact.php">Contact</a>
            </div>
         </div>
      </div>
   </nav>

    <!-- Products -->
   <section class="products" style="padding-top: 120px">
      <div class="container">
         <h2 class="section-title mb-4">Discover Best Furniture</h2>
         <div class="grid-fl">

            <!-- Card Product -->
            <?Php foreach ($dataProducts as $product) : ?>

               <div class="card-fl">
                  <div class="position-relative">
                     <img class="card-img-top" src="./assets/photo/<?= $product['image'] ?>" alt="">
                     <div class="position-absolute icon-like">
                        <i for="like" class='bx bxs-heart icon'></i>
                     </div>
                  </div>

                  <div class="card-body">
                     <h4 class="card-title"><?= $product['nama'] ?></h4>
                     <div class="d-flex align-items-center mt-2">
                        <i class='bx bxs-star icon'></i>
                        <p class="me-2">4.5</p>
                        <p>- (150 Sold)</p>
                     </div>
                     <h5 class="fw-bold mt-3">Rp <?= $product['harga'] ?></h5>
                  </div>
               </div>

            <?Php endforeach ?>
         </div>
      </div>
   </section>
     <!-- Script Bootstrap 5 -->
     <script src="./library/js/bootstrap.js"></script>
</body>
</html>