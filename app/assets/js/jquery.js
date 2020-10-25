function formValidation(){
    var name = $("#name").val();  
    var userName = $("#userName").val();
    var email = $("#email").val();
    var password = $("#password").val();


    if(name=="")
    {
         $("#div_erroe").show();
         $("#div_erroe").text("The Name field is requird");
         return false;
       
    }//end if
    return true;

  /*  var NameLetters =/^[a-zA-Z]+$/;
    if(username==="")
    {
         NameMessage.style.visibility="visible";
         NameMessage.innerHTML="The Name field is requird";
       //  f = 0;
    }//end if
    else if(username.match(NameLetters))
    {
         NameMessage.style.visibility="visible";
         NameMessage.innerHTML="true";  
         f = 1;         
    }//end if
    else
    {
        NameMessage.style.visibility="visible";
        NameMessage.innerHTML="Please enter a valid Name";
      //  f = 0;
    }//end else*/
}