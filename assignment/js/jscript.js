//take element
var keyword = document.getElementById('keyword');
var searchbutton = document.getElementById('searchbutton');
var container = document.getElementById('container');

//add event when keyup
keyword.addEventListener('keyup', function(){

	//create ajax object
	var xhr = new XMLHttpRequest();

	//check if ajax is ready
	xhr.onreadystatechange = function(){
		if (xhr.readyState == 4 && xhr.status == 200) {
			container.innerHTML = xhr.responseText;
		}
	}

	//ajax execution
	xhr.open('GET','ajax/products.php?keyword='+keyword.value, true);
	xhr.send();

});