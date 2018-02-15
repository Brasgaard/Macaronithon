	<!-- PHP Include header -->
<?php require 'includes/head.php'; ?>

	<!-- Grid start -->
<main class="main--container">
<div class="grid-container">

	<!-- Header if needed 
	<header>
	</header>
	-->

	<!-- Front page logo/name -->
	<div class="item1">
        <div class="animated zoomIn">
        	<img id="frontlogo" src="images/logotry.png" alt="Logo Macaronithon" title="Logo Macaronithon">
			<p id="fronttext">How far can you run before you get eaten</p>
		</div>
	</div>

	<!-- Search bar -->
	<div class="item2">
		<input onclick="getLowercase()" class="awesomplete inputMeal" placeholder="Search for the meal" data-list="pizza, cheeseburger, caesar salad, club sandwich, tomato soup">
		<button class="submitMeal"><span>Go!</span></button>
	</div>

	<!-- Popup from searchbar-->
	<span class="window--alert none conditionalClose "><p>Unfortunately we don't have your product. Do you want to add it?</p>
		<div class="grid-container--buttons">
			<div class="button button--ok">Ok</div>
			<div class="button button--cancel">Cancel</div>
		</div>
	</span>

	<!-- Pictures of the predator and human -->
	<div class="item3">
        <div class="animated tada">
			<img src="images/predatorrex.png" alt="Predator hunting running human" title="T-rex" class="t-rex">
        </div>
	</div>

	<div class="item4">
        <div class="animated shake">
    		<img src="images/humanrun.png" alt="Human running from predator" title="Human" class="human">
        </div>
	</div>

</div>
</main>

	<!-- Scripts for Macaronithon -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/awesomplete.min.js"></script>
	<script src="js/getmeal.js" type="text/javascript"></script>
	<script src="js/popup.js" type="text/javascript"></script>
	<?php include 'includes/footer.php'; ?>
</body>
</html>