<?php
	include('confs/config.php');

function getcat(){

    global $conn;

    $get_cat = "SELECT * FROM categories 
              ";
    $run_cat = mysqli_query($conn,$get_cat);
    while($row= mysqli_fetch_array($run_cat)){
      $cat_id = $row['cat_id'];
      $cat_name = $row['cat_name'];
      

      echo "
        <li><a href='index.php?cat=$cat_id'>$cat_name</a></li>
      ";
    }
    }

function getpro(){
  	if(!isset($_GET['cat'])){
  		global $conn;
  		  $i=0;

        $per_page = 4;

      if(isset($_GET['page'])){
        $page = $_GET['page'];
      }

      else{
        $page = 1;
      }

      $start_from = ($page-1) * $per_page;
        
          $product_id = array();
          $product_quantity = array();

          $result = mysqli_query($conn,"SELECT * FROM books ORDER BY 1 DESC LIMIT $start_from, $per_page");
          // if($result === FALSE){
          //   die(mysql_error());
          // }

          if($result){


            while($obj = mysqli_fetch_object($result)) {

              echo '<div class="col-md-3 col-sm-6 col-xs-12">';
              echo '<div class="display">';
              
            
              echo '<img src="admin/cover/'.$obj->cover.'" width="100" height="150"/><br>';
              // echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              // echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
               if($obj->qty < 7 && $obj-> qty >0){
                echo "<span class='label label-warning pull-left' style='margin-top: 6px;'>Low In Stock</span>";
              }



              if($obj->qty < 5){
                  echo '<img src="image/bestseller.png" width="80" height="23" style="margin-left: 2px;">';
              }
              echo "<br><br>";

              echo '<div class="box"><p><strong><i><a href="detail.php?id='.$obj->id.'">'.$obj->title.'</a></i></strong></p>';
               echo '<p><strong>US$ '.$obj->price.'</strong></p>';
              echo '</div>';
              

           

              

              echo '</div>';
              echo '</div>';

              $i++;
            }
            // include("pagination.php");
          }
         
          $_SESSION['id'] = $product_id;
  
}
}


 function getcatpro(){

  	if(isset($_GET['cat'])){

  	$cat_id = $_GET['cat'];

  	global $conn;
  		  $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = mysqli_query($conn,"SELECT * FROM books WHERE category_id = '$cat_id'order by id DESC");
          // if($result === FALSE){
          //   die(mysql_error());
          // }

          if($result){

            while($obj = mysqli_fetch_object($result)) {

       echo '<div class="col-md-3 col-sm-6 col-xs-12">';
              echo '<div class="display">';
              
            
              echo '<img src="admin/cover/'.$obj->cover.'" width="150" height="260"/><br>';
              // echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              // echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
               if($obj->qty < 7){
                echo "<span class='label label-warning pull-left' style='margin-top: 6px;'>Low In Stock</span>";
              }



              if($obj->qty < 5){
                  echo '<img src="image/bestseller.png" width="80" height="23" style="margin-left: 2px;">';
              }
              echo "<br><br>";

              

              echo '<div class="box"><p><strong><i><a href="detail.php?id='.$obj->id.'">'.$obj->title.'</a></i></strong></p>';
               echo '<p><strong>US$ '.$obj->price.'</strong></p>';
              echo '</div>';
              

           

              

              echo '</div>';
              echo '</div>';

              $i++;
            }

          }
        

          $_SESSION['id'] = $product_id;
  }


}