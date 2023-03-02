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

   <!-- Title Website -->
   <title>Furnilux - Furniture</title>
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
               <a class="nav-link active" href="#">Home</a>
               <a class="nav-link" href="product.php">Products</a>
               <a class="nav-link" href="#category">Categories</a>
               <a class="nav-link" href="contact.php">Contact</a>
            </div>
         </div>
      </div>
   </nav>

   <!-- Hero -->
   <div class="hero">
      <div class="container">
         <div class="content">
            <h1 class="heading text-center">
               Design Your Dream <br />
               Home Very Easily
            </h1>
            <p class="sub-heading">Simple Furniture and high-end Quality</p>
            <a href="#product" class="btn-home">Explore Button</a>
         </div>
      </div>
   </div>

   <!-- Statistic -->
   <div class="statis mx-auto shadow bg-white">
      <div class="d-flex align-items-center justify-content-between py-4 px-5">
         <div class="d-flex align-items-center">
            <span>10+</span>
            <p class="ms-3">Years<br />Experience</p>
         </div>
         <div class="d-flex align-items-center border-green">
            <span>20K</span>
            <p class="ms-3">Best<br />Products</p>
         </div>
         <div class="d-flex align-items-center">
            <span>15K+</span>
            <p class="ms-3">Happy<br />Customers</p>
         </div>
      </div>
   </div>

   <!-- Categoriess -->
   <section id="category" class="categories">
      <div class="container">
         <h2 class="section-title mb-4">Popular Categories</h2>
         <div class="grid-fl">
            <div class="card-fl">
               <img src="./assets/images/livingroom.png" alt="" />
               <div class="card-content">
                  <h3 class="card-text">Living Room</h3>
                  <p>100+ Products</p>
               </div>
            </div>
            <div class="card-fl">
               <img src="./assets/images/bedroom.png" alt="" />
               <div class="card-content">
                  <h3 class="card-text">Bedroom</h3>
                  <p>60+ Products</p>
               </div>
            </div>
            <div class="card-fl">
               <img src="./assets/images/bathroom.png" alt="" />
               <div class="card-content">
                  <h3 class="card-text">Bathroom</h3>
                  <p>90+ Products</p>
               </div>
            </div>
            <div class="card-fl">
               <img src="./assets/images/kitchen.png" alt="" />
               <div class="card-content">
                  <h3 class="card-text">Kitchen</h3>
                  <p>110+ Products</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Products -->
   <section id="product" class="products">
      <div class="container">
         <h2 class="section-title mb-4">Discover Best Furniture</h2>
         <div class="grid-fl">

            <!-- Card Product -->
            <?Php 
               $i = 0;
            foreach ($dataProducts as $product) :
               if($i == 4) break; 
               $i++
            ?>

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

   <!-- About -->
   <section class="about">
      <div class="wrapper">
         <img src="./assets/images/about_image.png" alt="">
         <div class="content">
            <h3 class="mb-3">About us</h3>
            <h2 class="section-title mb-4">We always prioritize quality and comfort in our furniture</h2>
            <p>With talented designers and craftsmen, we create the best furniture and provide comfort for users. We will also innovate to make high quality furniture.</p>
            <div class="d-flex gap-4 mt-5">
               <button class="btn-home">Explore Product</button>
               <button class="btn-second">Order Custom</button>
            </div>
         </div>
      </div>
   </section>

   <!-- Testimoni -->
   <div class="testi">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-12 col-lg-5 ">
               <h3 class="mb-4">Happy customers</h3>
               <img src="./assets/images/img-group.png" alt="">
               <h2 class="section-title my-4">What they say with our service ?</h2>
               <button class="btn-home">View all</button>
            </div>
            <div class="col-12 col-lg-7 overflow-hidden">
               <div class="d-flex gap-4 justify-content-center">
                  <img class="img-fluid img-testi1" src="./assets/images/testi1.png" alt="">
                  <img class="img-fluid img-testi2" src="./assets/images/testi2.png" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Footer -->
   <section class="container">
      <div class="footer">
         <div class="d-flex flex-column align-items-center justify-content-center">
            <h2 class="section-title text-center">Make your home comfortable<br>by using our furniture </h2>
            <p class="mt-4 ">choose the best quality furniture only at FurniLux.</p>
            <button class="btn-home mt-4">Explore product</button>
         </div>
      </div>
   </section>

   <!-- Script Bootstrap 5 -->
   <script src="./library/js/bootstrap.js"></script>
</body>

</html>