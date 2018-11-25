
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){			
			var email=$("#useremailid").text().trim();
			var fruits_from_server="";
			$.post("get_fruit_information.php",
				    {"email":email},
				    function(data,status){
				    	console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	// alert(fruits_from_server[2].fname);
				    	drawTable(fruits_from_server,email);
				    }
		    );
									
			$(document).on("click","#delete",function(){
					var temp=$(this).attr("name");
					console.log(temp.split(":")[0]+" "+temp.split(":")[1]);
					deleteRow(temp.split(":")[0],temp.split(":")[1]);
			});
			$(document).on("click","#update",function(){
					var temp=$(this).attr("name");
					//console.log(temp);
			});
			$("#btn_add").click(function(){
				$("tbody").remove();
				$.post("add_fruit_information.php",
				    {
				      "email":email,
				      "fruit_name":$("#fruit_name").val(),
				      "quantity":$("#quantity").val(),
				      "price":$("#price").val()
				    },
				    function(data,status){
				    	console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	drawTable(fruits_from_server,email);
				    }
		    	);
			});
			$(document).on("click","#update",function(){
				var index=$(this).attr("name");
				console.log(index);
				console.log(fruits_from_server[index].fname);
				$("#update_fruit").text(fruits_from_server[index].fname);
				$("#update_quantity").val(fruits_from_server[index].quantity);
				$("#update_price").val(fruits_from_server[index].price);

			});
			$("#update_btn").click(function(){
				 $("tbody").remove();
				 $.post("update_fruit_information.php",
				    {
				      "email":email,
				      "fruit_name":$("#update_fruit").text(),
				      "quantity":$("#update_quantity").val(),
				      "price":$("#update_price").val()
				    },
				    function(data,status){
				    	console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	drawTable(fruits_from_server,email);
				    }
		    	);
			});
		});
		function drawTable(fruits,email){
			//console.log(fruits.length);
			for (var i = 0; i < fruits.length; i++) {
        			drawRow(fruits[i],email,i);
    		}
		}
		function drawRow(fruit,email,index)
		{
			    //console.log(fruit.fname);
				var row = $("<tr />");
				var tbody=$("<tbody/>");
				$("#tableone").append(tbody);
			    tbody.append(row); 
			    row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='img/delete.png' width='10' height='10'></td>"));
			    row.append($("<td>" + fruit.fname + "</td>"));
			    row.append($("<td>" + fruit.quantity + "</td>"));
			    row.append($("<td>" + fruit.price + "</td>"));
			    row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='img/update.png' width='20' height='20'></td>"));
		}       
		function deleteRow(email,fruit_name)
		{
			
			$("tbody").remove();
			$.post("delete_fruit_information.php",
				    {"email":email,"fruit_name":fruit_name},
				    function(data,status){				    	
				    	//console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	drawTable(fruits_from_server,email);
				    }
				  );
		}
	</script>
