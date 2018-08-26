<?php
	session_start();
	include('confs/config.php');
  include('function.php');
?>

  <?php 
  include('001header.php');
  include('002nav.php');
   ?>
    
    <hr>
 <div class="container">
   <div class="row">
     <div class="col-md-3">
      
<?php
          if(isset($_SESSION['cart'])) {

            $total = 0;
            $itemqty = 0;
      
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = "SELECT  title, qty, price FROM books WHERE id = $product_id";
            $run = mysqli_query($conn,$result);

            if($run){

              while($obj = mysqli_fetch_object($run)) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost
                $itemqty = $itemqty+$quantity;               
              }
            }
          }
          echo "Total : <span class='label label-warning'>US$ $total</span><br>";
          echo "<span class='label label-warning'>
                $itemqty</span><a href='cart.php'> books in your cart</a><br>";
        }

        
        ?>
        
       <ul class="cats">
        <li>
            <b><a href="index.php">All Categories</a></b>
          </li>
                  
          <?php getcat(); ?>
        </ul>

     </div> <!-- col-md-4 end-->
     <div class="col-md-9">
        <?php getpro(); ?>
       <?php getcatpro(); ?>
     </div> <!-- col-md-8 end-->
   </div>
 </div>

 <?php include('003footer.php'); ?>

