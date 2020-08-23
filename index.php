<?php 
$fileLevel = "";
$title = "Home";
include "./templates/header.php" 
?>

<main id="index">
	  
	<!-- Hero section -->
	<section class="jumbotron jumbotron-fluid bg-primary py-5">
		<div class="container text-center">
			<h1 class="display-3">Number Drop</h1>
			<p class="lead">Catch all the numbers!</p>
			<i class="fas fa-chevron-down"></i>
		</div>
	</section>

	<!-- Description section -->
	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>All about the game</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aspernatur facilis libero repudiandae ipsa consequatur aliquam. Nemo ab numquam aut natus commodi, exercitationem adipisci, ut, possimus cupiditate labore eum impedit.</p>
				</div>
				<div class="col-4-sm">
					<img src="images/YellowOrangeBlob.svg" class="img-fluid" alt="Yellow and orange blob shapes.">
				</div>
			</div>
		</div>
	</section>

	<!-- Link to games -->
	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<H2 class="mb-5">Download the game here</H2>
				</div>
			</div>
			<!-- Group the cards with space around -->
			<div class="row justify-content-around">
				<!-- One column with a card -->
				<div class="col-4">
					<div class="card shadow-radius text-center">
						<img class="card-img-top" src="images/YellowOrangeBlob.svg" alt="A yellow and orange blob picture.">
						<div class="card-body">
							<h4 class="card-title">Google Play Store</h4>
							<p class="card-text">If you want to play Number Drop on your mobile you can get it from the Google Play Store. Just click the button below and it'll take you there.</p>
							<a class="btn btn-primary" href="https://play.google.com/store/apps/details?id=com.DeejPotter.NumberDrop">Play on mobile</a>
						</div>
					</div>
				</div>
				<!-- One column with a card -->
				<div class="col-4">
					<div class="card shadow-radius text-center">
						<img class="card-img-top" src="images/YellowOrangeBlob.svg" alt="A yellow and orange blob picture.">
						<div class="card-body">
							<h4 class="card-title">Title</h4>
							<p class="card-text">Text</p>
							<a class="btn btn-primary" href="#" role="button">Play on Game Jolt</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Maybe contact section -->


</main>

<?php include "./templates/footer.php" ?>