 <?php
  session_start();
  include('confs/config.php');
  include('function.php');



  $id = $_GET['id'];
  $result = mysqli_query($conn,"SELECT * FROM books WHERE id=$id");
  $row = mysqli_fetch_assoc($result);
  $product_id = $row['id'];
  $qty = $row['qty'];
  // print_r($_SESSION);
  // echo "$product_id";

  include('001header.php');
  include('002nav.php');

		//getting User
        $customer = $_SESSION['email'];

        $get_customer = "SELECT * FROM customer WHERE email ='$customer'";

        $run_customer = mysqli_query($conn,$get_customer);

        $row_customer = mysqli_fetch_assoc($run_customer);

        $customer_id = $row_customer['id'];
        $customer_name = $row_customer['name'];
        $customer_img = $row_customer['customer_img'];


?>
   <style type="text/css">
     #title {
    font-family: "Times New Roman",Times,serif;
    color: #273746;
    font-size: 20px;
}
.stock{
  color: #17A2B8;

}
.out{
  color: #DC3545;
}
   </style>


<div class="container">
  <div class="row">
      <div class="col-md-5 col-sm-6 col-xs-6">
           <form method="post" action="detail-add.php" enctype="multipart/form-data">
           <input type="hidden" name="id" value="<?php echo $row['id']?>">
           <img src="admin/cover/<?php echo $row['cover'] ?>" width="250" height="300">
      </div> <!-- col-md-5 end-->
      <div class="col-md-7 col-sm-6 col-xs-6">
            <p id="title"><?php echo $row['title'] ?><br>
       US$<?php echo $row['price'] ?></p>
       by <i><?php echo $row['author'] ?></i><br>
       
       <?php if($qty == 0){
        echo "<p class='out'>Out of stock</p>";
       }else if($qty < 3){
        echo "Low in Stock";
       }else{
        echo "<p class='stock'>In Stock</p>";
       }

       ?>
     
       <br><br>

       <p><?php echo $row['summary'] ?></p>
      

      <br><br>

      <input type="submit" name="submit" value="Add To Cart" style="clear:both; background: #48c9b0; border: none; color: #fff; font-size: 1em; padding: 10px;" />
      <a href="index.php">Back</a>

      


</form>
      </div> <!-- col-md-7 end-->
  </div> <!-- row end -->
</div> <!-- container end -->

 

<?php include('003footer.php'); ?>