var form_order = document.querySelector("#form_order");

form_order.onsubmit = function(sobitye) {
	sobitye.preventDefault();
	var email = form_order.querySelector("input[name='email']");
	var name = form_order.querySelector("input[name='name']");
	var price = form_order.querySelector("input[name='price_order']");

	console.dir(price);
	var date = "form_order=1" +
				"&email=" + email.value +
				"&name=" + name.value +
				"&price_order=" + price.value;

	var ajax = new XMLHttpRequest();
		ajax.open("POST", form_order.action, false);
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send(date);

		if(ajax.response == 3) {
			alert("Заполните все поля");
		} else if(ajax.response == 2 ) {
			alert("Ошибка, попробуйте ещё раз");
		} else if(ajax.response == 1) {
			alert("Заказ оформлен");
		}

}