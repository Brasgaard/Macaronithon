// JavaScript Document
function onPgLoad() {
	var rtrMeal = localStorage.getItem("meal");
	var mealImage = document.getElementById("mealImg");
	if (rtrMeal === "pizza") {
		document.getElementById("mealHead").innerHTML = "Pizza";
		document.getElementById("mealParagraph").innerHTML = "Pizza is a traditional Italian meal, where a bunch of second-class rubbish is layed out onto a flatbread. It consists of: 45% of fats, 35% of carbs and 20% of proteins.";
		mealImage.src = "images/pizza.png";
	} else if (rtrMeal === "cheeseburger") {
		document.getElementById("mealHead").innerHTML = "Cheeseburger";
		document.getElementById("mealParagraph").innerHTML = "The greatest creation. All the major food groups combined together into one perfect dish. It contains: 35% fat, 40% carbs and 25% protein.";
		mealImage.src = "images/cheeseburger.png";
	} else if (rtrMeal === "caesar salad") {
		document.getElementById("mealHead").innerHTML = "Caesar Salad";
		document.getElementById("mealParagraph").innerHTML = "Wanna act like you're eating right but can't stand eating an actual salad. Well, look no further. It contains: 50% fat, 35% carbs and 15% protein.";
		mealImage.src = "images/caesarsalad.png";
	} else if (rtrMeal === "club sandwich") {
		document.getElementById("mealHead").innerHTML = "Club Sandwich";
		document.getElementById("mealParagraph").innerHTML = "The next evolution of the sandwich we all know and love (note the third bread slice). Obtain the Plain Badge from Goldenrod City to train it further. It contains: 10% fat, 50% carbs and 40% protein.";
		mealImage.src = "images/clubsandwich.png";
	} else if (rtrMeal === "tomato soup") {
		document.getElementById("mealHead").innerHTML = "Tomato Soup";
		document.getElementById("mealParagraph").innerHTML = "Main ingredient: tomatoes. Other ingredients: You're probably better off not knowing. Seriously, don't think too much about it. It contains: 10% fat, 55% carbs and 35% protein.";
		mealImage.src = "images/tomatosoup.png";
	} else {
		alert("Error. No meal data found");
		console.log("No data found!");
	}
}

window.onload = onPgLoad();