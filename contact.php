<?php $current = 'more' ?>
<?php include 'header.php'; ?>
    

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
            	<ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
                <h1 class="page-header">Contact Us
                </h1>
                
            </div>
        </div>
        <!-- /.row -->
		<div role="tabpanel">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-tabs-gap" role="tablist">
        <li role="presentation" class="active"><a href="#enquiry" aria-controls="home" role="tab" data-toggle="tab">General Enquiries</a></li>
        <li role="presentation"><a href="#career" aria-controls="profile" role="tab" data-toggle="tab">Careers</a></li>
        <li role="presentation"><a href="#volunteer" aria-controls="messages" role="tab" data-toggle="tab">Volunteers</a></li>
        <li role="presentation"><a href="#marketing" aria-controls="settings" role="tab" data-toggle="tab">Marketing & Sponsorship</a></li>
      </ul>
    
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="enquiry">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-8">
                    <h3>Your Feedback</h3>
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Subject:</label>
                                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your subject.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Message:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-success">Send Message</button>
                    </form>
                </div>
                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <!-- Embedded Google Map -->
                    <img src="images/google-map.jpg" class="img-responsive" style="width:100%"/>
                    
                    <h3>WYISGOC16 Secretarial Office</h3>
                    <p>
                        <strong>Gold Coast (Malacca) International Resort</strong><br>
                        Lot 44, Jalan Wakaf Utama,<br>
                        Off Jalan Tun Hamzah,<br>
                        75450 Bukit Katil,<br>
                        Melaka
                        <br>
                    </p>
                    <p><i class="fa fa-phone"></i> 
                        <abbr title="Phone">Tel</abbr>: +606-253 1616/3636
                    </p>
                    <p><i class="fa fa-fax"></i> 
                        <abbr title="Fax">Fax</abbr>: +606-253 3636
                    </p>
                    <p><i class="fa fa-envelope"></i> 
                        <abbr title="Email">Email</abbr>: info@wyig16.com 
                    </p>
                    <p><i class="fa fa-clock-o"></i> 
                        <abbr title="Hours">H</abbr>: Monday - Friday: 09:00 – 17:00 (GMT +8:00)
                    </p>
                    <!--<ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li>
                    </ul>-->
                </div>
            </div>
        </div>
        
        <div role="tabpanel" class="tab-pane fade" id="career">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-8">
                    <h3>Careers</h3>
                    <p>We are currently searching for more WYISGers to join our family. We welcome all our WYISGers in open hands to apply for the following positions:</p>
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Job Title	</th>
                                <th>Description</th>
                                <th>Vacancies</th>
                                <th>Status</th>
                            </tr>
                                
                        </thead>
                        <tr>
                            <td>
                            Assistant Manager, IT	
                            </td>
                            <td>Able to assist the Senior manager or manager on IT Duty</td>
                            <td>	1	</td>
                            <td>APPLY</td>
                        </tr>
                        <tr>
                            <td>Executive, Admin</td>
                            <td>Assist the Secretarial HOD in admin work</td>
                            <td>	2	</td>
                            <td>CLOSED</td>
                        </tr>
                        <tr>
                            <td>Executive, Venue & Hotel	</td>
                            <td>Assist the hotels & venues manager or assistant manager in hotel & venue affairs	</td>
                            <td>	4		</td>
                            <td>APPLY</td>
                        </tr>
                    </table>
                    
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>Age:</label>
                                    <input type="number" class="form-control" id="age" required data-validation-required-message="Please enter your age.">
                                </div>
                            </div>
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>Contact:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your contact.">
                                </div>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Position:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your position.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Your resume:</label>
                                <input id="uploadBtn" type="file" class="upload well well-sm" data-toggle="tooltip" data-placement="top" title="Upload your resume">
                            </div>
                        </div>
                        
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Your experience:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your experience" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                    
                    <hr/>
                    
                    <h3>SIGN UP AS OUR COMMITTEE FAMILY</h3>
                    <p>Any WYISGers wishes to seek other challenges in our committee kindly fill in your details as below and attach your resume and submit to us. Kindly share with us clearly your pass experience and your knowledge and skills:</p>
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>Age:</label>
                                    <input type="number" class="form-control" id="age" required data-validation-required-message="Please enter your age.">
                                </div>
                            </div>
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>Contact:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your contact.">
                                </div>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Position:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your position.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Your resume:</label>
                                <input id="uploadBtn" type="file" class="upload well well-sm" data-toggle="tooltip" data-placement="top" title="Upload your resume">
                            </div>
                        </div>
                        
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Your experience:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your experience" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <!-- Embedded Google Map -->
                    <img src="images/google-map.jpg" class="img-responsive" style="width:100%"/>
                    
                    <h3>WYISGOC16 Secretarial Office</h3>
                    <p>
                        <strong>Gold Coast (Malacca) International Resort</strong><br>
                        Lot 44, Jalan Wakaf Utama,<br>
                        Off Jalan Tun Hamzah,<br>
                        75450 Bukit Katil,<br>
                        Melaka
                        <br>
                    </p>
                    <p><i class="fa fa-phone"></i> 
                        <abbr title="Phone">Tel</abbr>: +606-253 1616/3636
                    </p>
                    <p><i class="fa fa-fax"></i> 
                        <abbr title="Fax">Fax</abbr>: +606-253 3636
                    </p>
                    <p><i class="fa fa-envelope"></i> 
                        <abbr title="Email">Email</abbr>: job@wyig16.com 
                    </p>
                    <p><i class="fa fa-clock-o"></i> 
                        <abbr title="Hours">H</abbr>: Monday - Friday: 09:00 – 17:00 (GMT +8:00)
                    </p>
                    <!--<ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li>
                    </ul>-->
                </div>
            </div>
        </div>
        
        <div role="tabpanel" class="tab-pane fade" id="volunteer">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-8">
                    <h3>Volunteers</h3>
                    <p>We are currently searching for more volunteers to join our family. We welcome all our volunteers in open hands to apply for the following volunteering position:</p>
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Job Title	</th>
                                <th>Description</th>
                                <th>Vacancies</th>
                                <th>Status</th>
                            </tr>
                                
                        </thead>
                        <tr>
                            <td>Security	
                            </td>
                            <td>Able to assist the Senior manager or manager on IT Duty</td>
                            <td>	1</td>
                            <td>APPLY</td>
                        </tr>
                        <tr>
                            <td>Logistic	</td>
                            <td>Assist the Secretarial HOD in admin work</td>
                            <td>	2</td>
                            <td>	CLOSED</td>
                        </tr>
                        <tr>
                            <td>Road Shows	</td>
                            <td>Assist the hotels & venues manager or assistant manager in hotel & venue affairs	</td>
                            <td>4	</td>
                            <td>APPLY</td>
                        </tr>
                    </table>
                    
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>Age:</label>
                                    <input type="number" class="form-control" id="age" required data-validation-required-message="Please enter your age.">
                                </div>
                            </div>
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>Contact:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your contact.">
                                </div>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Position:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your position.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Your resume:</label>
                                <input id="uploadBtn" type="file" class="upload well well-sm" data-toggle="tooltip" data-placement="top" title="Upload your resume">
                            </div>
                        </div>
                        
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Your experience:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your experience" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-success">Send Message</button>
                    </form>
                    
                    <hr>
                    
                    <h3>SIGN UP AS OUR VOLUNTEERS</h3>
                    <p>Any volunteer wishes to seek other challenges in our committee kindly fill in your details as below and attach your resume and submit to us. Kindly share with us clearly your pass experience and your knowledge and skills:</p>
    
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>Age:</label>
                                    <input type="number" class="form-control" id="age" required data-validation-required-message="Please enter your age.">
                                </div>
                            </div>
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>Contact:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your contact.">
                                </div>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Position:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your position.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Your resume:</label>
                                <input id="uploadBtn" type="file" class="upload well well-sm" data-toggle="tooltip" data-placement="top" title="Upload your resume">
                            </div>
                        </div>
                        
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Your experience:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your experience" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-success">Send Message</button>
                    </form>
                </div>
                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <!-- Embedded Google Map -->
                    <img src="images/google-map.jpg" class="img-responsive" style="width:100%"/>
                    
                    <h3>WYISGOC16 Secretarial Office</h3>
                    <p>
                        <strong>Gold Coast (Malacca) International Resort</strong><br>
                        Lot 44, Jalan Wakaf Utama,<br>
                        Off Jalan Tun Hamzah,<br>
                        75450 Bukit Katil,<br>
                        Melaka
                        <br>
                    </p>
                    <p><i class="fa fa-phone"></i> 
                        <abbr title="Phone">Tel</abbr>: +606-253 1616/3636
                    </p>
                    <p><i class="fa fa-fax"></i> 
                        <abbr title="Fax">Fax</abbr>: +606-253 3636
                    </p>
                    <p><i class="fa fa-envelope"></i> 
                        <abbr title="Email">Email</abbr>: volunteer@wyig16.com 
                    </p>
                    <p><i class="fa fa-clock-o"></i> 
                        <abbr title="Hours">H</abbr>: Monday - Friday: 09:00 – 17:00 (GMT +8:00)
                    </p>
                </div>
            </div>
        </div>
        
        <div role="tabpanel" class="tab-pane fade" id="marketing">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-8">
                    <h3>Marketing & Sponsorship</h3>
                    <p>Sponsorships are currently open for all interested parties across the world. We are currently seeking for the following sponsorship items:</p>
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Sponsorship Items</th>
                                <th>Status</th>
                            </tr>
                                
                        </thead>
                        <tr>
                            <td>Smart Phones</td>
                            <td>	OPEN</td>
                        </tr>
                        <tr>
                            <td>Computers & Laptop</td>
                            <td>CLOSED</td>
                        </tr>
                        <tr>
                            <td>	Road Shows	</td>
                            <td>OPEN</td>
                        </tr>
                    </table>
                    
                    <form name="sentMessage" id="contactForm" novalidate>
                        
                        
                        <div class="row">
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>Company name:</label>
                                    <input type="number" class="form-control" id="age" required data-validation-required-message="Please enter company name.">
                                </div>
                            </div>
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>Office contact no:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your office contact no.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>P.I.C. :</label>
                                    <input type="number" class="form-control" id="age" required data-validation-required-message="Please enter your P.I.C.">
                                </div>
                            </div>
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>P.I.C. contact no. :</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your P.I.C. contact no.">
                                </div>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email address:</label>
                                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>Age:</label>
                                    <input type="number" class="form-control" id="age" required data-validation-required-message="Please enter your age.">
                                </div>
                            </div>
                            <div class="control-group form-group col-sm-6">
                                <div class="controls">
                                    <label>Contact:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your contact.">
                                </div>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Nature of business:</label>
                                <input type="text" class="form-control" id="business" required data-validation-required-message="Please enter your business nature.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Website:</label>
                                <input type="text" class="form-control" id="website" required data-validation-required-message="Please enter your website.">
                            </div>
                        </div>
                        
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Area of interest:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your experience" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <!-- Embedded Google Map -->
                    <img src="images/google-map.jpg" class="img-responsive" style="width:100%"/>
                    
                    <h3>WYISGOC16 Secretarial Office</h3>
                    <p>
                        <strong>Gold Coast (Malacca) International Resort</strong><br>
                        Lot 44, Jalan Wakaf Utama,<br>
                        Off Jalan Tun Hamzah,<br>
                        75450 Bukit Katil,<br>
                        Melaka
                        <br>
                    </p>
                    <p><i class="fa fa-phone"></i> 
                        <abbr title="Phone">Tel</abbr>: +606-253 1616/3636
                    </p>
                    <p><i class="fa fa-fax"></i> 
                        <abbr title="Fax">Fax</abbr>: +606-253 3636
                    </p>
                    <p><i class="fa fa-envelope"></i> 
                        <abbr title="Email">Email</abbr>: info@wyig16.com 
                    </p>
                    <p><i class="fa fa-clock-o"></i> 
                        <abbr title="Hours">H</abbr>: Monday - Friday: 09:00 – 17:00 (GMT +8:00)
                    </p>
                    <!--<ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li>
                    </ul>-->
                </div>
            </div>
            <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Sponsorship parties:</h2>
            <p>The entire WYISGOC16 family would like to express our gratitude to all the support and help provided by the following sponsorship parties:</p>
        </div>
        <div class="col-xs-12">
            <img class="img-responsive customer-img" src="images/wyisg-partner.png" alt="">
        </div>
    </div>
        </div>
      </div>
    
    </div>

	

        <p><br></p>

        <!-- Footer -->
        
    </div>
    <!-- /.container -->

<?php include 'footer.php'; ?>