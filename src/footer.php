
<section id="lh" class="footer">
  <div class="container">

      <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="title text-center">LIÊN HỆ</h1>
          </div>
        </div>


    <div class="row">

        <div class="col-sm-6">
            <h3><strong>ĐẠI LÝ BÁN VÉ MÁY BAY TOÀN QUỐC</strong></h3>
            <br>  
            <ul>
			  <li><strong>Văn phòng đại diện TP.HN</strong></li>
			  <li><strong>Địa Chỉ:</strong> Phường Phú Diễn, Quận Bắc Từ Liêm, Thành Phố Hà Nội</li>
			  <li><strong>Phone:</strong> 0348939015</li></ul>
            
            
            
        </div>

        <div class="col-sm-3">
            <h3><strong>Liên hệ đăng ký đại lý:</strong></h3>
            <br>
            
            <ul>
              <li style="color:white"><a href="mailto:ngodat1610@gmail.com"><p style="color:white">tuyenpham191103@gmail.com</p></a></li>
            <li>0348939015</li></ul>
            
            
            
        </div>

        <div class="col-sm-3">
            <h3><strong>Liên hệ nhờ hỗ trợ:</strong></h3>
            <br>
            <ul>
              <li style="color:white"><a href="mailto:ngodat1610@gmail.com"><p style="color:white">tuyenpham191103@gmail.com</p></a></li>
              <li>0348939015</li>
              
          </ul>
              
        
      
            
      </div>
        

    </div>
  </div>
</section>

<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="copyrightInner"><strong>@ 2023 author: Phạm Văn Tuyến.</strong></div>
      </div>
    </div>
  </div>
</section>

<!-- Modal 
<div id="thongbao" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ĐẶT VÉ ONLINE</h4>
        </div>
        <div class="modal-body">
          <img src="images/thong-bao.jpg" />
        </div>
      
      </div>
  
    </div>
  </div>
-->
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/toggle.js"></script> 


<script type="text/javascript">
jQuery(function(){
	jQuery('#BB-nav').affix({
		offset: {
			top: jQuery('#BB-nav').height()
		}
	});
});
	
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top 
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script>
<script>
  $('.m-menu a').click(function (e) {
	$('.m-menu').collapse('toggle');
  });
</script>
<script type="text/javascript">
(function($) {
    var $window = $(window),
        $menu = $('#menu');
    $window.resize(function resize(){
        if ($window.width() < 990) {
            return $menu.addClass('m-menu');
        }
        $menu.removeClass('m-menu');
    }).trigger('resize');
})(jQuery);
</script>
<script>
$(document).ready(function() {
  var owl = $("#banner-new");
  owl.owlCarousel({
  items : 1,
  itemsDesktop : [1000,1],
  itemsDesktopSmall : [900,1],
  itemsTablet: [600,1],
  itemsMobile : [400,1],
  autoPlay: 5000 
  });


  $('.toggle-collapse').click( function(e) {
      e.preventDefault();
      $(this).siblings(".msg").toggleClass("small-class big-class");
      if ($(this).siblings(".msg").hasClass("big-class")) {
        $(this).text('Rút gọn');
      } else {
        $(this).text('Xem thêm');
      }
  });

  $('#thongbao').modal('show');


});

</script> 


</body>
</html>