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
 