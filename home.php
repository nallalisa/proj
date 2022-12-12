<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="css/js/bootstrap.bundle.min.js"></script>
   <style>
      #content.light-mode {
         background-color: #ffffff;
         color: #171717;
      }

      #contant.light-mode a {
         color: #171717;
      }

      #content.light-mode path {
         fill: #F0F0F0;
      }

      #content.dark-mode {
         background-color: #171717;
         color: #ffffff;
      }

      #content.dark-mode a {
         color: #ffffff;
      }

      #content.dark-mode a.w--current {
         color: #707AFF;
      }

      #content.dark-mode path {
         fill: #2f2f2f;
      }

      a {
         text-decoration: none;
      }
   </style>

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <div class="container-fluid" style="padding: 0;">
      <div id="demo" class="carousel slide" data-bs-ride="carousel">

         <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
         </div>

         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="images/1425435.png" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
               <img src="images/51368.jpg" alt="Chicago" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
               <img src="images/51414.jpg" alt="New York" class="d-block" style="width:100%">
            </div>
         </div>

         <!-- Left and right controls/icons -->
         <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
         </button>
      </div>
   </div>
   <div class="heading-head">
      <h1 class="heading">products</h1>
   </div>

   <section class="home-products">

      <div class="swiper products-slider">

         <div class="swiper-wrapper">

            <?php
            $select_products = $conn->prepare("SELECT * FROM `products` ORDER BY `id` DESC LIMIT 6");
            $select_products->execute();
            if ($select_products->rowCount() > 0) {
               while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
            ?>
                  <form action="" method="post" class="swiper-slide slide">
                     <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                     <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                     <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                     <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
                     <!--<button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
                     <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>-->
                     <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
                     <div class="name"><?= $fetch_product['name']; ?></div>
                     <div class="flex">
                        <div class="price"><span>₱</span><?= $fetch_product['price']; ?><span>.00</span></div>
                        <!--<input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">-->
                     </div>
                     <!--<input type="submit" value="add to cart" class="option-btn" name="add_to_cart">-->
                     <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="option-btn">View Item</a>
                  </form>
            <?php
               }
            } else {
               echo '<p class="empty">no products added yet!</p>';
            }
            ?>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>









   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".home-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
      });

      var swiper = new Swiper(".category-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 2,
            },
            650: {
               slidesPerView: 3,
            },
            768: {
               slidesPerView: 4,
            },
            1024: {
               slidesPerView: 5,
            },
         },
      });

      var swiper = new Swiper(".products-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            550: {
               slidesPerView: 2,
            },
            768: {
               slidesPerView: 2,
            },
            1024: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>