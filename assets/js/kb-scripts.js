(function($){

    $(document).ready(function(){
        $('#menu-switch').click(function(){
            $('.sidebar').toggleClass('active-mobile');
        });
    });

})(jQuery);


// $( document ).ready(function() {
//     menu = $(".menu-inline");
//     $(function () {
//         $(window).scroll(function().bind('scroll', function () {
//             if (menu.offset().top + menu.innerHeight() <= window.scrollY) {
//                 alert('end reached');
//             }
//         });
//     })
// });

// menu = $(".menu-inline");
// $(window).scroll(function(){
//   if(menu.offset().top + menu.innerHeight() <= window.scrollY) {
//     alert('hey!');
//   }else{
//
//   }
// });

$( document ).ready(function() {
  menu = $(".menu-inline");
  $(window).scroll(function(){
    if(menu.offset().top + menu.innerHeight() <= window.scrollY) {
      $('.ganttview-hzheader').addClass('fixed');
      console.log('hey');
    }else{
      $('.ganttview-hzheader').removeClass('fixed');
    }
  });
});
