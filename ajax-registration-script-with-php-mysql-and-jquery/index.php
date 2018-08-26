<?php 
include('header.php');
include_once("db_connect.php");
?>
<title>Registration</title>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/register.js"></script>
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php include('container.php');?>
<style type="text/css">
.error{
    
    color: #DC3545;
    padding: 0px;
    margin-top: 5px;
  }
	 /*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
/*
 * General styles
 */

body, html{
     height: 100%;
  background-repeat: no-repeat;
  font-family: 'Oxygen', sans-serif;
}

.main{
  margin-top: 70px;
  
}

h1.title { 
  font-size: 50px;
  font-family: Arial; 
  font-weight: 400; 
}

hr{
  width: 10%;
  color: #fff;
}

.form-group{
  margin-bottom: 15px;
}

label{
  margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
  background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
  margin-top: 30px;
  margin: 0 auto;
  max-width: 380px;
    padding: 40px 40px;

}

.login-button{
  margin-top: 5px;
}

.login-register{
  font-size: 11px;
  text-align: center;
}
</style>

<div class="container">
      <div class="row main">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title" style="font-size: 22px;">BookStore Register Form</h1>
                    <hr />
                  </div>
              </div> 
        <div class="main-login main-center">
          <form class="form-horizontal" method="post"  id="register-form">
            
            
            <div id="error">
        <!-- error will be shown here ! -->
        </div>
		
	<div class="form-group">
         <label for="text" class="cols-sm-2 control-label"> Username</label>
             <div class="cols-sm-10">
                <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                 <input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" />
        		<span id="check-e"></span>
                </div>
              </div>
            </div>

     <div class="form-group">
         <label for="email" class="cols-sm-2 control-label"> Email</label>
             <div class="cols-sm-10">
                <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                 <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
        		<span id="check-e"></span>
                </div>
              </div>
            </div>

             <div class="form-group">
         <label for="password" class="cols-sm-2 control-label"> Password</label>
             <div class="cols-sm-10">
                <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                 <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        		<span id="check-e"></span>
                </div>
              </div>
            </div>

              <div class="form-group">
         <label for="password" class="cols-sm-2 control-label"> Password</label>
             <div class="cols-sm-10">
                <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                 <input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
        		<span id="check-e"></span>
                </div>
              </div>
            </div>

	
	
	   <div class="form-group ">
             <button type="submit" name="btn-save" class="btn btn-warning btn-lg btn-block login-button"  id="btn-submit">
        Register
      </button> 
            </div>


		
	<div class="bottom text-center">
                <a href="../index.php">Back</a>
              </div>
            
          </form>
        </div>
      </div>
    </div>
<style type="text/css">
  
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
<?php include('footer.php');?>