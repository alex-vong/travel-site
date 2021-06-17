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
			<?php include('spotlight.php')?>
			
		</div>
	</section>

	<section class="deals-section cta-2">
		<div class="inner-column">
			<?php include('cta-2.php')?>
		</div>
	</section>



<footer>
	<section class="call-to-action">
		<div class="inner-column">
			<section class="cta-module">
				<h2>This is the site footer and it has a &#34;site-map&#34; module in it</h2>
				<p class="supporting-text">
					Pretty standard type of thing, right?
				</p>
		
			</section>
		</div>
	</section>

	<section class="footer-menu-options">
		<div class="inner-column">

			<div class="footer-menu-item">
				<a href="#">Logo</a>
				<a href="#">Some page</a>
				<a href="#">Some other page</a>			
			</div>

			<div class="footer-menu-item">
				<a href="#">Sign-in</a>
			</div>

			<div class="footer-menu-item">
				<a href="#">Legal thing a</a>
				<a href="#">Legal thing a</a>
			</div>

			<div class="footer-menu-item">
				<a href="#">Social thing a</a>
				<a href="#">Social thing b</a>
				<a href="#">Social thing c</a>
				<a href="#">Social thing d</a>
			</div>
		</div>
	</section>
</footer>


</body>
</html>