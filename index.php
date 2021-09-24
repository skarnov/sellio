<!DOCTYPE html>

<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="nl" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sellio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-glyphicons.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="res_style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<?php include 'analyticstracking.php';?>
    </head>
    <body>
	<div class="main">
        <div class="container">
            <div class="row">
                <div class="logo "><img src="img/logo.png" alt="Sellio Logo" /></div>
                <div class="slider">
					<div class= "text1">(her) activeren  van  uw  verkoopprestaties</div>
					<div class= "text1">Verkoopgroei realiseren</div>
					<div class= "text1">Oplossen van commerci&euml;le problemen</div>
					<div class= "text1">verkooprichting bepalen</div>
					<div class= "text1">Verkoopmedewerkers & - teams ontwikkelen</div>
				</div>				
				<div class="dropdown language">
					
				</div>
            </div>
        </div>
		<div class="container rea">
			<div class="col-md-7">
				<div class="row">
					<div class="heading">
						<p>Wij (her)activeren / maximaliseren verkoopprestaties van bedrijven.<br/>We helpen bij zowel strategische &#45; tactische als &#45; operationele vraagstukken.Omdat elke organisatie anders is, zijn al onze trajecten maatwerk.</p>
					</div>
					<div class="row">
					<div class="title" >
						<p>TOP trajecten</p>
					</div>
					</div>
				</div>
				<div class="row">
					<div class="main_contant_left_3"> 
						<div class="main_contant_left_3_box ">
					        <p>'waarde' ipv 'prijs' verkopen</p>
						</div>
						<div class="main_contant_left_3_box">
							<p>Social media integratie in de verkoop</p>
						</div>
						<div class="main_contant_left_3_box"> 
							<p>invoeren van key account management</p>
						</div>
						<div class="main_contant_left_3_box">
							<p>succesvol deelnemen aan beurzen</p>
						</div>
						<div class="main_contant_left_3_box"> 
							<p>nieuwe klanten vinden &#8594; prospectie</p>
						</div>
						<div class="main_contant_left_3_box"> 
							<p>effici&euml;ntere verkoopvergaderingen</p>
						</div>
						<div class="main_contant_left_3_box">
							<p>klanten behouden &#8594; strategie & implementatie</p>
						</div>
						<div class="main_contant_left_3_box"> 
							<p>performante commerciele back-office</p>
						</div>
						<div class="main_contant_left_3_box"> 
							<p>verkoopstrategie ontwikkeling</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5  col-sm-12 pull-right"> 
				<div class="row">
					<div class="form">
					<?php 
						if(isset($_POST['submit'])){
						$to = "ronnydiricx@gmail.com";
						$from = $_POST['email'];
						$name = $_POST['name'];
						$business = $_POST['business'];
						$phone = $_POST['phone'];
						$subject = "Sellio Contact Form";
						$question = "Name:" . $name ." ". "Business:" ." ". $business ." ". "Phone:" . $phone ." "." Ask This Question:" . "\n\n" . $_POST['question'];

						$headers = "From:" . $from;

						mail($to,$subject,$question,$headers);
						echo "Bedankt voor je reactie. We zullen binnen de 24 u contact opnemen.";
						}
					?>
					<form role="form" class="for-h" name="form1" id="form1" action="" method="post">
						<div class="orm-group">
							<label class="f-l" for="email">Naam</label>
							<input type="text" name="name" class="email" placeholder="">
						</div>
						<div class="form-group">
							<label class="f-l" for="email">Bedrijf</label>
							<input type="text" name="business" class="email" placeholder="">
						</div>
						<div class="form-group">
							<label class="f-l" for="email">Telefoon</label>
							<input type="text" name="phone"  class="email" placeholder="">
						</div>
						<div class="form-group">
							<label class="f-l" for="email">Email</label>
							<input type="email" name="email" class="email" placeholder="">
						</div>
						<div class="form-group">
							<label class="f-l" for="email">Vraag</label>
							<textarea name="question" class="s-botton email te-ar" rows="3"></textarea>
						</div>
						<button type="submit" name="submit" value="Send" class="botton_s">JA, contacteer mij aub</button>
					</form>
				</div>
			</div>		
				<div class="main_contant_bottom "> 
					<p>
						Ronny Diricx</br>
						<span style="color:white;">GSM +32 475 55 81 70</span></br>
						Mail : ronny@sellio.be
					</p>
				</div>
			</div>
        </div>
		<div class="container">
			<div id="nav_stylep">     
				<nav class="navbar navbar-default" id="nav_style" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"></a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li ><a href="#">Inspireren<span class="sr-only">(current)</span></a></li>
							<li><a href="#">Adviseren</a></li>
							<li><a href="#">Coachen</a></li>
							<li><a href="#">Doen</a></li>
						</ul>  
					</div>
				</nav>
			</div>
			<div class="row pull-right">
				<div class="copyright1" >
				   <p>Copyright sellio.be</p>
				</div>             
			</div>
			</div>	
		</div>
		<script src="js/vendor/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>		
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
    </body>
	<script>
    function AnimateBannerTeks(){
        var ct= 1;        
        $('.text1').each( function(){            
            var delay= 3000 * ct;
            var $obj= $(this);
            setTimeout(
            function(){
                $('.text1').fadeOut('fast');
                $obj.fadeIn(3000);                
            }, delay);
            ct++;
        });
    }
    
    AnimateBannerTeks();
    setInterval(AnimateBannerTeks, 15000);
	</script>
</html>