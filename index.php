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
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="aboutus.php">About us</a></li>
              <li><a href="#getApp" data-toggle="modal" >Get App </a></li>
              <li><a href="job-listing.php">Job</a></li>
              <li><a href="team-detail.php">Team</a></li>
              <li><a href="article.php">Article</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     Bussiness <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li><a class="" href="landing-job.php">  Job Landing </a></li>
                      <li><a class="" href="landing-event.php">  Event Landing  </a></li>
                      <li><a class="" href="tournament.php"> Tournament </a></li>
                  </ul>

              </li>
              <li><a href="support.php">support</a></li>
            </ul>
           </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
         </nav><!-- /.navbar -->
       <!-- <div class="full-banner bannerBgSec" id="top">
          <div class="container">
       	    <div class="row">
       	      <div class="col-md-12">
       		    <div class="ban-pera">
       			  <h1>Lorem ispum is dummy </h1>
       			  <h3>Lorem ispum is dummy text.</h3>
       			  <button type="button" class="btn btn-read">Read More</button>
         	     </div>
                </div>
               </div>
              </div>
             </div> -->

        <div id="myCarousel" class="carousel slide slideBox" data-ride="carousel" data-interval="2500">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <!-- <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li> -->
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <section class="item active">
                    <img src="img/top-banner-top.jpg" alt="Chania">                
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="ban-pera">
                                <h1>Lorem ispum is dummy </h1>
                                <h3>Lorem ispum is dummy text.</h3>
                                <button type="button" class="btn btn-read">Read More</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="item">
                    <img src="img/team-bg.jpg" alt="Chania">                
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="ban-pera">
                                <h1>Lorem ispum is dummy </h1>
                                <h3>Lorem ispum is dummy text.</h3>
                                <button type="button" class="btn btn-read">Read More</button>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="blue-bg blue-Home"> </div>
            </div>
        </div>





         <div class="relative playHome">
           <!--  <div class="blue-bg blue-Home"></div> -->
             <div class="play-icon" data-toggle="modal" data-target="#myModal">
        	       <img src="img/play-icon.svg">
              </div>
            </div> 
         <!-- Modal -->

            <div id="getApp" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                    <div class="modal-content">
                       <div class="modal-body">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <section class="getAppBox text-center">
                                <h3>Get app</h3>
                                <p>Choose your native platform and get started!</p>
                                <img src="img/play-btn.png">
                                <img class="img-responsive" src="img/app.png">
                            </section>
                         </div>
                    </div>
                </div>
            </div>



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
            <!-- Modal -->
             <div class="clearfix"></div>
               <div class="container" id="feature">
                <div class="row pad15">
          	     <div class="heading-center">
          	      <h3>App Features</h3>
             	   <p>Learn more about this feature packed App</p>
                    </div>
                    <div class="owl-carousel owl-theme">
		             <div class="item">
		              <div class="box-app">
		                <div class="circle-box">
		          	      <img src="img/feature-img.svg">
		                  </div>
		                 <h4>Events</h4>
		           	   <p>We bring you the latest updates on all the big sports events to your GetSporty App. Be it an upcoming sports trial or just a weekend sporting event, get all the information on your phone</p>
		               </div>
		                </div>
                        <div class="item">
		             <div class="box-app">
		               <div class="circle-box">
		          	    <img src="img/feature-img2.svg">
		                 </div>
		                <h4>Tournaments</h4>
		           	   <p>We bring you the latest updates on all the big sports events to your GetSporty App. Be it an upcoming sports trial or just a weekend sporting event, get all the information on your phone</p>
		              </div>
		             </div>
 				   <div class="item">
		            <div class="box-app">
		             <div class="circle-box">
		          	  <img src="img/feature-img3.svg">
		                </div>
		                <h4>Coach</h4>
		           	   <p>We bring you the latest updates on all the big sports events to your GetSporty App. Be it an upcoming sports trial or just a weekend sporting event, get all the information on your phone</p>
		               </div>
		             </div>
  				  <div class="item">
		            <div class="box-app">
		              <div class="circle-box">
		          	    <img src="img/feature-img4.svg">
		                 </div>
		                 <h4>Connect</h4>
		           	    <p>We bring you the latest updates on all the big sports events to your GetSporty App. Be it an upcoming sports trial or just a weekend sporting event, get all the information on your phone</p>
		                </div>
		              </div>
		              
 				     <div class="item">
		              <div class="box-app">
		               <div class="circle-box">
		          	    <img src="img/feature-img.svg">
		                 </div>
		                 <h4>Events</h4>
		           	     <p>We bring you the latest updates on all the big sports events to your GetSporty App. Be it an upcoming sports trial or just a weekend sporting event, get all the information on your phone</p>
		                 </div>
		                </div>
		              </div>
          	        </div>
                </div>
         <div class="clearfix margin15"></div>
           <section class="testimonials" id="slider-bg">
	      <div class="container relative" id="latest">
            <div class="row pad15">
             <div class="white-heading">
               <h3>Latest resources</h3>
            	<p>See what’s included in the App</p>
                 </div>
                <div id="customers-testimonials" class="owl-carousel">
                 <div class="item">
                   <div class="img-box">
                    <img src="img/box-img.jpg">
                     </div>
                      <div class="white-b">
                       <h4>Aanchal Thakur wins India's first skiing medal</h4>
				        <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				         <p class="read-c"> Read More </p>
                          </div>
                         </div>

                   <div class="item">
                    <div class="img-box">
                     <img src="img/box-img2.jpg">
                      </div>
                       <div class="white-b">
                        <h4>Aanchal Thakur wins India's first skiing medal</h4>
				         <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				         <p class="read-c"> Read More </p>
                          </div>
                         </div>
                         
                     <div class="item">
                   <div class="img-box">
                    <img src="img/box-img3.jpg">
                     </div>
                      <div class="white-b">
                       <h4>Aanchal Thakur wins India's first skiing medal</h4>
				        <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				         <p class="read-c"> Read More </p>
                          </div>
                         </div>

                        <div class="item">
                   <div class="img-box">
                    <img src="img/box-img.jpg">
                     </div>
                      <div class="white-b">
                       <h4>Aanchal Thakur wins India's first skiing medal</h4>
				        <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				         <p class="read-c"> Read More </p>
                          </div>
                         </div>
                        </div>
                        <div class="customNavigation">
							<div class="l-arrow cursor">
							  <i class="fa fa-arrow-left" aria-hidden="true"></i>
							   </div>
								<div class="r-arrow cursor">
								<i class="fa fa-arrow-right" aria-hidden="true"></i>
								</div>
						 </div>
                      </div>
                   </div>
              </section>
                <div class="relative">
                  <div class="blue-bg"></div>
                    </div>
           <div class="clearfix"></div>
            <section class="testimonials">
	          <div class="container" id="job">
               <div class="row pad15">
                <div class="heading-center">
          	     <h3>Job</h3>
             	  <p>Learn more about this feature packed App</p>
                  </div>
                  <div id="customers-testimonials2" class="owl-carousel">
                   <div class="item">
                    <div class="img-box">
                     <img src="img/box-img.jpg">
                      </div>
                       <div class="white-b">
                        <h4>Aanchal Thakur wins India's first skiing medal</h4>
				         <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				         <div class="read-c"> 
				               <a href="job-listing-detail.php">Read More</a> </div>
                          </div>
                         </div>

                   <div class="item">
                    <div class="img-box">
                     <img src="img/box-img2.jpg">
                      </div>
                       <div class="white-b">
                        <h4>Aanchal Thakur wins India's first skiing medal</h4>
				         <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				         <div class="read-c"> 
				               <a href="job-listing-detail.php">Read More</a> </div>
                           </div>
                          </div>
                         
                  <div class="item">
                   <div class="img-box">
                    <img src="img/box-img3.jpg">
                     </div>
                      <div class="white-b">
                       <h4>Aanchal Thakur wins India's first skiing medal</h4>
				        <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				        <div class="read-c"> 
				               <a href="job-listing-detail.php">Read More</a> </div>
                          </div>
                         </div>

                   <div class="item">
                    <div class="img-box">
                     <img src="img/box-img.jpg">
                      </div>
                       <div class="white-b">
                        <h4>Aanchal Thakur wins India's first skiing medal</h4>
				         <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				         <div class="read-c"> 
				               <a href="job-listing-detail.php">Read More</a> </div>
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
                        	   <div class="text-center">
						   <a href="job-listing.php">
						   	<button type="button" class="btn btn-more">Read More</button>
						   	</a>
						   </div>
                      </div>
                 </section>  
		 <div class="clearfix"></div>
		   <div class="relative">
             <div class="blue-bg-left"></div>
               </div>
   
		  <div class="bg-event">
		    <section class="testimonials">
	         <div class="container" id="event">
               <div class="row pad15">
                <div class="w-h">
                 <h3>Event & Tournament</h3>
            	  <p>See what’s included in the App</p>
                    </div>
                    <div class="clearfix margin20"></div>
                    <div id="customers-testimonials3" class="owl-carousel">
                    <div class="item">
                     <div class="img-box">
                      <img src="img/box-img.jpg">
                       </div>
                        <div class="white-b">
                        <h4>Aanchal Thakur wins India's first skiing medal</h4>
				         <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				          <p class="read-c"> Read More </p>
                          </div>
                         </div>

                   <div class="item">
                    <div class="img-box">
                     <img src="img/box-img2.jpg">
                      </div>
                       <div class="white-b">
                        <h4>Aanchal Thakur wins India's first skiing medal</h4>
				         <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				          <p class="read-c"> Read More </p>
                           </div>
                          </div>
                         
                  <div class="item">
                   <div class="img-box">
                    <img src="img/box-img3.jpg">
                     </div>
                      <div class="white-b">
                       <h4>Aanchal Thakur wins India's first skiing medal</h4>
				        <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				         <p class="read-c"> Read More </p>
                          </div>
                         </div>

                   <div class="item">
                    <div class="img-box">
                     <img src="img/box-img.jpg">
                      </div>
                       <div class="white-b">
                        <h4>Aanchal Thakur wins India's first skiing medal</h4>
				         <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
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
		          </div>

     <div class="margin15 clearfix"></div>
       <div class="margin15 clearfix"></div>
	  <div class="container" id="app">
	    <div class="row">
	     <div class="heading-center">
           <h3>Our Media</h3>
             <p>For more info and support, contact us!</p>
                </div>       	
         <div class="owl-carousel owl-theme">
		   <div class="item">
		    <div class="border-client">
        	  <img src="img/logo-client.png">
        	    </div>
		          </div>
		         
		   <div class="item">
		     <div class="border-client">
        	  <img src="img/logo-client2.png">
        	    </div>
		         </div>
		         
		   <div class="item">
		     <div class="border-client">
        	   <img src="img/logo-client3.png">
        	    </div>
		         </div>
		                     
		    <div class="item">
		      <div class="border-client">
        	    <img src="img/logo-client4.png">
        	     </div>
		          </div>
		          
		     <div class="item">
		       <div class="border-client">
        	    <img src="img/logo-client6.png">
        	     </div>
		          </div>
		          
		     <div class="item">
		       <div class="border-client">
        	    <img src="img/logo-client6.png">
        	     </div>
		          </div>
                   </div>
                   
	    	
		  <!-- <hr>  <div class="col-lg-6 col-md-6">
			<div class="getapp">
			  <h3>Get app</h3>
			   <p>Choose your native platform and get started!</p>
				<img src="img/play-btn.png">
			   </div>
		     </div>	
		    <div class="col-lg-6 col-md-6"></div> -->
		   </div>
	     </div>
	   <!--  <div class="relative">
	      <div class="phone-img">
		    <img class="img-responsive" src="img/iphone-img.jpg">
		     </div>	
		  	  </div> -->
	     <div class="margin15 clearfix"></div>
		   <div class="team-bg">
		     <div class="margin15 clearfix"></div>
			   <div class="container">
				<div class="row">
				  <div class="white-heading">
                  <h3>Our Team</h3>
            	  <p>See what’s included in the App</p>
                 </div>
                 <div class="owl-carousel owl-theme">
                
		            <div class="item">
		             <a href="team-detail.php">
		           <img src="img/dp.png">
		           <h4>Anirudh Singh</h4>
		           <span>Founder & Product Architect</span>
		            <div class="socails">
		               <ul>
		           		<li><a href="#">
		           		 <span class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
		           		   </a>
		           		    </li>
		           		<li>
		           		<a href="#"><span class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
		           		<li><a href="#">
		           		<span class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>
		           		  </span></a></li>
		             	 </ul>
		               </div>
		               </a>
		             </div>
		             

 				     <div class="item">
 				       <a href="team-detail.php">
		           <img src="img/dp2.png">
		           <h4>NITIN AGARWAL</h4>
		           <span>Head, Web Development</span>
		            <div class="socails">
		               <ul>
		           		<li><a href="#">
		           		 <span class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
		           		   </a>
		           		    </li>
		           		<li>
		           		<a href="#"><span class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
		           		<li><a href="#">
		           		<span class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>
		           		  </span></a></li>
		             	 </ul>
		               </div>
		               </a>
		             </div>
 
				     <div class="item">
				       <a href="team-detail.php">
		           <img src="img/dp3.png">
		           <h4>Sandeep Kumar Singh</h4>
		           <span>Head, Android Development</span>
		            <div class="socails">
		               <ul>
		           		<li><a href="#">
		           		 <span class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
		           		   </a>
		           		    </li>
		           		<li>
		           		<a href="#"><span class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
		           		<li><a href="#">
		           		<span class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>
		           		  </span></a></li>
		             	 </ul>
		               </div>
		               </a>
		             </div>

 					  <div class="item">
 					    <a href="team-detail.php">
		           <img src="img/dp4.png">
		           <h4>Kumar Gaurav</h4>
		           <span>Head, IOS Development</span>
		            <div class="socails">
		               <ul>
		           		<li><a href="#">
		           		 <span class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
		           		   </a>
		           		    </li>
		           		<li>
		           		<a href="#"><span class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
		           		<li><a href="#">
		           		<span class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>
		           		  </span></a></li>
		             	 </ul>
		               </div>
		               </a>
		             </div>
		             
		         <div class="item">
		           <a href="team-detail.php">
		           <img src="img/dp.png">
		           <h4>Anirudh Singh</h4>
		           <span>Founder & Product Architect</span>
		            <div class="socails">
		               <ul>
		           		<li><a href="#">
		           		 <span class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
		           		   </a>
		           		    </li>
		           		<li>
		           		<a href="#"><span class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
		           		<li><a href="#">
		           		<span class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>
		           		  </span></a></li>
		             	 </ul>
		               </div>
		               </a>
		             </div>

 				     <div class="item">
 				       <a href="team-detail.php">
		           <img src="img/dp2.png">
		           <h4>NITIN AGARWAL</h4>
		           <span>Head, Web Development</span>
		            <div class="socails">
		               <ul>
		           		<li><a href="#">
		           		 <span class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
		           		   </a>
		           		    </li>
		           		<li>
		           		<a href="#"><span class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
		           		<li><a href="#">
		           		<span class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>
		           		  </span></a></li>
		             	 </ul>
		               </div>
		               </a>
		             </div>

				 

                  </div>
			    </div>
			  </div> 
		    </div> 
	       <div class="relative">
             <div class="blue-bg"></div>
               </div>
               
  <div class="clearfix"></div>
    <div class="container" id="support">
      <div class="row">
         <div class="heading-center">
           <h3>Support</h3>
             <p>For more info and support, contact us!</p>
                </div>
                  
       <div class="col-lg-6 col-md-6">
    <form>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control01" id="" aria-describedby="emailHelp" placeholder="">
  </div>
    <div class="form-group">
    <label for="email">Subject</label>
    <input type="text" class="form-control01" id="" aria-describedby="emailHelp" placeholder="">
  </div>
   <div class="form-group">
  <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control01" id="exampleFormControlTextarea1" rows="5"></textarea> 
    </div>
    <div class="margin15 clearfix"></div>
     <button type="button" class="btn btn-send">Send</button>
        </form> 
       </div>
         <div class="col-lg-1 col-md-1"></div>
           <div class="col-lg-5 col-md-5">
          <div class="right-cont">
       	   <h3>Contact:</h3>
       	    <p><img src="img/latitude.svg"> A 20, Sector 35, Noida, India ,201301</p>
       	     <p><img src="img/contact.svg"> +91 120 4511807</p>
       	   	   <p><img src="img/mail.svg"> info@darkhorsesports.in</p>
              </div>
               </div>
               
     <div class="clearfix margin20"></div> 
                 </div>
             </div>
	 		                 
