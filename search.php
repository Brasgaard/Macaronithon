<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>

<body>
	
		<h3 class="searchBlock">Input your own data, then choose a predator to compete against</h3>
		<h4<class="searchBlock">Values can range from 0-100</h4>
		<p class="searchBlock searchBlock__p">Fat</p>
		<input type="number" id="fat" class="searchBlock searchBlock__input">
		<p class="searchBlock searchBlock__p">Carbs</p>
		<input type="number" id="carbs" class="searchBlock searchBlock__input">
		<p class="searchBlock searchBlock__p">Protein</p>
		<input type="number" id="protein" class="searchBlock searchBlock__input">
		
		<section class="mainArea2--predators">
		
		<article class="predators--topbar">
			<h1 class="predators--topbar-heading">Choose Your Predator</h1>
			
			<form class="predators--topbar-form"">
				<select class="topbar-form-select" name="predator" id="predator">
					<option class="inputPredator" value="">Select ...</option>
					<option class="inputPredator" name="bull" value="bull" data-list="bull"><span>bull</span></option>
					<option class="inputPredator" name="tyrannotitan" value="tyrannotitan" data-list="tyrannotitan"><span>tyrannotitan</span></option>
					<option class="inputPredator" name="bieber" value="bieber" data-list="bieber"><span>bieber</span></option>
					<option class="inputPredator" value="tiger" data-list="tiger"><span>tiger</span></option>
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
	
	<script
  src="http://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous">	
	</script>
	<script src="js/choose_predator.js" type="text/javascript"></script>
	<script src="JS/style.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
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
            	"bull": 150,
            	"tyrannotitan": 200,
            	"tiger": 180,
            	"bieber": 500
            }
            console.log(values[value]);
			if (fatValue > 100 || carbValue > 100 || proteinValue > 100) {
				alert("One of your values is too high. Please change it to something lower")
				$('#post').text("You're not trying to cheat now right? One of your values is a bit too high");
			}
            else if (values[value] > nutritionTotal) {
                console.log('we beat the pizza');
                console.log(value);
				console.log(nutritionTotal);
                document.getElementById('image').src = "images/" + value + ".png";
                $('#post').text("you have lost");
             }
            else {
                console.log(value);
				console.log(nutritionTotal);
                $('#post').text("you have Won against" + ' ' + value);
                document.getElementById('image').src = "images/" + value + ".png";
            }
            
        }
	</script>
</body>

<?php include 'includes/footer.php'; ?>
