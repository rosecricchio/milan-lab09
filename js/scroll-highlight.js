//Highlight menu on scroll from: https://stackoverflow.com/questions/27610892/highlight-menu-on-scrolling-if-reach-div

  $(document).ready(function(){
       $('nav a').on('click', function(event) {
           $(this).parent().find('a').removeClass('active-highlighted');
           $(this).addClass('active-highlighted');
       });

       $(window).on('scroll', function() {
           $('.par').each(function() {
             var offset = $(this).offset();
             var top = offset.top - $('.nav').height();
             var bottom = top + $(this).height();
               if($(window).scrollTop() >= top) {
                   var id = $(this).attr('id');
                   $('nav a').removeClass('active-highlighted');
                   $('nav a[href=#'+ id +']').addClass('active-highlighted');
               }
           });
       });
     });
