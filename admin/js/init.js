(function($){
  $(function(){

    $('.sidenav').sidenav();
      
      
     // init slider
 
 $(document).ready(function(){
    $('.slider').slider({
        fullWidth:true,
        indicators:false,
        height:490
    });
  });
  const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
   const instancesDropdown = M.Dropdown.init(elemsDropdown,{
       coverTrigger:false,
       hover:true
       
   });  
    $(document).ready(function(){
    $('.modal').modal();
  });
  }); // end of document ready
})(jQuery); // end of jQuery name space
