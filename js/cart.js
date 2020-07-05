let carts = document.querySelectorAll('.add-cart');

let cartCost = 0;

let products = [];

onLoadCartNumbers();
// displayCart();


for (let i = 0; i < carts.length; i++) {
	carts[i].addEventListener('click', () => {
		var selectedColor = [];

		if($("input[name='shop-sizes[]']:checked").length < 1){
			alertify.error('Please select size to add item in cart');
			return;
		}

		if($("input[name='shop-colors[]']:checked").length < 1){
			alertify.error('Please select color to continure');
			return;
		}
		

		$.each($("input[name='shop-colors[]']:checked"), function() {
			selectedColor.push($(this).val());
		});
		$.each($("input[name='shop-sizes[]']:checked"), function() {
			products[i].size = $(this).val();
		});

		selectedColor.forEach(function (color) {
			products[i].color = color;
			cartNumbers(products[i]);
			totalCost(products[i]);
		})

		var count = localStorage.getItem('cartNumbers');
		alertify.success('Product Added, You have ' + count + ' Items in your cart', 5);
	});
}

function updateProductColor(productID) {
	var cartItems = localStorage.getItem('productInCart');
	cartItems = JSON.parse(cartItems);
	Object.values(cartItems).map(item => {
		if (item.product_id == productID) {
			var color = [];
			var colors = document.getElementsByName("shop-colors[]");
			for (var i = 0; i < colors.length; i++) {
				if (colors[i].checked)
					color.push(colors[i].value);
			}
			item.color = color;

			var sizes = document.getElementsByName("shop-sizes[]");
			var size = [];
			for (var j = 0; j < sizes.length; j++) {
				if (sizes[j].checked)
					size.push(sizes[j].value);
			}
			item.size = size;
		}
	});
	localStorage.setItem("productInCart", JSON.stringify(cartItems));
}

function updateProduct(product) {
	products = product;
}

function clearCart() {
	localStorage.removeItem('cartNumbers');
	localStorage.removeItem('cartCost');
	localStorage.removeItem('productInCart');
}

function onLoadCartNumbers() {
	let productNumbers = localStorage.getItem('cartNumbers');
	if (document.querySelector('.number')) {
		document.querySelector('.number').textContent = productNumbers;
	}
}

function cartNumbers(product) {
	let productNumbers = localStorage.getItem('cartNumbers');
	productNumbers = parseInt(productNumbers);
	if (productNumbers) {
		localStorage.setItem('cartNumbers', productNumbers + 1);
		document.querySelector('.number').textContent = productNumbers + 1;
	} else {
		localStorage.setItem('cartNumbers', 1);
		document.querySelector('.number').textContent = 1;
		document.querySelector(".number").style.color = "white";
	}
	setItems(product);
}

