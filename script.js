function validateform()
{
    var u=document.getElementById("name").value.trim();
    var e=document.getElementById("email").value.trim();
    var c=document.getElementById("age").value.trim();
    var p=document.getElementById("password").value.trim();
    
    if(u=="")
    {
        alert("Name cannot be empty");
        return false;
    }
    if(c=="")
    {
        alert("Age cannot be empty");
        return false;
    }
    


    if(!e.match(/@/gi))
    {
        alert("Enter Valid Email");
        return false;
    } 
    if(!e.match(/./gi))
   {
       alert("Email must contain (.)");
       return false;
   }
    

    

   if(p.length<3 || p.length>20)
   {
       alert("Password must length must be 3-20");
       return false;
   }
   else{
    return Password();
}
  
    
}
  function Password() {
        var p=document.getElementById("password").value.trim();
        var s = p.toString();
        var numeric =0;
        var upper =0;
        var lower =0;
        var index='';
        var checkpass = /[!@#$%^&*()_+=-~`]/;
        for(var i=0; i < s.length; i++){
            index = s.charAt(i);
            if (!isNaN(index * 1)){
                numeric=1;
            }
            if (index == index.toUpperCase()) {
                upper=1;
            }
            if (index == index.toLowerCase()){
                lower=1;
            }
        }
        if(numeric==0){
            alert('password must contain atleast one numeric value');
            return false;
        }
        if(upper==0){
            alert('password must contain atleast one uppercase');
            return false;
        }
        if(lower==0){
            alert('password must contain atleast one lowercase');
            return false;
        }
        if(!p.trim().match(checkpass)){
            alert("Password can not contain special characters");
            return false;
        }
        
    }


  function refresh(){
    window.location.reload("cancel")
  }

 
  

 