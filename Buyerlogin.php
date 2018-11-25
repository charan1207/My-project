<?php 
session_start();
if(isset($_SESSION['email']))
{
  header('location:test.php');
}
if(isset($_GET['logout']))
{
unset($_SESSION['email']);
session_destroy();
header('location:Buyerlogin2.php');
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="javascript/Buyerlogin.js"></script>
 <!--  <script type="text/javascript">
    
    var useremail=false;
    var password=false;
    
    var check_confirm=false;
    
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var password_reg= /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    var temp;
    var re2=/^[A-Za-z]{5}\d{4}[A-Za-z]{1}/;
   
   var re3=/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/;
   var re4=/^\d+\s[A-z]+\s[A-z]+/;

    function validation(field)
    {
      
      if(field=='useremail')
      {
        
        temp=document.getElementById("email").value;
        temp=re.test(String(temp).toLowerCase());
        if((temp=="")||(temp==false))
        {
          document.getElementById("error_email").style.display="block";
          useremail=false;
        } 
        else
        {
          document.getElementById("error_email").style.display="none";
          useremail=true;
        } 
      }
      else if(field=='password')
      {
        
        temp=document.getElementById("password").value;
        temp=password_reg.test(temp);
        if((temp=="")||(temp==false))
        {
          document.getElementById("error_password").style.display="block";
          password=false;
        } 
        else
        {
          document.getElementById("error_password").style.display="none";
          password=true;
        }
       
        
      }
      
     
      if((useremail==true)&&(password==true))
      {
        document.getElementById("form_button").disabled=false;
      } 
      else
      {
        document.getElementById("form_button").disabled=true;
      } 
    }
    function cheking() {
      check_confirm=true;
    }
    function form_send() 
    {
      console.log("good");
    }
  </script>  -->
  <style type="text/css">
    .container
    {
      margin-top: 10%;
    }
    .container>.row>div:nth-child(2)    
    {
      border: 3px solid #e9e9e9;
      border-radius: 10px;
      padding:4%;
    }
    .container>.row>div:nth-child(2)>form>button
    {
      display: block;
      margin:0px auto;
      background-color: #84e184;
    }
    .container>.row>div:nth-child(2)>form p
    {
      display: none;
    }   
  </style>  
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="Sellerlogin.php"><span class="glyphicon glyphicon-log-in"></span>Seller Login</a></li>  
                                       
                </ul>
            </li> 

      </ul>
    </div>
  </div>
</nav>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">        
      </div>
      <div class="col-sm-4">
        <form  id="myform" method="post" action="buyerlogincheck.php">
          <h1>BuyerLogin</h1>
          
         
          <!-- <div class="form-groudiv">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">
          </div> -->
          <div class="form-group">

             <i class="fa fa-envelope icon"></i>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" onkeyup="validation('useremail')">
            <p id="error_email" style="color: red">enter valid email id</p>
          </div>
           
          <div class="form-group">
            <i class="fa fa-key icon"></i>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" onkeyup="validation('password')">
            <p id="error_password" style="color: red">enter valid password</p>
          </div>
          <button type="submit" id="form_button" value="button" class="btn btn-default" onclick="form_send()" disabled="true">submit</button>
          <a href="BuyerReg.html"><h5 style="color: black">Create an account</h5></a>
        </form>
      </div>
      <div class="col-sm-4">        
      </div>
    </div>
  </div>
</body>
</html>