function setItems(product) {

	let cartItems = localStorage.getItem('productInCart');
	cartItems = JSON.parse(cartItems);
	if (cartItems != null) {
		var flag = false
		Object.values(cartItems).map(item => {
			if (item.product_id == product.product_id && item.size == product.size && item.color == product.color) {
				item.inCart += 1;
				flag = true;
			}
		});
		// If product is not available in cart
		if (!flag) {
			product.inCart = 1;
			cartItems.push(product);
		} else
			flag = false;
	} else {
		cartItems = [];
		product.inCart = 1;
		cartItems.push(product);
	}
	localStorage.setItem("productInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
	cartCost = localStorage.getItem("cartCost");
	if (cartCost == null)
		cartCost = 0;
	cartCost = parseFloat(cartCost) + parseFloat(product.discounted_price);
	localStorage.setItem("cartCost", cartCost);
	return false;
}


function removeItemFromCart(productID) {
	var cartItems = localStorage.getItem("productInCart");
	var cartNumbers = 0;
	var cartCost = 0;


	cartItems = JSON.parse(cartItems);
	cartItems.splice(productID, 1);
	if (cartItems.length > 0) {
		localStorage.setItem("productInCart", JSON.stringify(cartItems));

		Object.values(cartItems).map(item => {
			cartNumbers = cartNumbers + item.inCart;
			cartCost = cartCost + (item.discounted_price * item.inCart);
		});
		localStorage.setItem("cartNumbers", cartNumbers);
		localStorage.setItem("cartCost", cartCost);

		return false;
	} else {
		localStorage.removeItem('cartNumbers');
		localStorage.removeItem('cartCost');
		localStorage.removeItem('productInCart');
	}
}

function updateProductCount(key, number) {

	var cartNumbers = 0
	let quantity = document.querySelector(".quantity" + key);
	var cartItems = localStorage.getItem("productInCart");
	var cartItems = JSON.parse(cartItems);
	var totalQuantity = parseInt(quantity.value) + number
	cartItems[key].inCart = totalQuantity;

	localStorage.setItem("productInCart", JSON.stringify(cartItems));
	quantity.setAttribute("value", totalQuantity);

	var totalCost = document.getElementById("cost" + key);
	var pps = document.getElementById("pps" + key);
	totalCost.innerHTML = parseInt(cartItems[key].inCart) * parseInt(pps.innerHTML);

	Object.values(cartItems).map(item => {
		cartNumbers = cartNumbers + item.inCart;
	});

	if (document.querySelector('.number')) {
		document.querySelector('.number').textContent = cartNumbers;
	}
	localStorage.setItem("cartNumbers", cartNumbers);

	if (totalQuantity == 1) {
		document.getElementsByClassName("quantity" + key)[0].parentElement.getElementsByTagName("button")[0].disabled = true;
	} else {
		document.getElementsByClassName("quantity" + key)[0].parentElement.getElementsByTagName("button")[0].disabled = false;
	}
	calculateCost();
}

function displayCart() {
	var cartItems = localStorage.getItem("productInCart");
	cartItems = JSON.parse(cartItems);

	let cartQuantity = document.querySelector(".cartQuantity");
	let totalQuantity = 0;
	if (cartItems != null)
		Object.values(cartItems).map(item => totalQuantity += parseInt(item.inCart));

	if (cartQuantity != null)
		cartQuantity.innerHTML += '<h4> Your shopping cart contains: ' + totalQuantity + ' products</h4>';

	let productContainer = document.querySelector(".products-container");
	let cartTotal = 0;
	var i = 0;
	if (cartItems != null) {
		Object.values(cartItems).map(abc => {
			quantityTotal = abc.inCart;
			if (productContainer != null) {
				
				var image = '<td class="product-thumbnail"><a href="product_detail.php?token=' + abc.product_id + '"><img src="images/product/children/' + abc.collection + '/' + abc.category + '/' + abc.imgName + '" alt=" " class="img-responsive img-fluid"></a></td>';
				var productName = '<td class="product-name"><h2 class="h5 text-black">' + abc.name + '</h2></td>';
				var size = '<td>' + abc.size + '</td>';
				var productColor = '<td> ' + abc.color.charAt(0).toUpperCase() + abc.color.slice(1) + '</td>';

				var minusButton = '<td><div class="input-group" style="max-width: 120px;"><div class="input-group-prepend"><button class="btn btn-sm btn-outline-primary " type="button" onclick="updateProductCount(' + i + ', -1)">&minus;</button></div>';
				var totalQuantity = '<input type="text" class="form-control text-center quantity' + i + '" value="' + abc.inCart + '" style=" background-color: white; " readonly>';
				var plusButton = '<div class="input-group-append"><button class="btn btn-sm btn-outline-primary " type="button" onclick="updateProductCount(' + i + ', 1)">&plus;</button></div></div></td>';

				$.ajax({
					data: {
						"size": abc.product_id + "-" + abc.size
					},
					url: "ajax.php",
					type: 'POST',
					async: false,
					success: function (data) {
						console.log(data);
						data=  JSON.parse(data);
						var totalPrice = parseInt(data.price_per_item) * parseInt(data.items_per_set);
						abc.price_per_set = totalPrice;
					}
				});

				var pricePerSet = '<td id="pps' + i + '">' + abc.price_per_set + "" + '</td>';
				var gst = '<td>' + abc.gst + '</td>';
				cartTotal = cartTotal + (parseInt(abc.price_per_set) * parseInt(abc.inCart));
				var Cost = '<td id=cost' + i + '>' + parseInt(abc.price_per_set) * parseInt(abc.inCart) + '</td>';
				var deleteButton = '<td><div><button onClick ="removeItemFromCart(' + i + ')" class="remove_item btn btn-primary height-auto btn-sm"><span class="icon-remove"></span></button></div></td>';

				productContainer.innerHTML += '<tbody><tr>' + image + productName + size + productColor + minusButton + totalQuantity + plusButton + pricePerSet + gst + Cost + deleteButton + '</tr></tbody>';
				if (document.querySelector(".quantity" + i).value == 1) {
					document.getElementsByClassName("quantity" + i)[0].parentElement.getElementsByTagName("button")[0].disabled = true;
				} else {
					document.getElementsByClassName("quantity" + i)[0].parentElement.getElementsByTagName("button")[0].disabled = false;
				}
			}
			// cartTotal = cartTotal + productTotal;
			i = i + 1;
		});
		localStorage.setItem("productInCart", JSON.stringify(cartItems));
		productContainer.innerHTML += '<tbody><tr><td colspan="7"><b>Total (Rs.)(Excluding GST)</b></td><td id="total" colspan="2">' + cartTotal + '</td></tr></tbody>';
		localStorage.setItem("cartCost", cartTotal);
	}
}

function calculateCost() {
	var cartItems = localStorage.getItem("productInCart");
	cartItems = JSON.parse(cartItems);
	var cartTotal = 0
	Object.values(cartItems).map(item => {
		cartTotal = cartTotal + (parseInt(item.price_per_set) * parseInt(item.inCart))
	});
	document.getElementById("total").innerHTML=cartTotal;

	localStorage.setItem("cartCost", cartTotal);
}