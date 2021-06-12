<?php include('head.php')?>


<body>

	<section class="navigation">
		<div class="inner-column">
			<?php include('masthead.php')?>
		</div>
	</section>


	<section id="welcome-page" class="welcome-page">
		<div class="inner-column">
			<!-- landing-page -->
			<section class="landing-page">
				<picture>
					<img src="images/main-hero.png" alt="">
				</picture>

				<section class="search-engine">
					<?php include('search-engine-heading.php')?>

					<div class="input-field">
						<?php include('destination-input.php')?>	
  					</div>
				</section>
			</section>
		</div>
	</section>

	<section class="deals-section">
		<div class="inner-column">
			<?php include('deals.php')?>
		</div>
	</section>

	<section class="spotlight">
		<div class="inner-column">
			<section class="spotlight-text">
				<h2 class="site-logo">
					You're next journey begins here
				</h2>
				<p class="support-text">In the Spotlight</p>
			</section>

			<section class="destination-grid">
				<div class="city tokyo">
					<picture>
						<img src="images/tokyo-tower.jpeg" alt="">
					</picture>
					<div class="city-text">
						<h3 class="site-logo">Tokyo</h3>
						<a href="" class="button">Book Now</a>
					</div>
				</div>

				<div class="city paris">
					<picture>
						<img src="images/paris-night.png" alt="">
					</picture>
					<div class="city-text">
						<h3 class="site-logo">Paris</h3>
						<a href="" class="button">Book Now</a>
					</div>
				</div>

				<div class="city shanghai">
					<picture>
						<img src="images/china.jpeg" alt="">
					</picture>
					<div class="city-text">
						<h3 class="site-logo">Shanghai</h3>
						<a href="" class="button">Book Now</a>
					</div>
				</div>

				<div class="city sf">
					<picture>
						<img src="images/sf-bay.jpeg" alt="">
					</picture>
					<div class="city-text">
						<h3 class="site-logo">San Francisco</h3>
						<a href="" class="button">Book Now</a>
					</div>
				</div>

				<div class="city new-york">
					<picture>
						<img src="images/new-york.jpeg" alt="">
					</picture>
					<div class="city-text">
						<h3 class="site-logo">New York</h3>
						<a href="" class="button">Book Now</a>
					</div>
				</div>

				<div class="city london">
					<picture>
						<img src="images/big-ben.jpeg" alt="">
					</picture>
					<div class="city-text">
						<h3 class="site-logo">London</h3>
						<a href="" class="button">Book Now</a>
					</div>
				</div>
			</section>

			
		</div>
		
	</section>




</body>
</html>