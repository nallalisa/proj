<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
};

if(isset($_POST['add_product'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);

   $select_products = $conn->prepare("SELECT * FROM `paymenttable` WHERE paymentName = ?");
   $select_products->execute([$name]);

   if($select_products->rowCount() > 0){
      $message[] = 'payment already exist!';
   }else{

      $insert_products = $conn->prepare("INSERT INTO `paymenttable`(paymentName) VALUES(?)");
      $insert_products->execute([$name]);
      $message[] = 'new payment method added!';
   }  

};

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_product = $conn->prepare("DELETE FROM `paymenttable` WHERE id = ?");
   $delete_product->execute([$delete_id]);
   header('location:payment.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Payment</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="add-products">

   <h1 class="heading">add Payment Method</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>Payment Name (required)</span>
            <input type="text" class="box" required maxlength="100" placeholder="Enter payment method" name="name">
         </div>
      </div>
      <input type="submit" value="add payment" class="btn" name="add_product">
   </form>

</section>

<section class="show-products">

   <h1 class="heading">Payment Methods</h1>

   <div class="box-container">

   <?php
      $select_products = $conn->prepare("SELECT * FROM `paymenttable`");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <div class="box">
    <div class="details"><span><?= $fetch_products['paymentName']; ?> </span></div>
      <div class="flex-btn">
         <a href="update_payment.php?update=<?= $fetch_products['id']; ?>" class="option-btn">update</a>
         <a href="payment.php?delete=<?= $fetch_products['id']; ?>" class="delete-btn" onclick="return confirm('delete this product?');">delete</a>
      </div>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">no payment method added yet!</p>';
      }
   ?>
   
   </div>

</section>








<script src="../js/admin_script.js"></script>
   
</body>
</html>