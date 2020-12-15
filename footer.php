    <section class="partners wow fadeInDown" data-wow-delay="0.3s">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <ul class="partners-list">

                        <li><img src="images/axis.png"></li>

                        <li><img src="images/dhfl.png"></li>

                        <li><img src="images/hdfc.png"></li>

                        <li><img src="images/bull.png"></li>

                        <li><img src="images/reli.png"></li>

                    </ul>

                </div>

            </div>

        </div>

    </section>

    <!-- partner details -->

    <section class="footer">

        <div class="container">

            <div class="row">

                <div class="col-12 col-lg-4 wow fadeInDown" data-wow-delay="0.3s">

                    <div class="foot-logo">

                        <img src="images/foot-logo.png" class="w-100">

                    </div>

                    <p>KBPL was incorporated under the Companies Act, 1956 as Karda Buildcon Private Limited on 7th January, 2014 in the state of Maharashtra. Its registered office is situated at Shop No. UG 109, Dreams -The Mall, LBS Marg, Bhandup (W), Mumbai - 400078.</p>

                </div>

                <div class="col-12 col-sm-6 col-lg-2 wow fadeInDown" data-wow-delay="0.5s">

                    <ul>

                        <li><a href="#">Home</a></li>

                        <li><a href="#">Company Profile</a></li>

                        <li><a href="#">Key Person</a></li>

                        <li><a href="#">Vision & Mission</a></li>

                    </ul>

                </div>

                <div class="col-12 col-sm-6 col-lg-2 wow fadeInDown" data-wow-delay="0.7s">

                    <ul>

                    <li><a href="featured-project.php?status=Ongoing">Ongoing Projects</a></li>
                        <li><a href="featured-project.php?status=Upcoming">Upcoming Projects</a></li>
                        <li><a href="featured-project.php?status=Completed">Completed Projects</a></li>

                    </ul>

                </div>

                <div class="col-12 col-lg-4 wow fadeInDown" data-wow-delay="0.9s">

                    <div class="foot-contact">

                        <h4>Contact Info.</h4>

                        <a href="tel:+91-8554994757" class="mobile">+91-8554994757</a>

                        <a href="mailto:enquirekarda@gmail.com" class="email"> enquirekarda@gmail.com</a>

                        <address>2nd floor ,Gulmohar Status,Mahatma Nagar, samarth Nagar ,Nashik-422005 (M.S),India.</address>

                    </div>

                </div>

                <div class="col-12 wow fadeInDown" data-wow-delay="1.2s">

                    <div class="copy">

                        <p>© 2020 Karda Construction. All Rights Reserved.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- footer -->

    <!-- Modal -->
    <div class="modal fade" id="quickInquery" tabindex="-1" role="dialog" aria-labelledby="quickInqueryLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="quickInqueryLabel">Quick enquiry</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body get-in-touch mb-0">

                    <form class="form-wrap" method="POST" id="submitEnquiryForm">

                        <div class="row">

                            <div class="col-12 col-md-6">

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <i class="far fa-user"></i>

                                    </div>

                                    <input type="text" class="form-control" placeholder="Name *" id="name" name="name" required>

                                </div>

                            </div>

                            <div class="col-12 col-md-6">

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <i class="fas fa-phone fa-flip-horizontal"></i>

                                    </div>

                                    <input type="number" class="form-control" placeholder="Contact Number *" id="contact_number" name="contact_number" required maxlength="10">

                                </div>

                            </div>

                            <div class="col-12 col-md-6">

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <i class="far fa-envelope"></i>

                                    </div>

                                    <input type="email" class="form-control" placeholder="Email Address *" id="email" name="email" required>

                                </div>

                            </div>

                            <div class="col-12 col-md-6">

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <i class="fas fa-home"></i>

                                    </div>

                                    <select class="custom-select form-control"  id="requirement" name="requirement" required>

                                        <option value="" selected>Requirement</option>

                                        <option value="1">One</option>

                                        <option value="2">Two</option>

                                        <option value="3">Three</option>

                                    </select>

                                </div>

                            </div>

                            <div class="col-12">

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <i class="far fa-comment"></i>

                                    </div>

                                    <textarea type="textarea" rows="4" class="form-control" placeholder="Message"  id="message" name="message" required></textarea>

                                </div>

                            </div>

                            <div class="col-12 text-center">
								<input type="hidden" id="projectSlug" value="" name="projectSlug" />
                                <button type="submit" class="button" >Submit</button>

                            </div>

                        </div>

                    </form>
					<div id="success_message" style="width:100%; height:100%; display:none; ">
							<h5>Enquiry sent successfully!</h5>
					</div>
					<div id="error_message"
					style="width:100%; height:100%; display:none; ">
						<h5>Error</h5>
						Sorry there was an error sending your form.

					</div>
				
                </div>

            </div>

        </div>

    </div>

    <!-- Modal -->

    <div class="modal fade" id="ebrouchure" tabindex="-1" role="dialog" aria-labelledby="ebrouchureLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="ebrouchureLabel">Request E-Brouchure</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body get-in-touch mb-0">

                    <form class="form-wrap">

                        <div class="row">

                            <div class="col-12 col-md-6">

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <i class="far fa-user"></i>

                                    </div>

                                    <input type="text" class="form-control" placeholder="Name *">

                                </div>

                            </div>

                            <div class="col-12 col-md-6">

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <i class="fas fa-phone fa-flip-horizontal"></i>

                                    </div>

                                    <input type="text" class="form-control" placeholder="Contact Number *">

                                </div>

                            </div>

                            <div class="col-12 col-md-6">

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <i class="far fa-envelope"></i>

                                    </div>

                                    <input type="text" class="form-control" placeholder="Email Address *">

                                </div>

                            </div>

                            <div class="col-12 col-md-6">

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <i class="fas fa-home"></i>

                                    </div>

                                    <select class="custom-select form-control">

                                        <option selected>Requirement</option>

                                        <option value="1">One</option>

                                        <option value="2">Two</option>

                                        <option value="3">Three</option>

                                    </select>

                                </div>

                            </div>

                            <div class="col-12">

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <i class="far fa-comment"></i>

                                    </div>

                                    <textarea rows="4" class="form-control" placeholder="Username"></textarea>

                                </div>

                            </div>

                            <div class="col-12 text-center">

                                <button type="submit" class="button">Submit</button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!-- Modal -->

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/1.10.2-jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    <script src="js/jquery.counterup.js"></script>

    <script>

    jQuery(document).ready(function($) {

        $('.counter').counterUp({

            delay: 20,

            time: 1000

        });

    });

    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>

    <script src="js/slick.js"></script>

    <script src="css/mobile-menu/jquery.meanmenu.min.js"></script>

    <script src="js/wow.min.js"></script>

    <script src="js/lightgallery-all.min.js"></script>

    <script src="js/jquery.mousewheel.min.js"></script>

    <script src="js/custom.js"></script>
	<script>
	
	$(document).ready(function () {
		$(document).on("click", ".enquiry", function () {
			var projectSlug = $(this).data('id');
			console.log(projectSlug);
			$(".modal-body #projectSlug").val( projectSlug );
		});

		$('#submitEnquiryForm').submit(function(e)
		{
			e.preventDefault();
			
			$form = $(this);
			$.ajax({
				type: "POST",
				url: './submitEnquiry.php',
				data: $form.serialize(),
				beforeSend: function () {
					$('.submitBtn').attr("disabled","disabled");
					$('.modal-body').css('opacity', '.5');
				},
				success: function(data)
				{
					var $response = $.parseJSON(data);
					if($response.result == 'success')
					{
						$($form).hide();
						 $('#success_message').show();
						$('#error_message').hide();
					}
					else{
						$($form).hide();
						$('#success_message').hide();
						$('#error_message').show(); 
					}
				}
			});

		});
		$('#quickInquery').on('hidden.bs.modal', function () {
			location.reload();
		})
	});
	</script>
	
	
</body>



</html>