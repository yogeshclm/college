<!DOCTYPE html>
<html>

<head>
	<title>principals desk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">
		.main-page-image-text .Title {
			color: #78100D;
			font-size: 36px;
			line-height: 42px;
			padding: 10px 10px 10px 40px;
			background-color: #ebbb76;
			width: 97%;
			font-weight: bold
		}


		.main-page-description {
         
			display: table-row;
		}

		.main-page-description-left {
			color: #696969;
			border: 2px solid orange;

			margin-left: 20px;
			padding-right: 20px;
			padding-left: 20px;
			float: left;
			width: 25%;
		}

		.main-page-description-image {
			width: 70%;
			padding-left: 20px;
			
		}


		.main-page-description-right {
			width: 25%;
			height: 400px;
			border: 5px solid black;
			float: right;
			font-family: helvetica;
		}



		.main-page {

			width: 100%;
		}


		@media screen and (max-width: 1000px) {

			.main-page-description-left,
			.main-page-description-right {
				width: 100%;
				flex-direction: column;
			}

			.Title {
				width: 100%;
				flex-direction: column;
				font-size: 28px;
			}
		}


		}
	</style>
</head>

<body>
	<?php include("./mainpage/header.html");?>
	<section class="main-page">
		<div class="main-page-image-text">
			<h1 class="Title">PRINCIPAL’S DESK</h1>

		</div>


		<div class="main-page-description">

			<div class="main-page-description-image">

			  <div>
				<br>
				<img style="width:50%;" class="Images" src="img/JSSATE_Principal.jpg" align="left" alt="Principal_s_desk">
				<div>
<p style="text-align: left;"><span style="font-size: 14pt;"><a href="https://jssateb.ac.in/wp-content/uploads/2019/01/MVLATTE_Profile_21012019.pdf"><span style="color: #c99619;"><strong>Prof. Mrityunjaya V. Latte,</strong> M.Tech, PhD</span></a></span></p>
<p style="text-align: left;"><strong>JSS ACADEMY OF TECHNICAL EDUCATION, Bengaluru</strong><br>
 <img class="alignnone size-full wp-image-322" src="https://jssateb.ac.in/wp-content/uploads/2016/10/JSS-ICONS-PHONE.png" alt="jss-icons-phone" width="16" height="16"> <strong>: 080-28612565,&nbsp;<img class="alignnone size-full wp-image-323" src="https://jssateb.ac.in/wp-content/uploads/2016/10/JSS-ICON-FAX.png" alt="jss-icon-fax" width="16" height="16"> : 080-28612706</strong><br>
 <strong> <img class="alignnone wp-image-315" src="https://jssateb.ac.in/wp-content/uploads/2016/10/JSS-ICON-MAIL.png" alt="jss-icon-mail" width="15" height="15"> : mvlatte@rediffmail.com <span style="color: #800000;">|</span> principal@jssateb.ac.in</strong></p>
<p>&nbsp;</p>
</div>
				
	</div>
			</div>


			<div class="main-page-description-left" style="text-align:justify;">

				<p>
					<font size="5" color="black">❝</font>&nbsp It is my pleasure to heartily welcome to the portal of our Institute
					JSSATE, Bengaluru. <b>JSS Academy of Technical education</b> is the most sought after institute in Karnataka.
				</p>
				<p>The institute has high end undergraduate and postgraduate degree programs in several disciplines. To align with
					our teaching practices we have excellent faculty and state of the art infrastructure facilities and fully equipped
					laboratories. Highly qualified and dedicated staff providing good coaching to the diligent students makes this
					institution one of the best in the state. To meet the global standards of excellence we aim at creating all round
					personality development in our students( both professionally and socially).</p>
				<p>Our Post graduate departments and research centres are actively engaged in research work. The main focus is on
					research publication and presentation of papers in national/ International level. &nbsp <font size="5" color="black">❞</font>
				</p>
			</div>

			<div class="main-page-description-right">
				<p> </p>
			</div>
			

		</div>
	
	</section>
	<?php include("./mainpage/footer.html");?>
</body>

</html>