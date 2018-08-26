<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
  session_start();
  include('confs/config.php');


?>

<?php 
  include('001header.php');
  include('002nav.php');
 ?>
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h2 style="text-align: center; color: #5d6d7e; font-weight: bold;">Shopping Cart</h2>
        <?php
           
           
         

          if(isset($_SESSION['cart'])) {

            $total = 0;
            $itemqty = 0;
            
            echo '<table class="table">';
            echo '<tr>'; 
            
            
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = "SELECT  title, qty, price,cover FROM books WHERE id = $product_id";
            $run = mysqli_query($conn,$result);

            if($run){

              while($obj = mysqli_fetch_object($run)) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost
                $itemqty = $itemqty+$quantity;

                // $color = $_SESSION['color'];
                // $size = $_SESSION['size']; 
                
                echo '<tr>';
                echo '<td><img src="admin/cover/'.$obj->cover.'" width="100" height="140" align="right" align="right" alt=""></td>';
                
                echo '<td><b style="color: #4d5656">'.$obj->title.'</b></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td><b>US$'.$cost.'</b></td>';
                 
                
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="4" align="right">TOTAL</td>';
          echo '<td>Qty<b> '.$itemqty.'</b></td>';
          echo '<td><b>US$'.$total.'</b></td>';
          
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="6" align="right">
          <img src="https://www.adidas.com/static/on/demandware.static/-/Sites-adidas-US-Library/en_US/dw88ec105e/us_payment_methods.png" height="40px"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="index.php" class="button [secondary success alert]">Continue Shopping</a> ';

          // if(isset($_SESSION['username'])) {
            // echo '<a href="order-update.php"><button  class="btn btn-info pull-right">Order</button></a>';

          echo '<a style="clear:both; background: linear-gradient(to right, #025F8E, #0286CD) repeat scroll 0% 0% transparent; border: none; color: #fff; font-size: 1em; padding: 10px;" href="checkout.php" >Checkout
          <span class="fa fa-chevron-circle-right"></span></a>';
        

          echo '</td>';

          echo '</tr>';
          echo '</table>';
          echo '</div>';
        }

        else {
          echo "You have no items in your shopping cart.";
        }





          echo '</div>';
        
          ?>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
    


    





    <div class="row" style="margin-top:10px;">
      <div class="col-md-9">
        



  





 <?php include('003footer.php'); ?>
