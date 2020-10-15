var form_order = document.querySelector("#form_order");

form_order.onsubmit = function(sobitye) {
	sobitye.preventDefault();
	console.dir(form_order.querySelector("input[email='email']"))

	var data = "form_order=1" +
				"&email=1" +
				"&name=1" +
				"&price=1"

	// var ajax = new XMLHttpRequest();
	// 	ajax.open("POST", form_order.action, false);
	// 	ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	// 	ajax.send("form_order=1&email=1&name=1&price=1");
}