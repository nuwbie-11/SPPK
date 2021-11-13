var yourNavigation = $(".navbar");

$(window).scroll(function() {
  if( $(this).scrollTop() > 20 ) {
    yourNavigation.addClass("bg-dark");
  } else {
    yourNavigation.removeClass("bg-dark");
  }
});

$(function(){
  $('#sidebarCollapse').on('click',function(){
    $('#sidebar,#content-page').toggleClass('active');
  });
});

// var myfavicon = $(".fa")

// $('.select').hover(function(){
//   $(this).addClass("text-danger");
// },function(){
//   $(this).removeClass("text-danger");
// }
// )\

