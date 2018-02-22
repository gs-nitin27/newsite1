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
              <li><a href="#getApp" data-toggle="modal">Get app </a></li>
              <li><a href="job-listing.php">Job</a></li>
              <li><a href="team-detail.php">Team</a></li>
              <li class="active"><a href="article.php">Article</a></li>
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
       <div class="article-bg bannerBgSec">
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
                <div class="modal-content">
                   <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <iframe width="100%" height="315" src="https://www.youtube.com/embed/YeYXeoYXZwY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>          
              </div>
          </div>
        <!-- Modal Popup -->


           <div class="clearfix margin20"></div>
             <div class="container">
        	   <div class="row">
        	     <div class="col-lg-4 col-md-4 pad20">
        		   <div class="article-box">
        			<img class="img-responsive" src="img/article-img.jpg" alt="">
        		   <div class="margin15"></div>
        		 <p>By Lorem Ipsum / Lorem / January 12, 2018, 2:16 PM</p>
        		 <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<div class="margin15 clearfix"></div>
				 <p class="read-c">
				 <a href="article-detail.php"> Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>	
        		</div>
				  <div class="article-box">
        			<img class="img-responsive" src="img/article-img2.jpg" alt="">
        		   <div class="margin15"></div>
        		 <p>By Lorem Ipsum / Lorem / January 12, 2018, 2:16 PM</p>
        		 <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<div class="margin15 clearfix"></div>
				 <p class="read-c">
				  <a href="article-detail.php"> Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>	
        		</div>
        		
			     <div class="article-box">
        			<img class="img-responsive" src="img/article-img3.jpg" alt="">
        		   <div class="margin15"></div>
        		 <p>By Lorem Ipsum / Lorem / January 12, 2018, 2:16 PM</p>
        		 <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<div class="margin15 clearfix"></div>
				 <p class="read-c">
			 	 <a href="article-detail.php">  Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a></p>	
        		  </div>
         	    </div>

				  <div class="col-lg-4 col-md-4 pad20">
				    <div class="head-article">
				      <h2>Our Articles</h2>
				       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown book.</p>
				        </div>
					  <div class="right-article">
					  <img class="img-responsive" src="img/article-img4.jpg" alt="">
					  <div class="margin15"></div>
					  <p>By Lorem Ipsum / Lorem / January 12, 2018, 2:16 PM</p>
        		      <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
				      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				     <div class="margin15 clearfix"></div>
				     <p class="read-c">
				    <a href="article-detail.php"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Read More</a></p>	
				   </div>
				
					<div class="right-article">
					 <img class="img-responsive" src="img/box-img4.jpg" alt="">
					  <div class="margin15"></div>
					   <p>By Lorem Ipsum / Lorem / January 12, 2018, 2:16 PM</p>
        		      <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
				     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				    <div class="margin15 clearfix"></div>
				   <p class="read-c">
				 <a href="article-detail.php"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Read More </a></p>	
				</div> 

					<div class="right-article">
					  <img class="img-responsive" src="img/box-img4.jpg" alt="">
					 <div class="margin15"></div>
					 <p>By Lorem Ipsum / Lorem / January 12, 2018, 2:16 PM</p>
        		   <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				  <div class="margin15 clearfix"></div>
				  <p class="read-c">
				   <a href="article-detail.php">  <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Read More</a></p>	
				    </div> 
        	       </div>

                    <div class="col-lg-4 col-md-4 pad20">
					  <div class="right-article">
					  <img class="img-responsive" src="img/article-img4.jpg" alt="">
					  <div class="margin15"></div>
					  <p>By Lorem Ipsum / Lorem / January 12, 2018, 2:16 PM</p>
        		      <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
				      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				     <div class="margin15 clearfix"></div>
				     <p class="read-c">
				    <a href="article-detail.php"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Read More</a></p>	
				   </div>
				
					<div class="right-article">
					 <img class="img-responsive" src="img/box-img4.jpg" alt="">
					  <div class="margin15"></div>
					   <p>By Lorem Ipsum / Lorem / January 12, 2018, 2:16 PM</p>
        		      <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
				     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				    <div class="margin15 clearfix"></div>
				   <p class="read-c">
				 <a href="article-detail.php"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Read More </a></p>	
				</div> 

					<div class="right-article">
					  <img class="img-responsive" src="img/box-img4.jpg" alt="">
					 <div class="margin15"></div>
					 <p>By Lorem Ipsum / Lorem / January 12, 2018, 2:16 PM</p>
        		   <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				  <div class="margin15 clearfix"></div>
				  <p class="read-c">
				   <a href="article-detail.php">  <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Read More</a></p>	
				    </div> 
        	       </div>
                  </div>
                </div>    
<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Article";
$contentheader = "";
//Apply the template
include("template.php");
?>  

