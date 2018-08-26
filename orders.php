 <?php
  session_start();
  include('confs/config.php');

?>
 <?php 
  include('001header.php');
  include('002nav.php');
 ?>
 <style type="text/css">
	b{
	color: #5d6d7e;
	
}
i{
	color: #2c3e50;
}
h3{
	text-align: center;
	color: #2e405e;
}
.ship{
            width: 210px;
            height: 200px;
           background-color: #ebf5fb;
           border-radius: 4px;
           border : 1px solid #aed6f1; 
         }
ul.list{
	list-style: none;
	margin: 20px;
	padding: 0;
}
ul.list li{
	overflow: hidden;
	border-bottom: 1px solid #ddd;
	padding-bottom: 10px;
	margin-bottom: 20px;
}
ul.list b{
	display: block;
	font-size: 18px;
	margin-bottom: 5px;
	color: #34495e;
}
ul.list i,ul.list small{
	display: block;
	
}
.btn-warning {
    background-image: linear-gradient(to bottom, #009688 0px, #009688 100%);
    background-repeat: repeat-x;
    border-color: #009688;
}

  .btn-warning {
    color: #fff;
    background-color: #009688 ;
    border-color: #009688 ;
}

.btn-warning:hover {
  color: #fff;
  background-color: #00796b;
  border-color: #00796b;
}

.btn-warning:focus {
   color: #fff;
  background-color: #00796b;
  border-color: #00796b;
}
</style>

<div class="container">
	<div class="row">
	<div class="col-md-4">
		<?php
			if(isset($_SESSION['cart'])) {

            $total = 0;
            $itemqty = 0;
           
          
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = "SELECT  title, qty, price,cover FROM books WHERE id = $product_id";
            $run = mysqli_query($conn,$result);
               
            if($run){
            		echo '<ul class="list">';
              while($obj = mysqli_fetch_object($run)) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost
                $itemqty = $itemqty+$quantity;
                
                
               echo '<li>';
               echo '<img src="admin/cover/'.$obj->cover.'" width="100" height="140" align="right" align="right" alt="">';
                echo '<b>'.$obj->title.'</b>';
                echo '<p>US$'.$obj->price.'</p>';
                echo '<small>quantity: '.$quantity.'</small>';
                echo '<p>amount: US$'.$cost.'</p><br>';
                echo '</li>';
              }
              echo '</ul>';
            }

          }

          echo '<table class="table">';
          echo '<tr>';
          echo '<td>TOTAL ('.$itemqty.')ITEMS</td>';
          echo '<td>US$'.$total.'</td>';
          echo '</tr>';
          echo '</table>';
          echo '<br>';
          
        }

        ?>
        	<a href="order-update.php" class="btn btn-warning pull-right" style="margin: 0px 4px">Order</a>
			<a href="cart.php" class="btn btn-default pull-right">Back</a>
	</div><!--  col-md-4 end -->
	<div class="col-md-8">
		
	</div><!--  col-md-4 end -->
	</div><!--  row end -->
</div><!--  container end -->

 <?php 
  include('003footer.php');

 ?>