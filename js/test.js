// Creating a cookie after the document is ready 
$(document).ready(function () { 
    console.log(JSON.stringify(localStorage.getItem('productInCart')));
    createCookie("OrderInCart", JSON.stringify(localStorage.getItem('productInCart')) , "10"); 
}); 
   
// Function to create the cookie 
function createCookie(name, value, days) { 
    var expires; 
      
    if (days) { 
        var date = new Date(); 
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
        expires = "; expires=" + date.toGMTString(); 
    } 
    else { 
        expires = ""; 
    } 
      
    document.cookie = escape(name) + "=" +  
        escape(value) + expires + "; path=/"; 

} 