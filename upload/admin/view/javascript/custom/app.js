jQuery(document).ready(function($) {
	
	// $('#order-form').on('focus', '#product-id-input', function(){
	// 	$(this).next().dropdown('update');
	// })

	$('[scope="check-all"] input[name="select_all"]').on('change', function(){
		$('[scope="select-this"] input[name="select_this"]').prop('checked', $(this).is(':checked'));
	})

});