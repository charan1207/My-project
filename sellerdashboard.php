<?php
session_start();
if (!isset($_SESSION['email'])) {
		header('location:home.php');
	}	
  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.fruit_information>.row>div>table img
		{
			cursor: -webkit-grab; cursor: grab;
		}
		.fruit_information
		{
			//background-color:#e8e8e8;
		}
		.add_fruit_information
		{
			margin-top: 2%;
		}
	</style>

<script src="javascript/sellerdashboard.js"></script>
</head>
<body>
<!--start Modal add information-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  
                  <li><a href="Buyerlogin.php"><span class="glyphicon glyphicon-log-in"></span>"Buyer login</a></li>                         
                </ul>
            </li>  -->
            <li> <a href="home.php?logout='1'">
          <span class="glyphicon glyphicon-log-out"></span>
        </a></li>

      </ul>
    </div>
  </div>
</nav>

<h1 id="useremailid"><?php echo $_SESSION['email']; ?></h1>
<!-- <p>Log-out icon as a link:
        <a href="home.php?logout='1'">
          <span class="glyphicon glyphicon-log-out"></span>
        </a>
      </p> -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
           <form >
					<div class="form-group">
  						<label> FruitName:</label>
  						<input type="text" class="form-control" id="fruit_name">
					</div>
					<div class="form-group">
  						<label>Quantity:</label>
  						<input type="text" class="form-control" id="quantity">
					</div>
					<div class="form-group">
  						<label>Price:</label>
  						<input type="text" class="form-control" id="price">
					</div>
					<button type="button" id="btn_add" class="btn btn-default" data-dismiss="modal">Add</button>
			</form>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--End Modal add information-->
<!--start Modal update-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="update_fruit"></h4>
        </div>
        <div class="modal-body">
           <form>
           		<div class="form-group">
           			<label>Qunatity</label>
           			<input type="number" id="update_quantity" class="form-control">           			
           		</div>
           		<div class="form-group">
           			<label>Price</label>
           			<input type="number" id="update_price" class="form-control">           			
           		</div>
           		<button id="update_btn" type="button" class="btn btn-default" data-dismiss="modal">Update</button>
           </form>           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--End Modal update-->
  
	<div class="container fruit_information" style="">
		<div class="row">
			<div class="col-xs-12 col-sm-3"></div>
			<div class="col-xs-12 col-sm-6">
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">Add</button>

				<table class="table table-striped" id="tableone">
					<thead>
						<tr>
							<th>Delete</th>
							<th>Fruit</th>
							<th>Quantity</th>
							<th>Price/Unit</th>
							<th>Update</th>
						</tr>
					</thead>					
				</table>
			</div>
			<div class="col-xs-12 col-sm-3"></div>
		</div>
	</div>
	<!-- <div class="container add_fruit_information">
		<div class="row">
			<div class="col-xs-12 col-sm-4"></div>		
			<div class="col-xs-12 col-sm-4">
				
			</div>		
			<div class="col-xs-12 col-sm-4"></div>		
		</div>
	</div> -->
</body>
</html>