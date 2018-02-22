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
              <li><a href="#getApp" data-toggle="modal">Get app  </a></li>
              <li class="active"><a href="job-listing.php">Job</a></li>
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
         <div class="joblist-bg bannerBgSec">
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
                <!-- Modal content-->
                <div class="modal-content">
                   <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/YeYXeoYXZwY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   </div>
                  </div>
                </div>
            </div>
            <!-- Modal pop -->

             <div class="clearfix margin20"></div>
        	    <div class="container">
        	     <div class="row">
        	 	  <div class="heading-center  m0 pad15">
          	       <h3>Jobs</h3>
             	   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                
                   <div class="col-lg-3 col-md-3">
                    <div class=" hover-boxs">
                     <div class="job-box">
                      <img src="img/box-img.jpg">
                       </div>
                         <div class="slide-job-list">
                          <h4>Lorem Ipsum is simply dummy text of the printing.</h4>
				           <p> Location : <span> Paloura, Jammu </span></p>
				            <p> Posted : <span> 2 days ago </span></p>
				              <p> Organisation Name : <span> IIT Jammu, Indian Institute of Technology </span></p>
				               <div class="read-c"> 
				               <a href="job-listing-detail.php">Read More</a> </div>
                             </div>     	
                         </div>
                      </div> 

 					<div class="col-lg-3 col-md-3">
                    <div class=" hover-boxs">
                     <div class="job-box">
                      <img src="img/box-img.jpg">
                       </div>
                         <div class="slide-job-list">
                          <h4>Lorem Ipsum is simply dummy text of the printing.</h4>
				           <p> Location : <span> Paloura, Jammu </span></p>
				            <p> Posted : <span> 2 days ago </span></p>
				              <p> Organisation Name : <span> IIT Jammu, Indian Institute of Technology </span></p>
				               <div class="read-c"> 
				               <a href="job-listing-detail.php">Read More</a> </div>
                             </div>     	
                         </div>
                      </div> 
                      
                     <div class="col-lg-3 col-md-3">
                    <div class=" hover-boxs">
                     <div class="job-box">
                      <img src="img/box-img.jpg">
                       </div>
                         <div class="slide-job-list">
                          <h4>Lorem Ipsum is simply dummy text of the printing.</h4>
				           <p> Location : <span> Paloura, Jammu </span></p>
				            <p> Posted : <span> 2 days ago </span></p>
				              <p> Organisation Name : <span> IIT Jammu, Indian Institute of Technology </span></p>
				               <div class="read-c"> 
				               <a href="job-listing-detail.php">Read More</a> </div>
                             </div>     	
                         </div>
                      </div> 
                      
                	 <div class="col-lg-3 col-md-3">
                    <div class=" hover-boxs">
                     <div class="job-box">
                      <img src="img/box-img.jpg">
                       </div>
                         <div class="slide-job-list">
                          <h4>Lorem Ipsum is simply dummy text of the printing.</h4>
				           <p> Location : <span> Paloura, Jammu </span></p>
				            <p> Posted : <span> 2 days ago </span></p>
				              <p> Organisation Name : <span> IIT Jammu, Indian Institute of Technology </span></p>
				               <div class="read-c"> 
				               <a href="job-listing-detail.php">Read More</a> </div>
                             </div>     	
                         </div>
                      </div>                    
                      
                      <div class="col-lg-3 col-md-3">
                    <div class=" hover-boxs">
                     <div class="job-box">
                      <img src="img/box-img.jpg">
                       </div>
                         <div class="slide-job-list">
                          <h4>Lorem Ipsum is simply dummy text of the printing.</h4>
				           <p> Location : <span> Paloura, Jammu </span></p>
				            <p> Posted : <span> 2 days ago </span></p>
				              <p> Organisation Name : <span> IIT Jammu, Indian Institute of Technology </span></p>
				               <div class="read-c"> 
				               <a href="job-listing-detail.php">Read More</a> </div>
                             </div>     	
                         </div>
                      </div> 
   
  				       <div class="col-lg-3 col-md-3">
                    <div class=" hover-boxs">
                     <div class="job-box">
                      <img src="img/box-img.jpg">
                       </div>
                         <div class="slide-job-list">
                          <h4>Lorem Ipsum is simply dummy text of the printing.</h4>
				           <p> Location : <span> Paloura, Jammu </span></p>
				            <p> Posted : <span> 2 days ago </span></p>
				              <p> Organisation Name : <span> IIT Jammu, Indian Institute of Technology </span></p>
				               <div class="read-c"> 
				               <a href="job-listing-detail.php">Read More</a> </div>
                             </div>     	
                         </div>
                      </div> 
  
  				 		 <div class="col-lg-3 col-md-3">
                    <div class=" hover-boxs">
                     <div class="job-box">
                      <img src="img/box-img.jpg">
                       </div>
                         <div class="slide-job-list">
                          <h4>Lorem Ipsum is simply dummy text of the printing.</h4>
				           <p> Location : <span> Paloura, Jammu </span></p>
				            <p> Posted : <span> 2 days ago </span></p>
				              <p> Organisation Name : <span> IIT Jammu, Indian Institute of Technology </span></p>
				               <div class="read-c"> 
				               <a href="job-listing-detail.php">Read More</a> </div>
                             </div>     	
                         </div>
                      </div> 

 				         <div class="col-lg-3 col-md-3">
                    <div class=" hover-boxs">
                     <div class="job-box">
                      <img src="img/box-img.jpg">
                       </div>
                         <div class="slide-job-list">
                          <h4>Lorem Ipsum is simply dummy text of the printing.</h4>
				           <p> Location : <span> Paloura, Jammu </span></p>
				            <p> Posted : <span> 2 days ago </span></p>
				              <p> Organisation Name : <span> IIT Jammu, Indian Institute of Technology </span></p>
				               <div class="read-c"> 
				               <a href="job-listing-detail.php">Read More</a> </div>
                             </div>     	
                         </div>
                      </div> 
                   </div>
        	 	</div>
        		 
  	       <div class="clearfix margin20"></div>
  	       <div class="text-center">
  	       	<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>
  	       </div>
    

<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Job Listing ";
$contentheader = "";
//Apply the template
include("template.php");
?>  

    
    
    <script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
