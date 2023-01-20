<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;400;500&family=Rock+Salt&display=swap" rel="stylesheet">
	<title>Leopoldo Medri</title>
</head>
<body>
<div class="contfull">	




<header>	

			<div class="links">
				

						<a id="contact-link" class="contact-link"href="#">Contact</a>
						<a id="contact-link" class="contact-link"href="#">Works</a>
			</div>
				<div class="about-me-container">
					<div class="links">
					</div>
					<div class="img-introduction-cont">
						
						<div class="male-img">
						
							<img  id="maleimg" class="male" src="images/male.png" alt="">	
						</div>
					
						<div class="intro">
							
								<p class="introduction">	My name is Leopoldo, student of social work at the university of Buenos Aires (UBA). I'm just getting started at web design, however , i would like not to only design but also to programming more deeply. I'm also looking forward helping the community with programming in a near future. </p>
						</div>
					</div>
				</div>	

				<div class="tittle">
					<div class="tittle-img">
						
					<h1><span>Welcome</span></h1>
					
					
				
				</div>
				<hr class="wline">

				</div>
				<div class="h2content">
					
					<h2>Idiosyncrasy</h2>
				</div>
				<div class="can">

					<div class="can-img">
						<img class="imgdo" src="images/code.png" alt="">
						<p>Willing to follow orders and comple tasks.</p>
					</div>

					<div class="can-img">
						<img class="imgdo" src="images/lesson.png" alt="">
						<p>Not being a professional motivates me to learn everyday from the whones who really know.</p>
					</div>

					<div class="can-img">
						<img class="imgdo" src="images/united.png" alt="">
						<p>Teamwork is essential, so i enjoy being part of a group.</p>
					</div>

					<div class="can-img">
						<img class="imgdo" src="images/work.png" alt="">
						<p>Being constant in what i do, because practice makes perfect. </p>
					</div>

</div>
<hr class="division">
</header>
		

<main>
	

		<div id="skills" class="skills">	
		<h2>Skills</h2>
		<div class="javascript-content">	
				<img  id="skillimage"class="java-img" src="images/javascript.png" alt="">
		</div>	
			<div class="javascript-content">	
				<img  id="skillimage"class="java-img" src="images/php-logo.png" alt="">
		</div>	
		<div class="javascript-content">	
				<img  id="skillimage"class="java-img" src="images/mysql.png" alt="">
		</div>	
		<div class="javascript-content">	
				<img  id="skillimage"class="java-img" src="images/html.png" alt="">
		</div>	
		<div id="skillimage" class="javascript-content">	
				<img class="java-img-boot" src="images/bootstrap.png" alt="">
		</div>	
		<div id="skillimage" class="javascript-content">	
				<img class="java-img" src="images/sass.png" alt="">
		</div>	

	<div class="javascript-content">	
				<img  id="skillimage"class="java-img" src="images/css-3.png" alt="">
		</div>	

	<div class="javascript-content">	
				<img class="java-img" src="images/github.png" alt="">
		</div>	


	</div>
	<hr class="division">

		
		<div class="works">	
				<h4>Works</h4>
			<div class="workunocontainer">	

			<a href="www.portalnotice.com">
				
				<img class="workuno" src="images/workuno.png" alt="">
			</a>
				<p>	Just a personal project</p>
					
			</div>
		</div>	

		<hr class="division">
	<div class="contact-container">
	<h5>Contact Me</h5>
	<form action="<?php 	echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
		<input type="text" placeholder="Nombre:" name="nombre" id="nombre" class="nombre">
		<input type="text" placeholder="Apellido:" name="apellido" id="apellido" class="apellido">
		<textarea placeholder="Mensaje:" name="mensaje" id="mensaje"></textarea>

			<?php if (!empty($errores)): ?>
				<?php echo 	$errores; ?>
		<?php elseif($enviado) : ?>
			
				<?php 	echo 'bien'; ?>
			
			<?php endif ?>

		<div class="input">	
	<input type="submit"  class="btn-submit" name="submit" value="Enviar" >
		</div>	

	</form>
	</div>
</main>


</body>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.js"></script>
	</div>
</body>
</html>