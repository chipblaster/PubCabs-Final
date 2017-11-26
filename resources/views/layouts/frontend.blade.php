<!DOCTYPE html>
<html lang="en">
@include('frontend.partials.header')
<body>


 @yield('content')

</body>
</html>
<script>
    (function($){
  $(document).ready(function(){

    var navDiv = '#nav';

    // $('#nav-wrapper').css('min-height', $(navDiv).height());
    // $('#nav-wrapper').height($('#nav').height() );

    $(navDiv).affix({
      offset: $(navDiv).position()
    });

  });
//   var wrap = $("#nav");
//   wrap.on("scroll", function(e) {
    
//   if (this.scrollTop > 147) {
//     wrap.addClass("navDiv");
//   } else {
//     wrap.removeClass("navDiv");
//   }
  
// });


})(jQuery);
</script>
<!-- FOOTER -->
