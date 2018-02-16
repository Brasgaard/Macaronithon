// JavaScript Document
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
            	"Bull": 150,
            	"Tyrannotitan": 200,
            	"Tiger": 180,
            	"Bieber": 500
            };
            console.log(values[value]);
            if (values[value] > pizza) {
                console.log('we beat the pizza');
                console.log(value);
                document.getElementById('image').src = "images/" + value + ".png";
				document.getElementById('post').innerHTML = "You lost against" + ' ' + value;
				document.getElementById('c').classList.remove("none");
				setTimeout(function(){
				document.getElementById('c').classList.add('none');
				},5000);
             }
            else {
                console.log(value);
				document.getElementById('post').innerHTML = "You won against" + ' ' + value;
                document.getElementById('image').src = "images/" + value + ".png";
				if (!document.getElementById('c').classList.contains('none')){
					document.getElementById('c').classList.add('none');
				}
				else {}
            }
            
        }




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