<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Sport";
$contentheader = "";
//Apply the template
include("template.php");
?>  

<script src="js/jquery.event.move.js"></script>
 <script>
    jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
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
		   	// Custom Navigation Events
      $(".r-arrow").click(function () {
           owl.trigger('next.owl.carousel');
       });
       $(".l-arrow").click(function () {
           owl.trigger('prev.owl.carousel');
        });
    </script>
 <script>
    jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials2').owlCarousel({
		            loop:true,
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
		              	// Custom Navigation Events
       $(".r-arrow").click(function () {
           owl.trigger('next.owl.carousel');
       });
       $(".l-arrow").click(function () {
           owl.trigger('prev.owl.carousel');
       });
       
  
    </script>
 <script>
    jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials3').owlCarousel({
		            loop: true,
		            center: true,
		            items: 4,
		            margin: 0,
		            autoplay:false,
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
		              	// Custom Navigation Events
      //  $(".r-arrow").click(function () {
         //   owl.trigger('next.owl.carousel');
      //  });
      //  $(".l-arrow").click(function () {
         //   owl.trigger('prev.owl.carousel');
       // });
       
  
    </script>
 <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
               loop: true,
                margin: 25,
                  dots:true,
                responsiveClass: true,
                 autoplay: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 1,
                    nav: false
                  },
                  1000: {
                    items: 4,
                    nav: true,
                   
                
                  }
                }
              })
            })
          </script> 



  <script>
      $(document).ready(function() {
        $('#Mycarousel').owlCarousel({
        
        });
      })
    </script> 

          

