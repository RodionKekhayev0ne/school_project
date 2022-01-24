let flag = false;
        rotate = 0;

        $('.qmenu').click(function () {
          if(!flag){
              rotate+=45;
            $('.dd').css({
                transform: 'rotate(' + rotate + 'deg)',
                transition: 0.75+'s'
            });
           $('.menu-element').slideDown();
          }else{
            rotate+=45;
           $('.menu-element').slideUp();
           $('.dd').css({
                transform: 'rotate(' + rotate + 'deg)',
                transition: 0.75+'s'
            });
          }
          flag = !flag;
        });

        $(document).ready(function(){
  $(".owl-carousel").owlCarousel();
        
});


function openBut(evt, variable) {
  
  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }

 
  tablinks = document.getElementsByClassName("tablinks");

  
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(variable).style.display = "block";
  evt.currentTarget.className += " active";
}