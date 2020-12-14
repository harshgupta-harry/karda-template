
<?php
include ('./composer/firebase_db.php');

if(!empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
 && !empty($_POST['message'] && !empty($_POST['contact_number']) && !empty($_POST['requirement'])
)){
    
    // Submitted form data
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $message = $_POST['message'];
    $contact_number = $_POST['contact_number'];
    $requirement= $_POST['requirement'];
    
	$projectSlug = $_POST['projectSlug'];
	$postData = [
		'name' => $name,
		'email' => $email,
		'message' => $message,
		'contact_number' => $contact_number,
		'requirement' => $requirement
		
	];

	// Create a key for a new post

	$newPostKey = $database->getReference('enquiry/projects/'.$projectSlug)->push($postData)->getKey();
	if($newPostKey){
		
		/*
		 * Send email to admin
		 */
		$to     = 'kavita.kardar@gmail.com';
		$subject= 'Enquiry Submitted';
		
		$htmlContent = '
		<h4>Enquiry Form has submitted, details are given below.</h4>
		<table cellspacing="0" style="width: 300px; height: 200px;">
			<tr>
				<th>Name:</th><td>'.$name.'</td>
			</tr>
			<tr style="background-color: #e0e0e0;">
				<th>Email:</th><td>'.$email.'</td>
			</tr>
			<tr>
				<th>Message:</th><td>'.$contact_number.'</td>
			</tr>
			<tr>
				<th>Contact Number:</th><td>'.$contact_number.'</td>
			</tr>
			<tr>
				<th>Requirement:</th><td>'.$requirement.'</td>
			</tr>
		</table>';
		
		// Set content-type header for sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		// Additional headers
		$headers .= 'From: Kavita<kavita.kardar@gmail.com>' . "\r\n";
		
		// Send email
	   /*  if(mail($to,$subject,$htmlContent,$headers)){
			$status['result'] = 'success';
		}else{
			$status['result'] = 'error';
		}*/
		$status['result'] = 'success';
	}else{
        $status['result'] = 'error';
    } 
    
   
}else{
        $status['result'] = 'error';
    } 
	// Output status
    echo json_encode($status);die;