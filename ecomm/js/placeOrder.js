window.onload = function () {
	updateProductList();
};

function getProductsInCart() {
	let cartItems = localStorage.getItem('productInCart');

	cartItems = JSON.parse(cartItems);
	var arr = [];
	Object.values(cartItems).map(abc => {
		// console.log(abc);
		arr.push(abc);
	});
	$.post('test.php', {
		'order': JSON.stringify(cartItems)
	}, function () {

	});

	// $.ajax({
	// 	url: "test.php",
	// 	method:"post",
	// 	data: {'order':JSON.stringify(cartItems)},
	// 	function(res){
	// 		console.log(res);
	// 	}
	// });
	// .done(function(data) {
	//            console.log("success");
	//            //alert("hello");
	//            //console.log(data);
	//        })
	// .fail(function() {
	//            console.log("error");
	//        })
}

function updateProductList() {
	let cartItems = localStorage.getItem('productInCart');
	cartItems = JSON.parse(cartItems);
	let place = document.querySelector(".place");
	if (cartItems != null) {
	Object.values(cartItems).map(item => {
		var name = '<td>' + item.name + '</td>';
		var quantity = '<td>' + item.inCart + '</td>';
		var size = '<td>' + item.size + '</td>';
		var color = '<td>' + item.color + '</td>';
		var gst = '<td>' + item.gst + '</td>';
		var price = '<td>' + parseInt(item.price_per_set) * parseInt(item.inCart) + '</td>';
		place.innerHTML += '<tr>' + name + quantity + size + color + gst + price + '</tr>';
	});
	place.innerHTML += '<tr><td colspan="5"><b>Total (Rs) (Excluding GST)  </b></td><td colspan="1"><b> ' + localStorage.getItem("cartCost") + '</b></td></tr>'
}
}