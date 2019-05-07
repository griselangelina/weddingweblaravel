<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
	<link href="css/design.css" rel="stylesheet">


  </head>


  <body id="page-top">

    <!-- Navigation -->
    <nav class="bg-putih navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
		
		<div class="col-sm-5 col-md-5">
          <ul class="navbar-nav">
		   <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ URL('/') }}">HOME</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="">></a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ URL('/') }}/hashtag">Hashtag</a>
            </li>
			
            
          </ul>
		 </div> 

		  
		  
        </div>
      </div>
    </nav>

	
    <section class="p-0" id="portfolio">
      <div class="container p-0">
	  <div class="title-border section-space">
		
			<h1 class="title-border-text"><span class="title-span">Instagram Gallery</span></h1>
			<div class="imageframe-align-center">
				<span class="imageframe_frame"><img width="250" height="50" src="img/border.png" class="" alt=""></span>
			</div>
		</div>
		
		<div class="row col-lg-12 col-md-12 col-sm-12">
<script src="https://assets.juicer.io/embed.js" type="text/javascript"></script>
<link href="https://assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
<ul class="juicer-feed" data-feed-id="leomichelle181118"><h1 class="referral"><a href="https://www.juicer.io">Powered by Juicer</a></h1></ul>
		</div>
	  </div>
    </section>

		
	
	
	
	
    <section id="contact" class="" >
      <div class="container-fluid p-0 section-space">
        <div class="row bg-hashtag">
          <div class="hashtag col-lg-8 col-sm-10 mx-auto ">
            
            <p class="hashtag-word">HELP US TO SHARE THE MOMENTS ON INSTAGRAM WITH HASHTAG</p>
			<h2 class="section-heading"><b>#LeoMichelle181118</b></h2>
          </div>
        </div>
        
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
	<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 18, 2018 19:37:25").getTime();
var ss="{{ URL('/') }}";
 $(document).ready(function() {

			$('#gform_submit').click(function () {
				
				var name=$("input[name*='txtName']").val();
				var email=$("input[name*='txtEmail']").val();
				var confirm=$("#txtConfirm").val();
				alert("conf"+confirm);
								
				if(name==""){
					alert("Nama, Email dan Telephone harus di isi");
				}else{
				 $.ajax({
						/* the route pointing to the post function */
						url: ss+'/footer/emailsubscribe',
						type: 'GET',
						/* send the csrf-token and the input to the controller */
						data: {name: name,email:email,confirm:confirm},
						/* remind that 'data' is the response of the AjaxController */
						success: function (data) { 
							if(data.status=="success"){
								alert("sukses");
								location.reload();
							}else if(data.status=="fail"){
								alert("error email");
							}
						}
					}); 
				}
				
			});
			
			// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
	var weeks = Math.floor(distance/ (1000 * 60 * 60 * 24 ) /7);
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours ;
	document.getElementById("minutes").innerHTML = minutes ;
	document.getElementById("seconds").innerHTML =  seconds ;
	
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
 });

</script>
	
	
	
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
	
  </body>

</html>
