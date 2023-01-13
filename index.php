<!--  Armstrong, Christian -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Christian Armstrong | Web Design & Development</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/site.css" />
	<link rel="stylesheet" href="css/glide.core.min.css" />
	<link rel="stylesheet" href="css/glide.theme.min.css" />
	<link rel="shortcut icon" type="img/png" href="img/logo.png">
	
	<script src="https://unpkg.com/@glidejs/glide"></script>
	<script src="https://unpkg.com/intersection-observer"></script>
	<script src="https://unpkg.com/scrollama"></script>
	<!-- Hotjar Tracking Code for My site -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:2727230,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
	
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $emailFrom = $_POST['email'];
            $message = $_POST['message'];
            
            $mailTo = 'contact@thechristianarmstrong.design';
            $headers = 'From: '.$emailFrom;
            $txt = 'You have recieved an e-mail from '.$name.'\n\n'.$message; 
            
            mail($mailTo, $headers ,$txt  );
            header('Location: index.php?mailsend');
        }
    ?>
	
	<header class="" style="">
		<nav class="navbar fixed-top navbar-expand navbar-toggleable navbar-light
					bg-white border-bottom box-shadow " >
			<div class="container-fluid"  >
				<a class="navbar-brand logoMargin" href="index.php" style="color:#014471"><img src="img/logo..jpg" class="img-fluid logo d-none" alt="Logo"> <span class="d-none d-sm-block  " style="vertical-align:middle;font-size:2rem;"><strong>Christian Armstrong </strong></span><span class="d-block d-sm-none   " style="vertical-align:middle;font-size:150%"><strong>CA </strong></span></a>
			
				
				<div class="">
					<ul class="navbar-nav  justify-content-end " >
						<li class="nav-item " style="margin-right:5%">
							<a class="nav-link grow " href="https://medium.com/@ChristianBlogs" style="color:#014471;font-size:200%"><strong>Blog</strong></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link btn-outline navContact grow" href="#contactForm" style="color:#f96D10"><strong>Contact</strong></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	
	<div class="container-fluid" >
		
		<!--  landingPage -->
		
		<div class="row heroSection " style="background-color:#014471; border-bottom: 7px solid #fa8334;border-top: 5px solid #fa8334">
			<!-- 
			<div class="trapezoid">
				<i class="fab fa-linkedin fa-5x linkedinIcon" style="transform: rotate(-90deg);margin-right: 5vw;font-size:4vw"></i>
				<i class="fab fa-instagram fa-5x instagramIcon" style="transform: rotate(-90deg);font-size:4vw"></i>
				<i class="fab fa-behance-square fa-5x behanceIcon" style="transform: rotate(-90deg);margin-left: 5vw;font-size:4vw"></i>
			</div>
			 -->
			<div class="col-12 col-md-5 justify-content-end "> 
				<img src="img/profilePicV3.jpg" class="img-fluid profilePic " alt="pictureOfMe" />
			</div>
			<div class="col-12 col-md-7 ">
			
				<h1 class="landingName  " ><strong>Christian  <br> Armstrong</strong></h1>
				<h2 class="landingTitle "><strong>Freelance Web Designer & Developer</strong></h2>
				<h3 class="landingLocation "><i class="fas fa-map-marker-alt fa-sm"></i> Springfield, Missouri</h3>
				<p class="landingPitch ">I Help Individuals, Startups, and <br>
											 Small Businesses turn your <br> vision 
					    								into websites 
					    								 that <br>
					    								<span style="color:#fa8334;white-space:nowrap;"><strong><u>solve your problems.</u></strong></span>
				</p>
				
				<a href="#contactForm" class="btn btn-primary btn-lg mt-3 mb-4  grow d-sm-none d-md-block "><strong>Hire Me</strong></a>
				<a href="#contactForm" class="btn btn-primary btn-lg mt-3 mb-4  grow text-center d-none d-sm-block d-md-none "><strong>Hire Me</strong></a>
				
			</div>
		</div>
		
		<!--  My Services -->
	
		<div class="row ">
			<div class="col-12 text-center mt-4"> 
				<h2 class=" mt-4 mb-4 step" style="color:#9BBAC0;">What I Do</h2>
			</div>
			<div class="col-12 step">
				<div class="glide">
					<div class="glide__track" data-glide-el="track" >
						<ul class="glide__slides" style="transition: transform 400ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 8078px; transform: translate3d(-4718px, 0px, 0px); perView: 3;">
							<li class="glide__slide text-center">
						    	<div style="color:#014471;margin-top:2.5vw;">
									<i class="fas fa-shopping-cart fa-5x"></i>
								</div>
								<h3 style="color:#014471;margin-top:2.5vw;">eCommerce</h3>
								<p class=" col-8 col-sm-6 col-md-6 col-lg-4 col-xl-4 offset-xl-4 offset-md-3 offset-lg-4 offset-2 offset-sm-3 " style="color:#121212;font-size:1.75rem;">Integration of eCommerce platforms, 
									payment gateways, custom product 
									templates,<span style="white-space:nowrap;"> and more.</span></p>
						    </li>
							<li class="glide__slide text-center ">
								<div style="color:#014471;margin-top:2.5vw;">
									<i class="fas fa-file-code fa-5x"></i>
								</div>
								<h3 style="color:#014471;margin-top:2.5vw;">Design + Development</h3>
								<p class=" col-8 col-sm-6 col-md-6 col-lg-4 offset-md-3 offset-lg-4 offset-2 offset-sm-3 col-xl-4 offset-xl-4 " style="color:#121212;font-size:1.75rem;">Modern designs optimized  
									for accessibility, search engines, and 
									converting users to customers.</p>
								
							</li>
						    
						    <li class="glide__slide text-center">
						    	<div style="color:#014471;margin-top:2.5vw;">
									<i class="fas fa-chart-bar fa-5x"></i>
								</div>
								<h3 style="color:#014471;margin-top:2.5vw;">Analytics</h3>
								<p class=" col-8 col-sm-6 col-md-6 col-lg-4 col-xl-4 offset-xl-4 offset-md-3 offset-lg-4 offset-2 offset-sm-3" style="color:#121212;font-size:1.75rem;">Get insight into who is browsing 
									 your site so that you can make 
									 smarter business decisions</p>
						    </li>
						    <li class="glide__slide text-center">
						    	<div style="color:#014471;margin-top:2.5vw;">
									<i class="fas fa-mobile-alt fa-5x"></i>
								</div>
								<h3 style="color:#014471;margin-top:2.5vw;">Mobile-Friendly</h3>
								<p class=" col-8 col-sm-6 col-md-6 col-lg-4 col-xl-4 offset-xl-4 offset-md-3 offset-lg-4 offset-2 offset-sm-3 " style="color:#121212;font-size:1.75rem;" >A responsive design makes your
									product accessible to all users, 
									regardless of their device<p>
						    </li>
						    <li class="glide__slide text-center">
						    	<div style="color:#014471;margin-top:2.5vw;">
									<i class="far fa-list-alt fa-5x"></i>
								</div>
								<h3 style="color:#014471;margin-top:2.5vw;">Website Audits</h3>
								<p class=" col-8 col-sm-6 col-md-6 col-lg-4 col-xl-4 offset-xl-4 offset-md-3 offset-lg-4 offset-2 offset-sm-3" style="color:#121212;font-size:1.75rem;">Looking to improve your page 
									perfomance, SEO, or user experience? 
									Request a free site audit</p>
						    </li>
						</ul>

					</div>
					<div data-glide-el="controls" style="">
						<button class="glide__arrow glide__arow--left prevBox" data-glide-dir="<" style="color:#014471;display:inline"><i class="fas fa-chevron-left"></i></button>
						<button class="glide__arrow glide__arrow--right nextBox  " data-glide-dir=">" style="color:#014471;display:inline"><i class="fas fa-chevron-right 3x"></i></button>
					</div>
					<div class="text-center">
						<a href="#contactForm" class="btn btn-outline-primary mt-3 mb-3  btn-md  grow"><strong>Learn More</strong></a>
					</div>
				</div>		
			</div>
			
			</div>
			
		<!-- Testimonials -->	
		
		<div class="row text-center" style="background-color:#FCC29C;border-top:7px solid #014471; text-align:center; margin-top:5rem;">
			<div class="col-10 offset-1  mt-5 mb-5">
				<h2 class="step" style="color:#014471;"><span style=font-size:150%;>"</span>Great Experience working with  <br> Christian on our new Website. <br> Very professional.<span style=font-size:120%;>"</span></h2>
				<h3 class="step" style="color:#014471">Brenda Storch <br> Messianic Rebbetzin of the Tabernacle</h3>
				
				
			</div>
		</div>
		
		<!--  Recent Work -->
		
		<div class="row text-center" style="border-top:7px solid #014471; text-align:center; ">
			<div class="col-12 mt-4">
				<h2 class="mb-4 step" style="color:#9BBAC0 ;margin-top:5rem;" >Recent Work</h2>
				<a href="http://thetabernacleinbranson.com" target="_blank"><img src="img/heroToPScreenshot.jpeg" class="img-fluid topPortPic grow step" alt="tabernacleOfPraise HomePage Screenshot" /></a>
				<br>
				<h2 class="mt-3 step" style="color:#014471;font-size:300%;"><strong> The Tabernacle in Branson</strong></h2>
				<p class=" col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 step longText" style="color:#121212" >A Jewish Congregation in Branson, Missouri. Their old website was a mess, to say the least. Impossible to dissect. With my process - we picked what content was most important and what was cut. Then, I crafted that content into a design that's easy to use and solved 
				
				    <span style="white-space:nowrap;"> their problems. </span> </p>
				<h3 class="mt-3 step" style="color:#014471;">  UX/UI Redesign - Development - eCommerce </h3>
				
				<a href="topCaseStudy.html"  class="btn btn-outline-primary mt-3 mb-3  btn-md step " ><strong>Case Study</strong></a>
				<div class="col-12">
					<a href="img/christianArmstrongResume.pdf"  class=" btn btn-outline-primary mt-3 mb-3  btn-md step " ><strong> My Resume</strong></a>
				</div>
			</div>
		</div>
		
		<!--  My Process -->
		
		<div class="row text-center" style="background-color:#CDDCE0;border-top:7px solid #014471;margin-top:5rem;">
			<div class="col-12 mt-4">
				<h2 class=" mb-5 step" style="color:#01263D;margin-top:5rem;opacity:75%" >My Process</h2>
			</div>
			<div class="col-12 col-md-6 col-xl-3  step" style="">
				
				<div class="darkBlueCircle">
					<i class="fas fa-search fa-5x " ></i>
				</div>
				
				<div class="card-body">
				   <h2 class="card-title step" style="color:#014471"><strong>Discovery</strong></h2>
				   <p class="card-text step" style="font-size:1.65rem;color:#001928">Discovery is where I learn about your project. Everything. What the problem is. Who your users are. How fast you want it done. This phase is over once I have the information needed to begin mapping your <span style="white-space:nowrap;"> user's journey.  </span>
				   </p>
				   	<hr style="background-color:#ff6b00;height:5px;width:33%;border-radius:20px;">
				   
				 </div>
			</div>
			<div class="col-12 col-md-6 col-xl-3  ">
			
				<div class="lightBlueCircle">
					<i class="fas fa-pencil-ruler fa-5x"></i>
				</div>
				<div class="card-body">
				   <h2 class="card-title step" style="color:#014471"><strong>Design</strong></h2>
				   <p class="card-text step" style="font-size:1.65rem;color:#001928">To kick off the Design phase I use the user journey maps to craft the site map. Using that, I sketch wireframes until we choose a design  <span style="white-space:nowrap;"> to prototype. </span>
				   </p>
				   <hr style="background-color:#ff6b00;height:5px;width:33%;border-radius:20px;">
				   
				 </div>
			</div>
			<div class="col-12 col-md-6 col-xl-3  " > 
				<div class="darkBlueCircle">
					<i class="fas fa-database fa-5x"></i>
				</div>
				<div class="card-body">
				   <h2 class="card-title step" style="color:#014471"><strong>Development</strong></h2>
				   <p class="card-text step" style="font-size:1.65rem;color:#001928">As soon as you approve the final prototype development begins. First, I choose the best technology for your problem. Once the technology is in place the coding begins. It begins with the main page then moves on to any subpages based on the site map. Finally, everything is optimized for <span style="white-space:nowrap;">search engines. </span>
				   
				   </p>
				   <hr style="background-color:#ff6b00;height:5px;width:33%;border-radius:20px;">
				   
				 </div>
			</div>
			<div class="col-12 col-md-6  col-xl-3">
				<div class="lightBlueCircle">
					<i class="fas fa-vial fa-5x"></i>
				</div>
				<div class="card-body">
				   <h2 class="card-title step" style="color:#014471"><strong>Testing</strong></h2>
				   <p class="card-text step" style="font-size:1.65rem;color:#001928">Once it's optimized, everything's checked for bugs. From dropdown menus and pop-up modals to contact forms and analytics tracking. I also check everything looks good and works across all browsers and operating systems. Then I ship. And boom you have a website tailored to solve your problems. <span style="white-space:nowrap;"> and cross-os. </span>
				   </p>
				   <hr style="background-color:#ff6b00;height:5px;width:33%;border-radius:20px;">
				   
				</div>
			</div>
			
		</div>
		
		<!--  About Me -->
		
		<div class="row text-center" style="border-top:7px solid #014471; ">
			<div class="col-12 " style="margin-top:5rem;">
				<h2 class="mt-4 step" style="color:#9BBAC0" >About Me</h2>
				
				<img src="img/profilePicV3.jpg" class="img-fluid aboutMePic step" style="display:inline-block"alt="pictureOfMe" />
				
				
				<h2 class="mt-3 step" style="color:#014471;"><strong> Who I Am</strong></h2>
				
				<p class="col-md-4 offset-md-4 mt-3 step" style="font-size:1.65rem;color:#121212;"> I'm a creative developer passionate about solving business problems through the web. I started honing in on web development 2 years ago but i'v been coding for 6. I've led teams through a couple of big wins by solving problems. One time - I led a team through an international video game design competition. I'm also an autodidact - I love to learn - so I spend the majority of my free time-consuming information. I'm currently figuring out how to escape college.  </p>
				
				
				<div class="darkBlueCircle">
					<i class="fas fa-trophy fa-5x"></i>
				</div> 
				<h2 class="mt-3 step" style="color:#014471"><strong> Awards </strong></h2>
				<p class="col-md-4 offset-md-4 mt-3 mb-4 step " style="font-size:1.65rem;color:#121212;"> 1st - Hack4Good - Programming Competition <br>
																				11th - FBLA Nationals Baltimore 2018 - Computer Game and Simultation Programming <br>
																				4th  - FBLA State - <span style="white-space:nowrap;"> Cyber Security </span> <br>
				  </p>
			</div>
		</div>
		
		<!--  Contact Form -->
		
		<div class="row text-center" id="contactForm" style="background-color:#014471;border-top:5px solid #ff6b00;border-bottom:5px solid #ff6b00">
			<h2 class="col-12 mt-5" style="color:#f96D10;font-size:500%"><strong>Let's Talk</strong></h2>
			<h3 class="col-12 mt-1" style="color:#FFFFFF;font-size:150%">New Projects, Freelance inquiry, or even a coffee</h3>
			<form class="col-12" id="contact-form" method="post" action="index.php" >

			    <div class="messages"></div>
			
			    <div class="controls">
			
			        <div class="row mt-4">
			            <div class="col-md-3 offset-md-3">
			                <div class="form-group">
			                    <label for="form_name" class="float-left" style="color:#FFFFFF">Name </label>
			                    <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Name is required.">
			                    <div class="help-block with-errors"></div>
			                </div>
			            </div>
			            <div class="col-md-3 ">
			                <div class="form-group">
			                    <label for="form_email" class="float-left" style="color:#FFFFFF">Email </label>
			                    <input id="form_email" type="text" name="email" class="form-control" placeholder="" required="required" data-error="Email is required.">
			                    <div class="help-block with-errors"></div>
			                </div>
			            </div>
			        </div>
			        
			        <div class="row">
			            <div class="col-md-6 offset-md-3">
			                <div class="form-group">
			                    <label for="form_message" class="float-left" style="color:#FFFFFF">Message</label>
			                    <textarea id="form_message" name="message" class="form-control" placeholder="" rows="10" required="required" data-error="Please, leave me a message."></textarea>
			               
			                </div>
			            </div>
			            <div class="col-md-12">
			                <input type="submit" name="submit" class="btn btn-primary btn-send btn-md mb-4 font-weight-bold grow" value="Send message">
			            </div>
			        </div>
			       
			    </div>
			    
			
			</form>
		</div>
	</div>
		
	<!--  Footer  -->	
	
	<footer class="border-top footer text-muted " >
		<div class="container-fluid footerText" style="text-align:center; ">
			Crafted with <i class="fas fa-heart" style="color:#ff6b00"></i><br style="margin-top:1rem;"> &copy;Christian Armstrong Design LLC 2021 <br>
			<a href="https://www.linkedin.com/in/christianarmstrongwebdesign/"><i  class="fab fa-3x fa-linkedin  linkedinIcon" style="color:#014471;margin-right:2rem;" ></i></a>
			<a href="https://www.instagram.com/christian.aarmstrong/"><i class="fab fa-3x fa-instagram  instagramIcon" style="color:#014471"></i></a>
			<a href="https://twitter.com/theCADTweets"><i class="fab fa-3x fa-twitter  twitterIcon" style="color:#014471;margin-left:2rem;"></i></a>
		</div>
		
		
	</footer>
	
	<!--  Scripts -->
	
	<script src="lib/jquery/dist/jquery.min.js"></script>
	<script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="js/site.js"></script>
	<script src="https://kit.fontawesome.com/30f9a19fea.js" ></script>
	<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

	<script>
		const config = {
				type: "slider",
				startAt: 1,
				perTouch: 1,
				focusAt: "center",
				
				
				
		}
	  	new Glide('.glide', config).mount()
	  
	  
	</script>
	<script>
		let skFoldingCube = document.querySelector(".sk-folding-cube");
		window.addEventListener("load", function() {
			skFoldingCube.parentElement.removeChild(skFoldingCube);
			
		});
	</script>
	<script>
		$(document).ready(function(){
		  // Add smooth scrolling to all links
		  $("a").on('click', function(event) {
		
		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();
		
		      // Store hash
		      var hash = this.hash;
		
		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 800, function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		    } // End if
		  });
		});
	</script>
	<script type="text/javascript">
		const scroller = scrollama();
		
		scroller.setup({
			step: '.step',
			offset: .95,
			
		})
		.onStepEnter((response) => {
			console.log(response)
			response.element.classList.remove('inactive');
			response.element.classList.add('active');
		})
		.onStepExit((response) => {
			console.log(response)
			response.element.classList.remove('inactive');
			response.element.classList.add('active');
		})
		window.addEventListener("resize", scroller.resize);
	</script>
	
	
	
</body>
</html>