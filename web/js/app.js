$( document ).ready(function() {
	$('body').on('submit', '.addcart', function(e) {
		e.preventDefault();

		$.ajax({
			url: $(this).attr("action"),
			type: $(this).attr("method"),
			data: $(this).serialize(),
			cache: false,
			beforeSend: function () {
				
			},
			success: function(response) {
				// console.log(response);
				$('#simpleCart_quantity').html(response.cartItemTotal);	
				$('#simpleCart_total').html(response.cartPriceTotal);
				$('.addedToCart').show();
				setTimeout(function() {
					$('.addedToCart').hide("slow");
				}, 1500);
			},
			error: function(xhr, status, error) {
				
			}
		});
	});
});