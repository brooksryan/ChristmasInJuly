<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Christmas In July</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/style.css">
  <script src="js/prefixfree.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body data-spy="scroll" data-target="#navbar-example"> 
	<header>
		<?php include 'Components/php/header.php'; ?>
	</header> <!-- HEADER -->
	<div class="fillerPages">
		
		<div class="page fullheight" id="introduction">
			<div class="content container-fluid fullheight">					
				<div class="row">						
					<div class="col-md-offset-3 col-md-6  col-sm-offset-2 col-sm-9">
						<p>
							<h1>Christmas in July </h1><h2>(Sometime near Christmas)</h2> <h3>A night of sketch comedy & improv theater</h3>
						</p>
					</div> <!-- introduction col-lg-12 -->
				</div> <!-- row -->
				<div class="row">					
						<a class="btn btn-default ctaButton" href="#tickets">Get Your Ticket</a>				
										
						<a class="btn btn-default ctaButton" href="#workWithUs">Perform With Us</a>	
								
				</div> <!-- row -->
			</div> <!-- content container-fluid --> 
		</div>  <!-- introduction -->

		
		<div class="page" id="about">	
			<?php include 'pages/detailsPage.php'; ?>
		</div>  <!-- details page -->

		<div class="page" id="castAndCrew">
			<?php include 'pages/castAndCrew.php'; ?>
		</div>  <!-- castAndCrew -->
			
		<div class="page" id="tickets" >
			<?php include 'pages/ticketsInfo.php'; ?>			
		</div> <!-- tickets page  -->

	</div>  <!-- fillerPages -->
	<footer>
		<div class="container-fluid">

		</div><!-- footer container -->	
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="JS/myscript.js"></script>
</body>
</html>