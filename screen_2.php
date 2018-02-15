<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>
		
<main class="mainArea2">

	<section class="mainArea2--pizza">

		<article class="pizza--topbar">
			<h1 class="pizza--topbar-heading">Your Power Meal is:</h1>
		</article>

		<article class="pizza--sidebarleft"></article>

		<article class="pizza--article">
			<h1 class="pizza--article-heading" id="mealHead">Pizza</h1>
			<p class="pizza--article-paragraph" id="mealParagraph">Pizza is a traditional Italian meal, where a bunch of second-class rubbish is layed out onto a flatbread. It consists of: 45% of fats, 35% of carbs and 20% of proteins.</p>
		</article>
<canvas id='c' class="none"></canvas>

		<aside class="pizza--aside">
			<img class="pizza--aside-img" id="mealImg" src="images/pizza.png" alt="Pizza">
		</aside>

		<article class="pizza--sidebarright"></article>

	</section>



	<section class="mainArea2--predators">
		
		<article class="predators--topbar">
			<h1 class="predators--topbar-heading">Choose Your Predator</h1>
			
			<form class="predators--topbar-form">
				<select class="topbar-form-select" name="predator" id="predator">
					<option class="inputPredator" value="">Select ...</option>
					<option class="inputPredator" name="bull" value="bull" data-list="bull"><span>bull</span></option>
					<option class="inputPredator" name="tyrannotitan" value="tyrannotitan" data-list="tyrannotitan"><span>tyrannotitan</span></option>
					<option class="inputPredator" name="bieber" value="bieber" data-list="bieber"><span>bieber</span></option>
					<option class="inputPredator" value="tiger" data-list="tiger"><span>tiger</span></option>
				</select>

			<button class="submitPredator"><span>Go!</span></button>
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

</main>

<script
  src="http://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous">	
</script>


<script src="js/style.js" type="text/javascript"></script>
<script src="js/blood.js" type="text/javascript"></script>


<script src="js/setmeal.js" type="text/javascript"></script>


  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>

<script>
	document.querySelector('#predator').onchange = changeEventHandler;
	function changeEventHandler() {
            // if nothing has been selected:
            var value = event.target.value;

            var pizza = 185;
            var bull = 150;
            var tiger = 180;
            var tyrannotitan = 200;
            var bieber = 500;
            var values = {
            	"bull": 150,
            	"tyrannotitan": 200,
            	"tiger": 180,
            	"bieber": 500
            }
            console.log(values[value]);
            if (values[value] > pizza) {
                console.log('we beat the pizza');
                console.log(value);
                document.getElementById('image').src = "images/" + value + ".png";
                $('#post').text("you have lost against" + ' ' + value );
				document.getElementById('c').classList.remove("none");
				
             }
            else {
                console.log(value);
                $('#post').text("you have won against" + ' ' + value);
                document.getElementById('image').src = "images/" + value + ".png";
            }
            
        }
</script>

<?php include 'includes/footer.php'; ?>