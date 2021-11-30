$(document).ready(function(){
    $(".owl-carousel").owlCarousel({ 
        
        loop: true,
        nav: false,
        dots: true,
         items:1,
      mouseDrag: false,
      mergeFit: false,
      
      autoplay:true,
      autoplayTimeout:5500,
      autoplayHoverPause:false,
        slideTransition: "linear",
        smartSpeed: 650,

         
    });
      var owl = $('.owl-carousel');
  owl.owlCarousel({
      nav:true,
      margin:20,
      responsive:{
          0:{
              items:1,
          },
          600:{
              items:2,
          },            
          1000:{
              items:3,
          },
          1400:{
              items:4,
          }
      }
  });
  
  });
  
  
  
  //owl.on('mousewheel', '.owl-stage', function (e) {
  //    if (e.deltaY>0) {
  //        owl.trigger('next.owl');
  //    } else {
    //      owl.trigger('prev.owl');
      //}
      //e.preventDefault();
  //});  
  
  
  
  function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
  
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }