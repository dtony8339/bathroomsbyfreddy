

<script>
  {literal}
if (matchMedia) {
  const mq = window.matchMedia("(min-width: 991px)");
  mq.addListener(WidthChange);
  WidthChange(mq);
}

// media query change
function WidthChange(mq) {
  if (mq.matches) {
    $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });
  } else {
    // window width is less than 991px
  }

}
{/literal}
</script>

<script>
  {literal}
  $(window).scroll(function() {
  if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
          $('.back-to-top').fadeIn(200);    // Fade in the arrow
      } else {
          $('.back-to-top').fadeOut(200);   // Else fade out the arrow
      }
  });
  $('.back-to-top').click(function() {      // When arrow is clicked
      $('body,html').animate({
          scrollTop : 0                       // Scroll to top of body
      }, 500);
  });
  {/literal}
</script>
<!--Script for Scroll Fix-->
<script src="{$smarty.const.root_js}custom.js"></script>
<!--Script for Pretty Ptoto-->
</body>
</html>

