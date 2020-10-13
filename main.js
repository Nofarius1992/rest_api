var form_order = document.querySelector("#form_order");

form_order.onsubmit = function(sobitye) {
	console.dir(sobitye);
	sobitye.preventDefaul();
}