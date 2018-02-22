<!DOCTYPE html>
    <html>
     <head>
     <title><?php echo $pagetitle;?></title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Bootstrap -->
        <link href="css/bootstrap.min.css?ver=<?php echo rand();?>" rel="stylesheet">
        <link href="css/style.css?ver=<?php echo rand();?>" rel="stylesheet">
        <link href="css/media.css?ver=<?php echo rand();?>" rel="stylesheet">
        <link href="css/font-awesome.min.css?ver=<?php echo rand();?>" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js?ver=<?php echo rand();?>"></script>
        <link rel="stylesheet" href="css/animate.css?ver=<?php echo rand();?>">
        <link rel="shortcut icon" href="img/fav.png">
        <script src="js/story-box.min.js"></script>
        <script src="js/data.js"></script>
        <link rel="stylesheet" href="css/owl.carousel.min.css?ver=<?php echo rand();?>">
		<link rel="stylesheet" href="css/owl.theme.default.min.css?ver=<?php echo rand();?>">
		<script src="js/owl.carousel.js?ver=<?php echo rand();?>"></script>
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
     </head> 
      <body data-spy="scroll" data-target=".navbar" data-offset="180">
        <header>
            <?php include('header.php'); ?>
        </header>
	  
         <?php echo $pagemaincontent; ?>
		 
        <footer>
            <?php include ('footer.php'); ?>
        </footer>
         </body>
   </html>




    