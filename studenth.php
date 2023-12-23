<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

		<title>Request page</title>
		
	</head>

	<style>
		
			body{
				background-color: blue;
			}
			.form-group{
				margin-top: 5px;
			}

			label{
				align-items: left;
				
			}

			@media (min-width: 40em) {
			.btn{
				padding: 7px 135px 7px 133px;
				}
			.pagination {
				margin-right: 440px;
			}
			
      }
	</style>

<body>
	<div class="col-lg-12">
                    <center><h2 class="text-dark" style="margin-top: 45px;">Request Page</h2></center>
					<hr>
		<form class="form-horizontal" method="POST" id="add_form" >
				<div class="container-fluid">
					<div class="row col-md-6 col-md-offset-3">
						<div class="panel panel-succes">
							<div class="panel-body">

					
						<div class="form-group">
							<label style="text-align: left;">Student ID No:</label>
							<input style="text-transform: capitalize;" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="Enter your ID Number" maxlength="7" placeholder="0000000" type="text" name="studentid" id="studentid" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Firstname:</label>
							<input style="text-transform: capitalize;" type="text" name="firstname" id="firstname" placeholder="Enter your Firstname" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Lastname:</label>
							<input style="text-transform: capitalize;" type="text" name="lastname" id="lastname" placeholder="Enter your Lastname" class="form-control" required>
						</div>
						<div class="form-group">
										<label>Email Address:</label>
										<input type="email" name="email" id="email" class="form-control" placeholder="name@gmail.com" required>
									</div>

									<div class="form-group">
										<label>Phone Number:</label>
										<input type="tel" name="phonenum" id="phonenum" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="11" placeholder="Enter your 11-Digit Phone number" class="form-control" required>
									</div>
										<div class="form-group">
										<label>Reason on Requesting:</label>
										<textarea  type="text" name="description" id="description" class="form-control" required></textarea>
									</div>
                            <label>Categories:</label>
                            <select type="text" class="form-control"  name="request">
                            <?php 
                            if($row['request']=='COE'){
                                echo '<option>COG</option>';

                            }
                            else{
                                echo '<option>COE</option>';
                                echo '<option>COG</option>';
                                echo '<option>TOR</option>';
                            }?>
                            </select>
                
							
                        <br>

						
						<div class="form-group">
							<center><input type="submit" style="margin-bottom: 0px;" name="addnew" id="addnew" class="btn btn-primary" value="Send Request"></center>
                           
						</div>
					<center>	<div class="container mt-3">
               
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="rms.php?page=studenth"><</a></li>
									<li class="page-item"><a class="page-link" href="rms.php?page=studenth2">></a></li>
								</ul>
								</div>
								</center>

                        </div>
						<!-- Default (left-aligned) -->

					</form>
				</div>

							</div>
						</div>
					</div>
				</div>




</body>



<script type = "text/javascript">
$(document).ready(function(){
	
	function load_unseen_notification(view = '')
	{
		$.ajax({
			url:"fetch.php",
			method:"POST",
			data:{view:view},
			dataType:"json",
			success:function(data)
			{

			}
		});
	}
 
	load_unseen_notification();
 
	$('#add_form').on('submit', function(event){
		event.preventDefault();
		if($('#firstname').val() != '' && $('#lastname').val() != '' && $('#description').val() != '' && $('#request').val() != ''){
		var form_data = $(this).serialize();
		$.ajax({
			url:"addnew.php",
			method:"POST",
			data:form_data,
			success:function(data)
            
			{
				Swal.fire({
					title: "Sent!",
					text: "Your request has been sent! ",
					icon: "success",
					confirmButtonColor: "#9ADE7B",
					confirmButtonText: "Ok!"
					}).then((result) => {
					if (result.isConfirmed) {
						Swal.fire({
						title: "Please read!",
						text: "Wait for a text message or an email for you to know the details about your request. Thank You!",
						icon: "info"
						});
					}
					});
			$('#add_form')[0].reset();
			load_unseen_notification();
			}
		});
		}
		else{
			alert("Enter Data First");
		}
        
	});
 
	$(document).on('click', '.dropdown-toggle', function(){
	$('.count').html('');
	load_unseen_notification('yes');
	});
 
	setInterval(function(){ 
		load_unseen_notification();; 
	}, 5000);
 
});
</script>
</html>