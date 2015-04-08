$(function () {
	$('.container').on('click', '.sort-by', function () {
		var sortBy = $(this).data('sort-by');
		$('.sort-by').removeClass('btn-primary');
		$('.sort-by[data-sort-by="'+ sortBy +'"').addClass('btn-primary');
		$('.alert').html('').removeClass('alert-danger');
		$.ajax({
			url: '/request.php',
			data: 'sortBy=' + sortBy,
			method: 'GET',
			dataType: 'json',
			error: function (err) {
				$('.alert').html('Error Processing').addClass('alert-danger');
				$('#result').html('');
			},
			success: function (response) {
				$('#result').html('');
				response.forEach(function (data) {
					$('#result').append('<tr>' +
						'<td>' + data.name + '</td>' +
						'<td>' + data.height + '</td>' +
						'<td>' + data.gender + '</td>' +
						'<td>' + data.birthdate + '</td>' +
						'</tr>');
				});
			}
		});
	});

	$('.sort-by[data-sort-by="lastName"]').trigger('click');
});