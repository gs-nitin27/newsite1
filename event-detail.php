<?php
//include 'session.php';
ob_start();
?>
   <nav class="navbar navbar-default bg0 affix" data-spy="affix" data-offset-top="10">
         <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
           <a class="navbar-brand logo" href="index.php"><img class="img-responsive" src="img/logo.png"></a>
         </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right text-uppercase">
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus.php">About us</a></li>
              <li><a href="#">Get app </a></li>
              <li class="active"><a href="job-listing.php">Job</a></li>
              <li><a href="team-detail.php">Team</a></li>
              <li><a href="article.php">Article</a></li>
              <li><a href="support.php">support</a></li>
            </ul>
           </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
         </nav><!-- /.navbar -->
     <div class="joblist-bg eventBg bannerBgSec">
     
          <div class="container">
       	    <div class="row">
       	      <div class="col-md-12">
       		    <div class="ban-pera">
       			  <h1>Lorem ispum is dummy </h1>
       			  <h3>Lorem ispum is dummy text.</h3>
       			
         	    </div>
               </div>
              </div>
             </div>
             
           
            </div>
        <div class="relative">
            <div class="blue-bg"></div>
             <div class="play-icon" data-toggle="modal" data-target="#myModal">
        	  <img src="img/play-icon.svg">
              </div>
            </div>      
         <!-- Modal pop -->
          <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                  <div class="modal-content">
                       <div class="modal-body">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <iframe width="100%" height="315" src="https://www.youtube.com/embed/YeYXeoYXZwY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                       </div>
                  </div>
              </div>
          </div>
          <div class="clearfix margin20"></div>
        	<div class="container">
        	 	 <div class="row">
        		   <div class="col-lg-7 col-md-7">
            			 <div class="left-img-job"> <img src="img/tournament.jpg"> </div>		
        		    </div>
        		    <div class="col-lg-5 col-md-5">
        			       <div class="right-list-job" style="padding: 50px 0 0 0;">
        				          <h4>Sports Trials- Kerala State 
Sports Council (KSSC)</h4>
                          <p> Type : <span> Free</span></p>
                          <p> Organizer Name : <span> Kerala State </span></p>
                          <p> Location : <span> Central Stadium, Thiruvananthapuram. </span></p>
                          <p> Email : <span>NA </span></p>
        			       </div>
        		    </div>
        		    <div class=" clearfix margin15"></div>
        			  <div class="right-list-job pad15">
          			    <p>Event  Description : 
                        <span> Jain International School, Aurangabad, is looking for Sports Teacher / Physical Education teacher. Candidate should be able to train students in various sports like football, basketball, volleyball, cricket, Gymnastics etc.<br><br>
            			    	Candidate Should be Multi talented , Energetic with good communication skill, pleasant personality . Fluency in English is a must. Candidate should also be able to train & assist in organizing school functions /events. While knowledge about sports is the most important aspect as far as this job is concerned.
            			      </span>        			       
                    </p>        			   
              			<p> Tournamnet Rules : <span>Recognised degree from a reputed university. Adequate experience in the related field preferably in CBSE / International School. Specialization in the subject for which a candidate is applying for the job. </span></p>
              			   
              			<p>Key Requirement :  <span>Fluency in English is a must.</span></p>        			    
              			<p>Event Name : <span> Jain International School Aurangabad.</span></p>        			     
              			<p>Event Organiser : 
                        <span> Jain International School Aurangabad(M.S) is CBSE affiliated school upto Sr. Sec. level, with lush green 16 acres of campus, pollution free environment with International facilities and a huge infrastructure with day boarding facilities.</span>
                    </p>        			
              			<p>Event Address : <span>Jain International School, Aurangabad , Aurangabad - Nasik Road, Dist. Aurangabad, Maliwada, Maharashtra</span></p>        			
              			<p>Event City : <span>Aurangabad</span></p>        			 
            			  <p>Event Pin : <span>431002 </span></p>      			  
            			  <p>For more info : <span class="read-c"><a href="#"> Click here</a> </span></p>
        			 </div>
        		</div>
        </div>
  	 <div class="clearfix margin20"></div>
      <section class="testimonials">
	        <div class="container">
              <div class="row pad15">
                  <div class="heading-center">
            	       <h3>Related Event</h3>
               	      <p>Learn more about this feature packed App</p>
                  </div>
                  <div id="customers-testimonials2" class="owl-carousel">
                      <div class="item">
                          <div class="img-box">
                              <img src="img/box-img.jpg">
                          </div>
                          <div class="slide-job-list">
                              <h4>Lorem Ipsum is simply dummy text of the printing.</h4>
          				            <p> Location : <span> Paloura, Jammu </span></p>
          				            <p> Posted : <span> 2 days ago </span></p>
          				            <p> Organisation Name : <span> IIT Jammu, Indian Institute of Technology </span></p>
          				            <p class="read-c"> Read More </p>                                  
                          </div>
                      </div>
                  </div>
                        <!--<div class="customNavigation">
							<div class="l-arrow cursor">
							  <i class="fa fa-arrow-left" aria-hidden="true"></i>
							   </div>
								<div class="r-arrow cursor">
								<i class="fa fa-arrow-right" aria-hidden="true"></i>
								</div>
						   </div>-->
              </div>
          </div>
    </section>    

<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Event Detail";
$contentheader = "";
//Apply the template
include("template.php");
?>  
 <script>
    jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials2').owlCarousel({
		            loop: true,
		            center: true,
		            items: 4,
		            margin: 0,
		            autoplay: true,
		            dots:false,
		            autoplayTimeout: 2000,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 3
		              },
		              1170: {
		                items: 4
		              }
		            }
		        });
		    });

    </script>
