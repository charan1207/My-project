
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- 

  <script type="text/javascript">
    
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
  <script src="javascript/sellerlogin.js"></script>
    <style type="text/css">
      .top_info_contact> span 
      {
        
        display: block;
        text-align: center;
        padding-top: 5px; 
        font-family: titlefont;       
      }
      hr
      {
        margin-top:5px; 
        //margin-bottom:8px;
      }
      .top_icon_workshopname_info .row div:nth-child(1)
      {
        padding-top:1%;
      }
      .top_icon_workshopname_info .col_icon
      {
        background-color: #001a4d;
        border-radius:10px;
        box-shadow:0px 0px 3px 2px #888888;
        display:block;
        float: right;
        
      }
      .top_icon_workshopname_info h2
      {
        font-family: "titlefont";
        font-weight:bold;
        text-shadow: 4px 4px 4px #888888;
        color: #001a4d;
      }
      .top_icon_workshopname_info .workshop_title_date>h4
      {
        margin-left: 29%;
        //text-align: center;
        font-family: "titlefont";
        text-shadow: 1px 1px 4px #888888;
      }
      .top_icon_workshopname_info 
      {
        background-color: #f2f2f2;
        padding-top: 1%;
        padding-bottom: 1%;
            margin-top:5px;
      }
      .navbar
      {
        border-radius: 0px;
      }
      .navbar-inverse
      {
        //background-color: #ff944d;
        background-color:#00004d;
        border-color: transparent;
        box-shadow: 0px 3px 8px 1px #888888;
      }
      .navbar-inverse .navbar-nav>li>a 
      {
        color: white;
        font-family: titlefont;
        font-size: 11px;
        letter-spacing: 1px;
    }
    .wall_news_updates .carousel
    {
      border-radius:8px;
      box-shadow:0px 0px 8px 3px #888888;
    }
    .wall_news_updates img,.wall_news_updates a
    {
      border-radius:8px;      
    }
    .wall_news_updates 
    {
      margin-bottom: 1%;
    }
    .wall_news_updates .latest_news h4
    {
      text-align: center;
      font-family: titlefont;
      font-weight: bold;
      color:#001a4d;
      text-shadow: 1px 1px 4px #888888;
      letter-spacing:1px;
    }
    .wall_news_updates .latest_news .list-group li
    {
      font-family: titlefont;
    }
    .wall_news_updates .latest_news .list-group li b
    {
      text-shadow: 1px 1px 3px #888888;
    }
    .wall_news_updates .latest_news .list-group li b,.wall_news_updates .latest_news .list-group li span
    {
      display: block;
      text-align: center;
    }
    .sponcors
    {
      margin-bottom: 2%;
    }
    .sponcors h3
    {
      text-align: center;
      font-family: titlefont;
      font-weight: bold;
      color:#001a4d;
      text-shadow: 2px 2px 4px #888888;
      letter-spacing:1px;
    }
    .sponcors img
    {
      display: block;
      margin: 0px auto;
    }
    .footer
    {
      //position:absolute;
        //bottom:0;
        //width:100%;
        //height:20%;
        background-color:#404040;
        //margin:0px auto;
    }
        .footer ul
    {
      text-align:center;
    }
    .footer ul>li
    {

      list-style-type:none;
      font-family: footerfont;

    }
    .footer h4,.footer h5
    {
      text-align:center;
      color:white;
      //font-family: titlefont;
      font-family:footerfont;
      font-weight:bold;
      letter-spacing:2px;
    }
    @media screen and (max-width:768px)
      {
        .top_icon_workshopname_info .col_icon
        {
          clear:both; 
          float:left;       
          display:block;
          //margin:0px auto;
          margin-left:41%;
          //position:absolute;
          //top:0px;
          //bottom:0px;
          //left:0px;
          //right:0px;
          //margin:auto;
          width:20%;
          height:10%;
          //width:40px;
          //height:30px;
        }
        .top_icon_workshopname_info h2
        {
          font-family: "titlefont";
          font-size:20px;
          text-align:center;
          font-weight:bold;
        }
        .top_icon_workshopname_info .workshop_title_date>h4
        {
          margin-left:20%;
        } 
      } 

 
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
                  <li><a href="Buyerlogin.php"><span class="glyphicon glyphicon-log-in"></span>"Buyer login</a></li>                         
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
        <form  id="myform" method="post" action="sellerlogincheck.php">
          <h1>Seller Login</h1>
          
         
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
          <a href="SellerReg.html"><h5 style="color: black">Create an account</h5></a>
        </form>
      </div>
      <div class="col-sm-4">        
      </div>
    </div>
  </div>
</body>
</html>