function adaugaElementeInLista(){
	var listElement = document.getElementById("lista");
	var items = listElement.getElementsByTagName("li");
	var t = 2000;

	for(var i = 1; i< items.length; i++){
		console.log(items[i])
		delay(items[i], items[i-1], t)
		console.log(t)
		t = t + 2000	
	}
}

function delay(item1, item2, t) {

		setTimeout(function () {
			item1.style.visibility='visible';
			item2.style.visibility='hidden'
		}, t)
}
