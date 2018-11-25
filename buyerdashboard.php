<?php
session_start();
if(!isset($_SESSION['buyeremail']))
{
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
  		.result_container>.row>div:nth-child(2)>.result>ul>li
  		{
  			margin-top: 2%;
  		}
  		.result_container>.row>div:nth-child(2)>.result>ul>li>span
  		{
  			margin-left: 5%;
  		}
  		.result_container>.row>div:nth-child(2)>.result>ul>li>button
  		{
  			float: right;
  			background-color: #5c85d6;
  		}
  		#shop{
  			
  			padding-top: 2px;
 	background-color: #4DF942;
   color: white;
   font-size: 20px;
   padding: 5px 10px;
   margin: -2px 0;
   border: none;
   cursor: pointer;
   width: 50%;
   border-radius: 12px;
  		}
  	</style>
  	<!-- <script type="text/javascript">
  		var buyeremailid="";
		var sellers_from_server="";
		var unorderedlist="";
		var fruittable="";
		var thead="";
		var colrow="";
		var sellers_fruits_from_server="";
		var money_from_server="";
  		$(document).ready(function(){
  			buyeremailid= $("#emailidinh1tag").text().trim();
  			console.log(buyeremailid);
			sellersInformation();
			walletclick();
		    $(document).on("click","#shop",function(){
		    	// console.log($(this).attr("name"));
		    	 $("ul").remove();
		    	 $.post("get_fruit_information.php",
				    {"email":sellers_from_server[$(this).attr("name")].semail},
				    function(data,status){
				    	//console.log(buyeremailid);
				    	sellers_fruits_from_server=JSON.parse(data);
				    	drawTable(sellers_fruits_from_server);
				    	//walletclick();
				    }
		    	);

		    });
  		});
  		function sellersInformation()
  		{
  			$("table").remove();
  			$.post("get_sellers_information.php",
				    {"email":""},
				    function(data,status){
				    	//console.log(data);
				    	sellers_from_server=JSON.parse(data);

				    	drawList(sellers_from_server);
				    }
		    );
  		}
  		function walletclick()
  		{
  			//$('table').remove();
  			$.post("get_walletinfo.php",{"email":buyeremailid},
  				function(data,email){
  					$("#walletiid").text(data);

  				}
  				);
  		}
  		
  		function drawList(sellers)
  		{
  			unorderedlist = $("<ul class='list-group'/>");
  			$("ul").remove();
  			$("#result").append(unorderedlist);

  			for(var i=0;i<sellers.length;i++)
  			{
  				drawListItem(sellers[i],i);
  			}
  		}
  		function drawListItem(seller,index)
  		{
  		 	// unorderedlist.append($("<li class='list-group-item'><span>"+seller.sname+"</span><span>"+seller.semail+"</span><span>"+seller.shopname+"</span><button class='btn btn-default' type='button' id='shop' name='"+index+"'>shop</button></li>"));

  			unorderedlist.append($("<li class='list-group-item'><h4>Seller Email<h4><h5>"+seller.semail+"</h5><br><h4>Seller Shop Name<h4><h5>"+seller.shopname+"</h5><button class='btn btn-default' type='button' id='shop' name='"+index+"'>shop</button><br><br></li>"));

  		}
  		function drawTable(fruits){
			//console.log(fruits.length);
			fruittable= $("<table class='table table-striped'/>");
			thead=$("<thead/>");
			colrow=$("<tr>");
			thead.append(colrow);
			colrow.append("<td>FruitName</td>");
			colrow.append("<td>Qunatity</td>");
			colrow.append("<td>Price</td>");
			fruittable.append(thead);
			$("#result").append(fruittable);
			for (var i = 0; i < fruits.length; i++) {
        			drawRow(fruits[i],i);
    		}
		}
		function drawRow(fruit,index)
		{
			    //console.log(fruit.fname);
				var row = $("<tr />");
				var tbody=$("<tbody/>");
				fruittable.append(tbody);
			    tbody.append(row); 
			    //row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='delete.png' width='10' height='10'></td>"));
			    row.append($("<td>" + fruit.fname + "</td>"));
			    row.append($("<td>" + fruit.quantity + "</td>"));
			    row.append($("<td>" + fruit.price + "</td>"));
			    //row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='update.png' width='20' height='20'></td>"));
		}       
  	</script> -->
    <script src="javascript/buyerdashboard.js"></script>
</head>
<body>
<div>
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
          <span class="glyphicon glyphicon-log-out" style="text-align-right " ></span>
        </a></li>

      </ul>
    </div>
  </div>
</nav>

</div>
<div>	<h1 id="emailidinh1tag"> <?php echo $_SESSION['buyeremail']; ?></h1>
	<a href="home.php?logout='1'">logout</a>
	<div class="container result_container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<button type="button" class="btn btn-default" onclick="sellersInformation()">DashBoard Home</button>
				<button type="button"  class="btn btn-default">wallet</button>
				<h2>wallet</h2>
				<div id="walletiid">
					
				</div>
				
						
				<div class="result" id="result">
		<!-- <table><tr><th>Name</th><th>Email</th><th>Store Name</th></tr></table>
		 -->		
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>

</body>
</html>