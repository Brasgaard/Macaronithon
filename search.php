<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>
<canvas id='c' class="none"></canvas>
	<article class="search--box">

		<div class="search--sidebarleft"></div>

		<div class="search--centerbar">
	<form>
		<h3 class="searchBlock--1">Input your own data, then choose a predator to compete against</h3>
		<h4 class="searchBlock--2">Values can range from 1-100</h4>
		<div class="input--tile">

		<input type="number" id="fat" class="searchBlock searchBlock__input" placeholder="Fats">
		</div>
		<div class="input--tile">

		<input type="number" id="carbs" class="searchBlock searchBlock__input" placeholder="Carbs">
		</div>
		<div class="input--tile">

		<input type="number" id="protein" class="searchBlock searchBlock__input" placeholder="Proteins">
		</div>
	</form>
		</div>
		<div class="search--sidebarright"></div>
	</article>


		<section class="mainArea2--predators">

		<article class="predators--topbar">
			<h1 class="predators--topbar-heading">Choose Your Predator</h1>

			<form class="predators--topbar-form">
				<select class="topbar-form-select" name="predator" id="predator">
					<option class="inputPredator" value="">Select ...</option>
					<option class="inputPredator" name="Bull" value="Bull" data-list="Bull"><span>Bull</span></option>
					<option class="inputPredator" name="Tyrannotitan" value="Tyrannotitan" data-list="Tyrannotitan"><span>Tyrannotitan</span></option>
					<option class="inputPredator" name="Justin Bieber" value="Justin_Bieber" data-list="Justin Bieber"><span>Justin Bieber</span></option>
					<option class="inputPredator" value="Tiger" data-list="Tiger"><span>Tiger</span></option>
				</select>

			</form>
		</article>


		<article class="predators--sidebarleft">
			<img id="image" src="">
		</article>

		<article class="predators--center">
			<h1 id="post"> </h1>
		</article>

		<article class="predators--sidebarright">
			<img id="humanrun" src="images/humanrun.png">
		</article>
	</section>


	</script>
	<script src="js/choose_predator.js" type="text/javascript"></script>
	<script src="js/predator.js" type="text/javascript"></script>
	<script src="js/style.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
	<script src="js/blood.js" type="text/javascript"></script>
	<script>
	document.querySelector('#predator').onchange = changeEventHandler;
	function changeEventHandler() {
            // if nothing has been selected:
            var value = event.target.value;

			var fatValue = parseInt(document.getElementById("fat").value);
			var carbValue = parseInt(document.getElementById("carbs").value);
			var proteinValue = parseInt(document.getElementById("protein").value);
			var nutritionTotal = fatValue + carbValue + proteinValue;

            var values = {
            	"Bull": 150,
            	"Tyrannotitan": 200,
            	"Tiger": 180,
            	"Justin_Bieber": 500
            }
            console.log(values[value]);
			if (fatValue > 100 || carbValue > 100 || proteinValue > 100) {
				alert("One of your values is higher than 100. Please change it to something lower");
				document.getElementById('post').innerHTML = "You're not trying to cheat now right? One of your values is a bit too high";
			}
			else if (fatValue < 1 || carbValue < 1 || proteinValue < 1) {
				console.log(nutritionTotal);
				alert("A nutrient value cannot be zero, or less than zero.");
				document.getElementById('post').innerHTML = "A nutrient value cannot be less than one. And don't use that '0% fat' line either. You know it's a scam!";
			}
			else if (isNaN(fatValue) == true || isNaN(carbValue) == true || isNaN(proteinValue) == true) {
				alert("Each field must contain a number value between 1-100");
				document.getElementById('post').innerHTML = "A value can't be left blank. Fill in each field with a value between 1-100."
			}
            else if (values[value] > nutritionTotal) {
                console.log('we beat the pizza');
                console.log(value);
				console.log(nutritionTotal);
                document.getElementById('image').src = "images/" + value + ".png";
                document.getElementById('post').innerHTML = "You lost against" + ' ' + value;
				document.getElementById('c').classList.remove("none");
				setTimeout(function(){
				document.getElementById('c').classList.add('none');
				},5000);
             }
            else {
                console.log(value);
				console.log(nutritionTotal);
                document.getElementById('post').innerHTML = "You won against" + ' ' + value;
                document.getElementById('image').src = "images/" + value + ".png";
				if (!document.getElementById('c').classList.contains('none')){
					document.getElementById('c').classList.add('none');
				}
				else {}
            }

        }
	</script>
</body>

<?php include 'includes/footer.php'; ?>
