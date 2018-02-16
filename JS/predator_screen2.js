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