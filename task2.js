"use strict";
$("#id1").click(function(e){
  e.preventDefault();
  
  

  //$(this).val(getText("1.txt")) ;
  fetch("1.txt", {
        method: 'GET',
        
      })
      .then(response => response.text())
      .then(result =>{
        $(this).val(result);   
       
      });
});

