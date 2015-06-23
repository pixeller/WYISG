<?php
/**
 * Page Header.
 **/
?>
<!DOCTYPE html>
<html lang="en" <?php if($current == 'home') {echo 'class="home-bg"';} ?>>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>World Youth Islamic Solidarity Games</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link href="css/wyisg.css" rel="stylesheet"> -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Flexslider -->
    <link rel="stylesheet" href="css/flexslider-custom.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <!-- Modernizr -->
    <script src="js/flexslider/modernizr.js"></script>
    
    <script src="js/odometer/odometer.min.js"></script>
    <link rel="stylesheet" href="js/odometer/odometer-theme-default.css" />
    <script>
    setTimeout(function(){
        odometer1.innerHTML = 500;
    }, 300);
    setTimeout(function(){
        odometer2.innerHTML = 100;
    }, 300);
    </script>


</head>
<body <?php if($current == 'home') {echo 'class="home-bg"';} ?>>
<?php include_once("analyticstracking.php") ?>
	<!-- Social Plugin -->
    <div class="addthis">
    	<a href="https://www.facebook.com/pages/WYISG-2016/940830505936916" target="_blank"><img src="images/addthis-fb.jpg" class="img-responsive"/></a>
        <a href="https://twitter.com/youthislamicG16" target="_blank"><img src="Images/addthis-tw.jpg" class="img-responsive"/></a>
        <a href="contact.php" alt="Contact Us"><img src="Images/addthis-contact.jpg" class="img-responsive"/></a>
    </div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          
          <!-- <a class="navbar-brand" href="#"></a> -->
            <div class="brand-logo">
                <img src="images/issf-logo.png" width="70">
                <img src="images/wyisg-logo-x2.png" width="120">
                <img src="images/melaka-logo.png" width="80">
            </div>
            <ul class="nav navbar-nav navbar-icon text-center hidden-xs">
                <li class="dropdown">
                  <a href="#"><i class="fa fa-shopping-cart fa-2x"></i><br>Merchandise</a>
                </li>
                <li class="dropdown">
                  <a href="#"><i class="fa fa-comments-o fa-2x"></i><br>Social Hubs</a>
                </li>
                <li class="dropdown">
                  <a href="#"><i class="fa fa-microphone fa-2x"></i><br>Broadcast</a>
                </li>
            </ul>
        </div>
    

      </div><!-- /.container-fluid -->

        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            
            
            <div class="clearfix"></div>
            <div class="navbar-fluid">
                <div class="container">
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Get Menu Name here -->    
                    <li <?php if($current == 'home') {echo 'class="active"';} ?>><a href="index.php"><i class="fa fa-home"></i></a></li>
                    <!-- <li <?php //if($current == 'results_medals') {echo 'class="active"';} ?> class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Results & Medals</a>                
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Fixtures</a></li>
                            <li><a href="#">Results</a></li>
                            <li><a href="#">Medal Standings</a></li>
                            <li><a href="#">Medalist</a></li>
                            <li><a href="#">Records</a></li>
                          </ul>                    
                    </li> -->
                    <li <?php if($current == 'sports') {echo 'class="active dropdown mega-dropdown"';} ?> class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Sports</a>               
                        <div class="dropdown-menu mega-dropdown-menu">
                            <div class="container-fluid">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                  <div class="tab-pane active" id="men">
                                    <ul class="nav-list list-inline">
                                        <li><a href="sports-archery.php"><img src="images/archery.png"><span>Archery</span></a></li>
                                        <li><a href="sports-athletics.php"><img src="images/athletics.png"><span>Athletics</span></a></li>
                                        <li><a href="sports-badminton.php"><img src="images/badminton.png"><span>Badminton</span></a></li>
                                        <li><a href="sports-tenpin-bowling.php"><img src="images/bowling.png"><span>Bowling</span></a></li>
                                        <li><a href="sports-equestrain.php"><img src="images/equestrian.png"><span>Equestrian</span></a></li>
                                        <li><a href="sports-football.php"><img src="images/football.png"><span>Football</span></a></li>
                                    </ul>
                                    <ul class="nav-list list-inline">
                                        <li><a href="sports-hockey.php"><img src="images/hockey.png"><span>Hockey</span></a></li>
                                        <li><a href="sports-sepak-takraw.php"><img src="images/sepaktakraw.png"><span>Sepak Takraw</span></a></li>
                                        <li><a href="sports-swimming.php"><img src="images/swimming.png"><span>Swimming</span></a></li>
                                        <li><a href="sports-taekwondo.php"><img src="images/taekwando.png"><span>Taekwando</span></a></li>
                                        <li><a href="sports-volleyball.php"><img src="images/volleyball.png"><span>Volley Ball</span></a></li>
                                    </ul>
                                    <!-- <ul class="nav nav-tabs">
                                       <li><a href="#">Athletes</a></li>
                                       <li><a href="#">Countries</a></li>
                                    </ul> -->
                                  </div>
                                  
                                </div>
                            </div>
                                             
                        </div>              
                    </li>
                    <li <?php if($current == 'hosts') {echo 'class="active"';} ?> class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Host</a>
                      <ul class="dropdown-menu" role="menu">
                        <hr style="height:4px; background:#57aa47; margin:5px 15px; border:none; border-radius: 4px;">
                        <li><a href="malacca-history.php">Story Of Malacca As UNESCO World Heritage City</a></li>
                        <li><a href="sports-tourism.php">Sports Tourism</a></li>
                        <li><a href="heritage-trails.php">The Heritage Trails</a></li>
                        <!-- <li><a href="#">Push Card Merchandise</a></li>
                        <li><a href="#">Road Shows</a></li> -->
                      </ul>
                    </li>
                    <!-- <li <?//php if($current == 'ceremonies') {echo 'class="active"';} ?> class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ceremonies</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Opening Ceremony</a></li>
                        <li><a href="#">Games Opening Ceremony</a></li>
                        <li><a href="#">Closing Ceremony</a></li>
                      </ul>
                    </li> -->
                    <li <?php //if($current == 'mascots') {echo 'class="active"';} ?> class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Mascots</a>
                      <ul class="dropdown-menu" role="menu">
                        <hr style="height:4px; background:#57aa47; margin:5px 15px; border:none; border-radius: 4px;">
                        <li><a href="javascript:;">Coming Soon</a></li>
                      </ul>
                    </li>
                    <li <?php if($current == 'sports_venues') {echo 'class="active"';} ?> class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Venues</a>
                      <ul class="dropdown-menu" role="menu">
                        <hr style="height:4px; background:#57aa47; margin:5px 15px; border:none; border-radius: 4px;">
                        <li><a href="sports-venues-archery.php">Archery</a></li>
                        <li><a href="sports-venues-athletics.php">Athletics</a></li>
                        <li><a href="sports-venues-aquatics.php">Aquatics</a></li>
                        <li><a href="sports-venues-badminton.php">Badminton</a></li>
                        <li><a href="sports-venues-equestrian.php">Equestrian</a></li>
                        <li><a href="sports-venues-football.php">Football</a></li>
                        <li><a href="sports-venues-hockey.php">Hockey</a></li>
                        <li><a href="sports-venues-taekwondo.php">Taekwondo</a></li>
                        <li><a href="sports-venues-tenpin-bowling.php">Tenpin Bowling</a></li>
                        <li><a href="sports-venues-volley-ball.php">Volleyball</a></li>
                        <li><a href="sports-venues-venue.php">Venue</a></li>
                      </ul>
                    </li>


                    <li <?php if($current == 'travel_transports') {echo 'class="active"';} ?> class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Travel & Transports</a>
                      <ul class="dropdown-menu" role="menu">
                        <hr style="height:4px; background:#57aa47; margin:5px 15px; border:none; border-radius: 4px;">
                        <li><a href="accommodations.php">Accommodations</a></li>
                      </ul>
                    </li>
                    <li <?php if($current == 'more') {echo 'class="active"';} ?> class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu">
                        <hr style="height:4px; background:#57aa47; margin:5px 15px; border:none; border-radius: 4px;">
                        <!-- <li><a href="#">Our Sponsors</a></li> -->
                        <li><a href="photo-gallery.php">Gallery</a></li>
                        <!-- <li><a href="#">News</a></li> -->
                        <li><a href="video-gallery.php">Videos</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="about.php">About Us</a></li>
                      </ul>
                    </li>
                </ul>
                </div>
            </div>
        </div><!-- /.navbar-collapse -->

    </nav>