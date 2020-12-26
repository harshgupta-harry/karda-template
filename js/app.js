
$(document).ready(function () {
	$(document).on("click", ".enquiry", function () {
		var projectSlug = $(this).data('id');
		console.log(projectSlug);
		$(".modal-body #projectSlug").val( projectSlug );
	});

	$('#submitEnquiryForm').submit(function(e)
	{
		$form = $(this);
		$.ajax({
			type: "POST",
			url: './submitEnquiry.php',
			data: $form.serialize() + '&action=enquiryForm',
			beforeSend: function () {
				$('.submitBtn').attr("disabled","disabled");
				$('.modal-body').css('opacity', '.5');
			},
			success: function(data)
			{
				
				toastr.options = {
				  "closeButton": true,
				  "debug": false,
				  "newestOnTop": false,
				  "progressBar": true,
				  "positionClass": "toast-top-right",
				  "preventDuplicates": false,
				  "onclick": null,
				  "showDuration": "300",
				  "hideDuration": "1000",
				  "timeOut": "5000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}
				var $response = $.parseJSON(data);
				if($response.result == 'success')
				{
					toastr["success"]("Enquiry sent successfully.", "Success");
				}
				else{
					toastr["error"]("Sorry there was an error sending your form..", "Error");
				} 
			}
		});
	});
	
	$(document).on("click", ".brouchure", function () {
		var projectSlug = $(this).data('id');
		console.log(projectSlug);
		$(".modal-body #projectSlug").val( projectSlug );
	});

	$('#submitEbrouchureForm').submit(function(e)
	{
		$form = $(this);
		var loginWindow = window.open('', 'UserLogin');
		//e.preventDefault();
		$.ajax({
			type: "POST",
			url: './submitEnquiry.php',
			data: $form.serialize() + '&action=ebrouchureForm',
			beforeSend: function () {
				$('.submitBtn').attr("disabled","disabled");
				$('.modal-body').css('opacity', '.5');
			},
			success: function(data)
			{				
				var $response = $.parseJSON(data);
				toastr.options = {
				  "closeButton": true,
				  "debug": false,
				  "newestOnTop": false,
				  "progressBar": true,
				  "positionClass": "toast-top-right",
				  "preventDuplicates": false,
				  "onclick": null,
				  "showDuration": "500",
				  "hideDuration": "2000",
				  "timeOut": "6000",
				  "extendedTimeOut": "2000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}
				if($response.result == 'success')
				{
					toastr["success"]("Information saved successfully.", "Success");
					loginWindow.location.href = $response.brochureLink;
				}
				else{
					toastr["error"]("Sorry there was an error sending your form..", "Error");
					loginWindow.document.body.innerHTML = '<p><b>Error!</b> &nbsp;Sorry there was an error sending your form..</p>';

				} 
			}
		});
	});
});