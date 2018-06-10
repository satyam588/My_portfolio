<?php

if(isset($_POST['sbmt_btn']))
{
    $con = mysqli_connect("localhost", "root", "", "portfolio") or die(mysqli_error($con));
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['msg'];
    
    $sql_query = "insert into contact (name, email, message) values ('$name','$email','$message')";
    
    $query_res = mysqli_query($con, $sql_query);
    
    echo '<script>alert("Thank You! See You Soon..")</script>';
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Shape</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="index.css">

	<script>
$(document).ready(function(){
  $("a").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        window.location.hash = hash;
      });
    }
  });
});


$(window).on("scroll", function() {
    var scrollPos = $(window).scrollTop();
    if (scrollPos <= 0) {
        $(".float_btn").fadeOut();
    } else {
        $(".float_btn").fadeIn();
    }
});

</script>

</head>
<body>

	<div id="hero_style" class="hero_style" style="color: #fff;margin: 0px;">

		<div class="navbar navbar-default navbar-static-top hidden-xs" style="background: rgba(0,0,0,0);">
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand" style="font-family: Quantify;margin: 0px;padding: 0px;color: #fff"><h2>Satyam</h2></a>
			</div>
				
				<ul class="nav navbar-nav navbar-right" style="font-family: gotham_light;padding: 10px 0px 0px 0px;font-size: 16px;font-weight: bold;">
					<li><a href="#about" style="color: #fff">About</a></li>
					<li><a href="#work_section" style="color: #fff">Services</a></li>
					<li><a href="#resume_section" style="color: #fff">Resume</a></li>
					<li><a href="#contct_section" style="color: #fff">Contact</a></li>
				</ul>
		</div>
		</div>

		<div  class="heroic_name hidden-xs">
		<h1>&nbsp;S&nbsp;&nbsp;A&nbsp;&nbsp;T&nbsp;&nbsp;Y&nbsp;&nbsp;A&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp; S&nbsp;&nbsp;U&nbsp;&nbsp;N&nbsp;&nbsp;D&nbsp;&nbsp;A&nbsp;&nbsp;R&nbsp;&nbsp;A&nbsp;&nbsp;M</h1>
		<p style="font-family: gotham_light;padding: 10px;font-size: 20px">Full-Stack Web Developer | Designer</p>
		</div>

		<div class="visible-xs container">
			<ul class="nav_xs">
				<a href="#about_xs"><li class="nav_xs_1">About</li></a>
				<a href="#work_xs"><li class="nav_xs_1">Services</li></a>
				<a href="#resume_xs"><li class="nav_xs_1">Resume</li></a>
				<a href="#cntct_xs"><li class="nav_xs_1">Contact</li></a>
			</ul>
		</div>

		<div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);"  class="heroic_name visible-xs">
		<h1>S&nbsp;&nbsp;A&nbsp;&nbsp;T&nbsp;&nbsp;Y&nbsp;&nbsp;A&nbsp;&nbsp;M</h1>
		<h1>S&nbsp;&nbsp;U&nbsp;&nbsp;N&nbsp;&nbsp;D&nbsp;&nbsp;A&nbsp;&nbsp;R&nbsp;&nbsp;A&nbsp;&nbsp;M</h1>
		<p style="font-family: gotham_light;padding: 10px;font-size: 20px">Full-Stack Web Developer | Designer</p>
		</div>

		<center class="hidden-xs"><a href="#about"><i class="fas fa-chevron-down" ></i></a></center>

                <a href="#about_xs" class="visible-xs"><center><i class="fas fa-chevron-down" ></i></center></a>

		<center class="visible-sm"><a href="#about_sm"><i class="fas fa-chevron-down" ></i></a></center>

	</div>

	<div class="container visible-lg">
		<div class="row">
			<div class="col-xs-3">
				<div class="thumbnail">
					<img class="img_back" src="diamond.png">

					<img class="img_front" src="comp.png">
				</div>
			</div>

			<div class="col-xs-3">
				<div class="thumbnail">
					<img src="diamond_border.png">
				</div>
				<i class="fas fa-paint-brush paint_brush_lg"></i>
			</div>

			<div class="col-xs-3">
				<div class="thumbnail">
					<img src="diamond.png">

					<img class="img_front_mbl" src="reponsive.png">
				</div>
			</div>

			<div class="col-xs-3">
				<div class="thumbnail">
					<img src="diamond_border.png">
				</div>
				<i class="fab fa-wordpress"></i> 
			</div>
		</div>
	</div>

	<div class="container visible-lg">
		<div class="row" align="center">
			<p class="caption col-xs-3 cap_skill">Web Development</p>

			<p class="caption col-xs-3 cap_skill">Web Design</p>

			<p class="caption col-xs-3 cap_skill">Responsive Design</p>

			<p class="caption col-xs-3 cap_skill">Wordpress Design</p>
		</div>
	</div>

	<div class="visible-md">
		<div class="row"  style="overflow: hidden;">
			<div class="col-xs-3">
				<div class="thumbnail">
					<img class="img_back" src="diamond.png">

					<img class="img_front" src="comp.png">
				</div>
			</div>

			<div class="col-xs-3">
				<div class="thumbnail">
					<img src="diamond_border.png">
				</div>
				<i class="fas fa-paint-brush paint_brush_lg"></i>
			</div>

			<div class="col-xs-3">
				<div class="thumbnail">
					<img src="diamond.png">

					<img class="img_front_mbl" src="reponsive.png">
				</div>
			</div>

			<div class="col-xs-3">
				<div class="thumbnail">
					<img src="diamond_border.png">
				</div>
				<i class="fab fa-wordpress"></i> 
			</div>
		</div>
	</div>

	<div class="visible-md" >
		<div class="row" align="center">
			<p class="caption col-xs-3 cap_skill">Web Development</p>

			<p class="caption col-xs-3 cap_skill">Web Design</p>

			<p class="caption col-xs-3 cap_skill">Responsive Design</p>

			<p class="caption col-xs-3 cap_skill">Wordpress Design</p>
		</div>
	</div>

	<div class="container visible-sm">
		<div class="row">
			<div class="col-xs-6">
				<div class="thumbnail">
					<img style="height: 80%;width: 80%" class="img_back" src="diamond.png">

					<img style="position: absolute;left: 50%;top: 40%;transform: translate(-50%,-50%);" class="img_front" src="comp.png">
				</div>
			</div>

			<div class="col-xs-6">
				<div class="thumbnail">
					<img style="height: 80%;width: 80%" src="diamond_border.png">
				</div>
				<i style="position: absolute;left: 50%;top: 40%;transform: translate(-50%,-50%);" class="fas fa-paint-brush paint_brush_lg"></i>
			</div>
		</div>
	</div>
	<div class="container visible-sm">
		<div class="row" align="center" style="margin-top: -20px !important">
		<p class="caption col-xs-6 cap_skill"  style="padding-top: -10px">Web Development</p>

		<p class="caption col-xs-6 cap_skill"  style="padding-top: -10px">Web Design</p>
		</div>
	</div>

	<div class="container visible-sm">
		<div class="col-xs-6">
				<div class="thumbnail">
					<img style="height: 80%;width: 80%" src="diamond.png">

					<img style="position: absolute;left: 50%;top: 40%;transform: translate(-50%,-50%);" class="img_front_mbl" src="reponsive.png">
				</div>
		</div>

		<div class="col-xs-6">
				<div class="thumbnail">
					<img style="height: 80%;width: 80%" src="diamond_border.png">
				</div>
				<i style="position: absolute;left: 50%;top: 40%;transform: translate(-50%,-50%);" class="fab fa-wordpress"></i> 
		</div>
	</div>

	<div class="container visible-sm">
		<div class="row" align="center"  style="margin-top: -20px !important">
		<p class="caption col-xs-6 cap_skill">Responsive Design</p>

		<p class="caption col-xs-6 cap_skill">Wordpress Design</p>
		</div>
	</div>
    
       <div class="visible-xs">
            <div class="row " align="center">
                <div class="col-xs-6">
            <i class="fas fa-laptop "></i>
            <p style="margin:10px 0px 0px 0px;font-family: lemon;color: #000c26;">Web Development</p>
            </div>
            
            <div class="col-xs-6">
                <i class="fas fa-paint-brush paint_brush"></i>
            <p style="margin:10px 0px 0px 0px;font-family: lemon;color: #000c26;">Web Design</p>
            </div>
            </div>
            <div class="row" align="center">
            <div class="col-xs-6">
            <i class="fas fa-mobile "></i>
            <p style="margin:10px 0px 0px 0px;font-family: lemon;color: #000c26;">Responsive Design</p>
            </div>
            
            <div class="col-xs-6">
                <i class="fab fa-wordpress-simple " ></i>
            <p style="margin:10px 0px 0px 0px;font-family: lemon;color: #000c26;">Wordpress Design</p>
            </div>
            </div>
        </div>


	<div id="about" class="about_section hidden-xs hidden-sm">
		<div class="row">
			<img style="height: 370px;width: 390px" class="proile_pic col-xs-5" src="about.png">
			<div class="col-xs-7" style="font-family: lemon">
			<h2 class="col-xs-10 col-xs-offset-2 abt_headng">ABOUT ME</h2>
			<p class="col-xs-10 col-xs-offset-2" style="color: #fff;font-family: Tw Cen MT;font-size: 20px">
                            I am fun loving guy who loves to take challenges. Apart from my passion, which
                            is Web Development, I love to read. I am a chill and calm guy who talks little but efficiently.
			</p>
			<table class="col-xs-10 col-xs-offset-2">
				<tr>
					<td>
						<img class="bullets" src="bullets.png">
					</td>
					<td>
						<p style="color: #fff;">HTML5</p>
					</td>
					<td>
						<img class="bullets" src="bullets.png">
					</td>
					<td>
						<p style="color: #fff;">Wordpress Development</p>
					</td>
				</tr>

				<tr>
					<td>
						<img class="bullets" src="bullets.png">
					</td>
					<td>
						<p style="color: #fff;">CSS</p>
					</td>
					<td>
						<img class="bullets" src="bullets.png">
					</td>
					<td>
						<p style=" color: #fff;">Responsive Design</p>
					</td>
				</tr>

				<tr>
					<td>
						<img class="bullets" src="bullets.png">
					</td>
					<td>
						<p style=" color: #fff;">PHP</p>
					</td>
					<td>
						<img class="bullets" src="bullets.png">
					</td>
					<td>
						<p style=" color: #fff;">JavaScript</p>
					</td>
				</tr>

				<tr>
					<td>
						<img class="bullets" src="bullets.png">
					</td>
					<td>
						<p style=" color: #fff;">MySql</p>
					</td>
				</tr>
			</table>
			</div>
		</div>	
	</div>

	<div id="about_xs" class="about_section visible-xs">
		<div class="row">
			<img class="proile_pic col-xs-4" src="about.png">
			<div align="right" class="col-xs-7" style="font-family: lemon;position: absolute;right: -2%">
			<h4 class="col-xs-12 abt_headng">ABOUT ME</h4>
			<p class="col-xs-12" style="color: #fff;font-family: gotham_light;font-size: 15px">I am fun loving guy who loves to take challenges. Apart from my passion, which
                            is Web Development, I love to read. I am a chill and calm guy who talks little but efficiently.
			</p>
			</div>
		</div>	
	</div>
	
    <div class="visible-xs col-xs-12" style="margin:0px 5px 0px 5px">
		<table class="table visible-xs" style="margin: 10px 0px 0px -20px;">
				<tr>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p>HTML5</p>
					</td>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p>CSS</p>
					</td>
				</tr>

				<tr>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p >PHP</p>
					</td>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p >Javascript</p>
					</td>
				</tr>

				<tr>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p>Wordpress Development</p>
					</td>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p>Responsive Design</p>
					</td>
				</tr>

				<tr>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p>MySql</p>
					</td>
				</tr>
		</table>
	</div>

	<div id="about_sm" class="about_section visible-sm">
		<div class="row">
			<img class="proile_pic col-xs-4" src="about.png">
			<div class="col-xs-7" style="font-family: lemon;position: absolute;right: 0">
			<h3 class="col-xs-11 abt_headng">ABOUT ME</h3>
			<p class="col-xs-11" style="color: #fff;font-family: Tw Cen MT;font-size: 18px">I am fun loving guy who loves to take challenges. Apart from my passion, which
                            is Web Development, I love to read. I am a chill and calm guy who talks little but efficiently.
			</p>
			</div>
		</div>	
	</div>

	<div class="visible-sm col-xs-12 col-xs-offset-1 container">
		<table class="table visible-sm" style="margin: 10px 0px 0px 0px">
				<tr>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p>HTML5</p>
					</td>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p>Wordpress Development</p>
					</td>
				</tr>

				<tr>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p >CSS</p>
					</td>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p >Responsive Design</p>
					</td>
				</tr>

				<tr>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p>PHP</p>
					</td>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p>JavaScript</p>
					</td>
				</tr>

				<tr>
					<td>
						<img class="bullets" src="diamond.png">
					</td>
					<td>
						<p>MySql</p>
					</td>
				</tr>
		</table>
	</div>

	<div id="work_section" class="work_section hidden-xs hidden-sm">
		<div>
			<h2 class="my_work">My Work</h2>
		</div>
		<div class="container" style="margin-top: 25px">
			<div class="thumbnail col-xs-4">
                            <a href="https://drive.google.com/open?id=1ju6QVYE2aLWVv0rCBcfjUAQ4MoTMlS8I" target="_blank"><img src="project1.png"></a>
			</div>

			<div class="thumbnail col-xs-4">
                            <a href="https://drive.google.com/open?id=1ju6QVYE2aLWVv0rCBcfjUAQ4MoTMlS8I" target="_blank"><img src="project2.png"></a>
			</div>

			<div class="thumbnail col-xs-4">
                            <a href="https://drive.google.com/open?id=1ju6QVYE2aLWVv0rCBcfjUAQ4MoTMlS8I" target="_blank"><img src="project3.png"></a>
			</div>

			<div align="center">
                            <a href="https://drive.google.com/open?id=1ju6QVYE2aLWVv0rCBcfjUAQ4MoTMlS8I" target="_blank"><button class="btn btn-default" type="button">Learn more</button></a>
			</div>
		</div>
	</div>

	<div id="work_xs" class="work_section visible-xs">
		<div>
			<h3 class="my_work">My Work</h3>
		</div>
            <div style="margin-top: 25px" class="row">
			<div class="thumbnail col-xs-4">
                            <a href="https://drive.google.com/open?id=1ju6QVYE2aLWVv0rCBcfjUAQ4MoTMlS8I" target="_blank"><img style="width: 100%" src="project1.png"></a>
			</div>

			<div class="thumbnail col-xs-4">
                            <a href="https://drive.google.com/open?id=1ju6QVYE2aLWVv0rCBcfjUAQ4MoTMlS8I" target="_blank"><img style="width: 100%" src="project2.png"></a>
			</div>

			<div class="thumbnail col-xs-4">
                            <a href="https://drive.google.com/open?id=1ju6QVYE2aLWVv0rCBcfjUAQ4MoTMlS8I" target="_blank"><img style="width: 100%" src="project3.png"></a>
			</div>

			<div align="center">
                            <a href="https://drive.google.com/open?id=1ju6QVYE2aLWVv0rCBcfjUAQ4MoTMlS8I" target="_blank"><button class="btn btn-default" style="padding: 8px 20px 8px 20px;" type="button">Learn more</button></a>
			</div>
		</div>
	</div>

	<div class="work_section visible-sm">
		<div>
			<h3 class="my_work">My Work</h3>
		</div>
		<div style="margin-top: 25px">
			<div class="thumbnail col-xs-4">
                            <a href="https://drive.google.com/open?id=1ju6QVYE2aLWVv0rCBcfjUAQ4MoTMlS8I" target="_blank"><img style="width: 100%" src="project1.png"></a>
			</div>

			<div class="thumbnail col-xs-4">
                            <a href="https://drive.google.com/open?id=1ju6QVYE2aLWVv0rCBcfjUAQ4MoTMlS8I" target="_blank"><img style="width: 100%" src="project2.png"></a>
			</div>

			<div class="thumbnail col-xs-4">
                            <a href="https://drive.google.com/open?id=1ju6QVYE2aLWVv0rCBcfjUAQ4MoTMlS8I" target="_blank"> <img style="width: 100%" src="project3.png"></a>
			</div>

			<div align="center">
                            <a href="https://drive.google.com/open?id=1ju6QVYE2aLWVv0rCBcfjUAQ4MoTMlS8I" target="_blank"><button class="btn btn-default" style="padding: 8px 20px 8px 20px;" type="button">Learn more</button></a>
			</div>
		</div>
	</div>

	<div id="resume_section" class="hidden-xs resume_section">
		<div class="container">
			<div class="innr_box">
			<div class="col-xs-8">
			<p class="innr_cntnt">
				Like What You See?
			</p>
			<p class="innr_cntnt_2">
				Check out my resume to learn more.
			</p>
			</div>
			<div class="col-xs-4">
                            <a href="satyam-resume.pdf" download><button class="btn btn-default rsm_btn" type="button">View Resume</button></a>
			</div>
			</div>
		</div>
	</div>

	<div id="resume_xs" class="visible-xs resume_section">
		<div class="container">
			<div class="innr_box">
			<div align="center" class="col-xs-12">
			<p class="innr_cntnt" style="font-size: 25px;">
				Like What You See?
			</p>
			<p class="innr_cntnt_2" style="font-size: 17px;">
				Check out my resume to learn more.
			</p>
			</div>
			<div class="col-xs-12">
                            <center><a href="satyam-resume.pdf" target="_blank" download><button class="btn btn-default rsm_btn_xs" style="margin: 25px 0px 25px 0px;padding: 10px 30px 10px 30px;" type="button">View Resume</button></a></center>
			</div>
			</div>
		</div>
	</div>

	<div id="contct_section" class="hidden-xs contct_section">
		<div class="container">
			<h2 class="cntct_heading">Get In Touch</h2>

			<div class="col-xs-5 box_contct">
				<p class="cntct_inner">Feel free to reach out. I'd love to hear from you!</p>

				<table class="table">
				<tr>
					<td>
						<img class="email_bullets" src="diamond.png" style="">
					</td>
					<td>
						<p class="email">callmesattu1994@gmail.com</p>
					</td>
				</tr>
				<tr>
					<td>
						<img class="mbl_bullets" src="diamond.png">
					</td>
					<td>
						<p class="mbl">+91 7004508589</p>
					</td>
				</tr>
			</table>
			</div>

			<div class="col-xs-7 box_contct">
				<div>
                                    <form class="form-group" method="post" action="index.php">
						<div class="col-xs-6">
						<input style="box-shadow: none" class="form-control"  type="text" name="name" placeholder="Your Name" required="true">
						</div>
						<div class="col-xs-6">
						<input style="box-shadow: none" class="form-control" type="email" name="email" placeholder="Your Email" required="true">
						</div>
						<div class="col-xs-12">
						<input style="box-shadow: none" class="form-control msg" type="text" name="msg" placeholder="Tell me how can i help you" required="true">
						</div>

						<button class="btn btn-default btn_sbmt" name="sbmt_btn">Submit</button>
					</form>
				</div>
			</div>
		</div>		
	</div>

	<div id="cntct_xs" class="visible-xs contct_section">
		<div class="container">
			<h3 class="cntct_heading">Get In Touch</h3>

			<div class="col-xs-12 box_contct">
				<p class="cntct_inner">Feel free to reach out. I'd love to hear from you!</p>

				<table class="table">
				<tr>
					<td>
						<img class="email_bullets" src="diamond.png" style="">
					</td>
					<td>
						<p class="email">callmesattu1994@gmail.com</p>
					</td>
				</tr>
				<tr>
					<td>
						<img class="mbl_bullets" src="diamond.png">
					</td>
					<td>
                                            <p class="mbl" style="color:#000c26"><a href="#">+91 7004508589</a></p>
					</td>
				</tr>
			</table>
			</div>

			<div class="col-xs-12 box_contct">
				<div>
                                    <form class="form-group" method="post" action="index.php">
						<div class="col-xs-6">
                                                    <input style="box-shadow: none" class="form-control"  type="text" name="name" placeholder="Your Name" required="true">
						</div>
						<div class="col-xs-6">
						<input style="box-shadow: none" class="form-control" type="email" name="email" placeholder="Your Email" required="true">
						</div>
						<div class="col-xs-12">
						<input style="box-shadow: none" class="form-control msg" type="text" name="msg" placeholder="Tell me how can i help you" required="true">
						</div>

						<button class="btn btn-default btn_sbmt" name="sbmt_btn">Submit</button>
					</form>
				</div>
			</div>
		</div>		
	</div>

	<div class="hidden-xs footer">
		<div class="container">
			<div class="footer_contnt">
				<div class="col-xs-8">
				<p class="myname col-xs-5" style="padding: 0px 0px 10px 0px;"><b>Satyam</b> Sundaram</p>
				<p class="copyright col-xs-7">Copyright &copy; 2018 All rights reserved</p>
				</div>

				<div class="col-xs-4">
                                    <table class=" socials_box" style="padding: 0px; margin:0px">
					<tr>
					<td class="socials">
						<a href="https://www.facebook.com/anonymous.sattu" target="_blank"><i class="fab fa-facebook"></i></a>
					</td>
					<td class="socials">
						<a href="https://www.instagram.com/call_me_sattu/" target="_blank"><i class="fab fa-instagram"></i></a>
					</td>
					<td class="socials">
						<a href="https://twitter.com/SATYAMSUNDARA11" target="_blank"><i class="fab fa-twitter"></i></a>
					</td>
					<td class="socials">
						<a href="" target="_blank"><i class="fab fa-github"></i></a>
					</td>
					</tr>
				</table>
				</div>
			</div>
		</div>
	</div>

	<div class="visible-xs footer">
		<div class="container">
			<div class="footer_contnt">
				<div class="col-xs-12">
                                    <div class="row">
				<center>
				<p class="myname col-xs-6 col-xs-offset-3" style="padding: 0px 0px 10px 0px;"><b>Satyam</b> Sundaram</p>
				</center>
				<center>
				<p class="copyright col-xs-6 col-xs-offset-3" style="margin-top: -15px">Copyright &copy; 2018 All rights reserved</p>
				</center>
                                    </div>
				</div>

				<div class="col-xs-10 col-xs-offset-2" style="padding: 5px" align="center">
					<table class="table">
					<tr>
					<td class="socials">
						<a href="https://www.facebook.com/anonymous.sattu" target="_blank"><i class="fab fa-facebook"></i></a>
					</td>
					<td class="socials">
						<a href="https://www.instagram.com/call_me_sattu/" target="_blank"><i class="fab fa-instagram"></i></a>
					</td>
					<td class="socials">
						<a href="https://twitter.com/SATYAMSUNDARA11" target="_blank"><i class="fab fa-twitter"></i></a>
					</td>
					<td class="socials">
						<a href="" target="_blank"><i class="fab fa-github"></i></a>
					</td>
					</tr>
                                        </table>
				</div>
				
			</div>
		</div>
	</div>

<!--	<div id="float_btn" class="float_btn"> <a href="#hero_style"><i class="fas fa-chevron-circle-up fa-4x"></i></a></div>-->
</body>
</html>