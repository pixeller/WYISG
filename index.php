<?php $current = 'home' ?>
<?php include 'header.php'; ?>
    

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            
            <div class="item active">
                <div class="fill" style="background-image:url(images/banner3.jpg);"></div>
                <div class="carousel-caption">
                    <h3>OUR HOST, MALACCA</h3>
                </div>
            </div>
            <!-- <div class="item">
                <div class="fill" style="background-image:url(images/banner1.jpg);"></div>
                <div class="carousel-caption">
                    <img src="images/wyisg-logo.png">
                    <span>15 October - 23 October 2016</span>
                </div>
            </div> -->

            <div class="item">
                <div class="fill" style="background-image:url(images/banner4.jpg);"></div>
                <div class="carousel-caption">
                    <h3>OUR OFFICIAL LAUNCH</h3>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url(images/banner5.jpg);"></div>
                <div class="carousel-caption">
                    <h3>OUR VENUES</h3>
                </div>
            </div>
            
        </div>

        <!-- Controls -->
        <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>-->
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Content -->
        <div class="row body-content home">
            <div class="highlight">
            	<div class="col-md-12">
                    <h1 class="page-header">
                        Highlights
                    </h1>
                    <span class="view-more">
                        <a class="btn btn-link" href="gallery-event-launching.php">
                        View more <i class="fa fa-angle-double-right"></i>
                        </a>
                    </span>
            	</div>
            	<div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                    	<div id="highlights-carousel" class="thumb-wrap gallery">
                            <div class="thumbnail item">
                                <a href="images/gallery/event-launching/large/01.JPG">
                                    <img src="images/gallery/event-launching/thumb/01.JPG" class="img-responsive">
                                    <span class="thumb-text">Event Launching</span>
                                </a>
                            </div>
                            <div class="thumbnail item">
                                <a href="images/gallery/event-launching/large/02.JPG">
                                    <img src="images/gallery/event-launching/thumb/10.JPG" class="img-responsive">
                                    <span class="thumb-text">Event Launching</span>
                                </a>
                            </div>
                            <div class="thumbnail item">
                                <a href="images/gallery/event-launching/large/03.JPG">
                                    <img src="images/gallery/event-launching/thumb/03.JPG" class="img-responsive">
                                    <span class="thumb-text">Event Launching</span>
                                </a>
                            </div>
                            <div class="thumbnail item">
                                <a href="images/gallery/event-launching/large/04.JPG">
                                    <img src="images/gallery/event-launching/thumb/04.JPG" class="img-responsive">
                                    <span class="thumb-text">Event Launching</span>
                                </a>
                            </div>
                            <div class="thumbnail item">
                                <a href="images/gallery/event-launching/large/05.JPG">
                                    <img src="images/gallery/event-launching/thumb/05.JPG" class="img-responsive">
                                    <span class="thumb-text">Event Launching</span>
                                </a>
                            </div>
                            <div class="thumbnail item">
                                <a href="images/gallery/event-launching/large/06.JPG">
                                    <img src="images/gallery/event-launching/thumb/06.JPG" class="img-responsive">
                                    <span class="thumb-text">Event Launching</span>
                                </a>
                            </div>
                            <div class="thumbnail item">
                                <a href="images/gallery/event-launching/large/07.JPG">
                                    <img src="images/gallery/event-launching/thumb/07.JPG" class="img-responsive">
                                    <span class="thumb-text">Event Launching</span>
                                </a>
                            </div>
                            <div class="thumbnail item">
                                <a href="images/gallery/event-launching/large/08.JPG">
                                    <img src="images/gallery/event-launching/thumb/08.JPG" class="img-responsive">
                                    <span class="thumb-text">Event Launching</span>
                                </a>
                            </div>
                            <div class="thumbnail item">
                                <a href="images/gallery/event-launching/large/09.JPG">
                                    <img src="images/gallery/event-launching/thumb/09.JPG" class="img-responsive">
                                    <span class="thumb-text">Event Launching</span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
           		</div>
                <div class="clearfix"></div>
            </div>
            
            <!-- Video & Scoreboard Section -->
            <div class="col-md-8">
                <div class="video">
                <h4>Latest Video <a href="video-gallery.php"><span class="view-more">View All <i class="fa fa-angle-double-right"></i></span></a></h4>
                    <video width="100%" controls poster="images/placeholder.png">
                      <source src="http://pixeller.co/WYISG/video/WYISG_150306.mp4">
                      <source src="http://pixeller.co/WYISG/video/WYISG_150306.ogv" type="video/ogg">
                      <source src="http://pixeller.co/WYISG/video/WYISG_150306.webm" type="video/webm">
                      <img src="/images/placeholder.png" title="Your browser does not support HTML5 video.">
                    </video>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="scoreboard">
            	<div class="layer"><span>Coming Soon</span></div>
                    <h4>Latest Medallists <span class="view-more">View All <i class="fa fa-angle-double-right"></i></span></h4>
                    <div class="panel-body">
                    	<table class="table table-striped table-condensed"> 
                                  <tbody>
                                  <thead>
                                  	<tr>
                                    	<th></th>
                                        <th></th>
                                        <th class="text-right">Gold</th>
                                        <th class="text-right">Silver</th>
                                        <th class="text-right">Bronze</th>
                                    </tr>
                                  </thead>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                        <span class="label label-success">MY</span>
                                        </td>
                                        <td class="text-right">2</td>
                                        <td class="text-right">3</td>
                                        <td class="text-right">8</td>                                       
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                        <span class="label label-info">ID</span>
                                        </td>
                                        <td class="text-right">7</td>
                                        <td class="text-right">4</td>
                                        <td class="text-right">3</td>                                       
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                        <span class="label label-warning">PH</span>
                                        </td>
                                        <td class="text-right">7</td>
                                        <td class="text-right">4</td>
                                        <td class="text-right">3</td> 
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                        <span class="label label-primary">ARB</span>
                                        </td>
                                        <td class="text-right">7</td>
                                        <td class="text-right">4</td>
                                        <td class="text-right">3</td> 
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                        <span class="label label-success">SG</span>
                                        </td>
                                        <td class="text-right">7</td>
                                        <td class="text-right">4</td>
                                        <td class="text-right">3</td> 
                                    </tr>                                   
                                  </tbody>
                                </table>
                    </div>
                </div>
            </div>
            
            <div class="clearfix"></div>
            <hr>
            <div class="newsletter text-center">
            	<h2>Enter your email and <span>subscribe</span> to our newsletter.</h2>
                <p>Get exclusive update and promote about WYISG event</p>
                <form class="form-inline">
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                      <input type="text" class="form-control" id="newsletter" placeholder="Email" required>
                      <btn class="input-group-addon btn btn-primary" type="submit">Sign Up</btn>
                    </div>
                  </div>
                  
                </form>
                <div class="clearfix"></div>
            </div>
            <hr>
            
        </div>
        <!-- /.row -->

        <!-- Footer -->
        

    </div>
    <!-- /.container -->
<?php include 'footer.php'; ?>