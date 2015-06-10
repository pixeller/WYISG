<?php
/**
 * Page Footer.
 *
 */
?>
<footer class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 hidden-xs">
                    <div class="col-sm-6 hidden-xs">
                    	<h4>Official Partners</h4>
                        <ul class="list-inline">
                        	<li><img src="images/archery.png"/></li>
                            <li>Coming soon</li>
                        </ul>
                    </div>    
                    <div class="col-sm-6 hidden-xs">    
                        <h4>Corporate Supporters</h4>
                        <ul class="list-inline">
                        	<li><img src="images/athletics.png"/></li>
                            <li>Coming soon</li>
                        </ul>
                    </div>    
                </div>
                <div class="col-sm-4 social-link">
                	<h4>Follow Us</h4>
                    <ul class="list-inline">
                    	<li><a href="https://www.facebook.com/pages/WYISG-2016/940830505936916" target="_blank"><span class="fa fa-facebook-square fa-2x"></span></a></li>
                        <li><a href="https://twitter.com/youthislamicG16" target="_blank"><span class="fa fa-twitter-square fa-2x"></span></a></li>
                        <!-- <li><a href="#"><span class="fa fa-google-plus-square fa-2x"></span></a></li>
                        <li><a href="#"><span class="fa fa-youtube-square fa-2x"></span></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
        	<div class="container">
            	<div class="row">
                    <div class="col-sm-6">
                        <p>Copyright &copy;2015 WYISG Organization. All rights reserved.</p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline text-right">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
    
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <!-- FlexSlider -->
    <script defer src="js/flexslider/jquery.flexslider.js"></script>

    <script type="text/javascript">
        $(function(){
          SyntaxHighlighter.all();
        });
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });

        $(window).load(function() {
          $('.hotel-list').flexslider({
            animation: "slide",
            itemMargin: 5,
            controlNav: true 

          });
        });
    </script>
    
    <!-- Magnific -->
    <script src="js/magnific/jquery.magnific-popup.min.js"></script>
    <link href="js/magnific/magnific-popup.css" rel="stylesheet">

    <script type="text/javascript">
        $('.gallery').magnificPopup({
          type: 'image',
          delegate: 'a',
          gallery:{
            enabled:true
          }
        });
        $(document).ready(function() {
          $('.image-link').magnificPopup({type:'image'});
        });
    </script>
    

    <!-- Owl Carousel Assets -->
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <!-- Prettify -->
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <script type="text/javascript">
        $(document).ready(function() {
         
          $("#highlights-carousel").owlCarousel({
         
              items : 6,
              itemsDesktop : [1199,5],
              itemsDesktopSmall : [979,5],
              pagination: false
         
          });
         
        });
    </script>


    <!-- Syntax Highlighter -->
    <script type="text/javascript" src="js/flexslider/shCore.js"></script>
    <script type="text/javascript" src="js/flexslider/shBrushXml.js"></script>
    <script type="text/javascript" src="js/flexslider/shBrushJScript.js"></script>

    <!-- Optional FlexSlider Additions -->
    <script src="js/flexslider/jquery.easing.js"></script>
    <script src="js/flexslider/jquery.mousewheel.js"></script>
    <script defer src="js/flexslider/demo.js"></script>

</body>

</html>