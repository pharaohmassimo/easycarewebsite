<?php
use PHPMailer\PHPMailer\PHPMailer;

if (true) {

    // Get the form fields
    $name = $_POST['name'];
    $position = $_POST['position'];
    $date = $_POST['date'];
    $referenceName = $_POST['referenceName'];
    $FullTime = $_POST['FullTime'];
    $PartTime = $_POST['PartTime'];
    $Weekends = $_POST['Weekends'];
    $title = $_POST['title'];
    $Surname = $_POST['Surname'];
    $FirstName = $_POST['FirstName'];
    $phone = $_POST['phone'];
    $otherName = $_POST['otherName'];
    $homePhone = $_POST['homePhone'];
    $workphone = $_POST['workphone'];
    $email = $_POST['email'];
    $insuranceNumber = $_POST['insuranceNumber'];
    $dob = $_POST['dob'];
    $UKDriversLicenceYes = $_POST['UKDriversLicenceYes'];
    $UKDriversLicenceNo = $_POST['UKDriversLicenceNo'];
    $kinname = $_POST['kinname'];
    $kinContact = $_POST['kinContact'];
    $kinRelationship = $_POST['kinRelationship'];
    $restrictions = $_POST['restrictions'];
    $permission = $_POST['permission'];
    $regNumber = $_POST['regNumber'];
    $doexpiry = $_POST['doexpiry'];
    $dorevalidation = $_POST['dorevalidation'];
    $insurance = $_POST['insurance'];
    $policy = $_POST['policy'];
    $policyExpiry = $_POST['policyExpiry'];
    $yearStudy = $_POST['yearStudy'];
    $previousEmployer = $_POST['previousEmployer'];
    $addressEmployer = $_POST['addressEmployer'];
    $jobtitle = $_POST['jobtitle'];
    $duties = $_POST['duties'];
    $reasonsLeaving = $_POST['reasonsLeaving'];
    $refCompany = $_POST['refCompany'];
    $refDetails = $_POST['refDetails'];
    $refAddress = $_POST['refAddress'];
    $refPhone = $_POST['refPhone'];
    $refEmail = $_POST['refEmail'];
    $refDateEmployment = $_POST['refDateEmployment'];
    $disabilityYes = $_POST['disabilityYes'];
    $disabilityNo = $_POST['disabilityNo'];
    $disabilityReference = $_POST['disabilityReference'];
    $disabilityReferenceName = $_POST['disabilityReferenceName'];
    $prescribedMedications = $_POST['prescribedMedications'];
    $attentionDetail = $_POST['attentionDetail'];
    $crecord = $_POST['crecord'];
    $signature = $_POST['signature'];
    $criminalRecDate = $_POST['criminalRecDate'];
    $decName = $_POST['decName'];
    $decSignature = $_POST['decSignature'];
    $decDate = $_POST['decDate'];
    $bank = $_POST['bank'];
    $sortCode = $_POST['sortCode'];
    $accountNumber = $_POST['accountNumber'];

    
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(); // defaults to using php "mail()"
	$mail->isSMTP();
	$mail->Host = gethostname();
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@easycareltd.co.uk';
    $mail->Password = ')ZALu0v&gruK';
	$mail->SetFrom($email);
	$mail->AddAddress('noreply@easycareltd.co.uk');


    // Email information
   
$message = "<p><strong>Name:</strong> $Surname $FirstName</p>"
    . "<p><strong>Position Applied For:</strong> $position</p>"
    . "<p><strong>Date Completed:</strong> $date</p>"
    . "<br>"
    . "<p><strong>Reference Name:</strong> $referenceName</p>"
    . "<p><strong>Full Time:</strong> $FullTime</p>"
    . "<p><strong>Part Time:</strong> $PartTime</p>"
    . "<p><strong>Weekends:</strong> $Weekends</p>"
    . "<p><strong>Phone:</strong> $phone</p>"
    . "<p><strong>Other Name:</strong> $otherName</p>"
    . "<p><strong>Home Phone:</strong> $homePhone</p>"
    . "<p><strong>Work Phone:</strong> $workphone</p>"
    . "<p><strong>Email:</strong> $email</p>"
    . "<p><strong>Insurance Number:</strong> $insuranceNumber</p>"
    . "<p><strong>Date of Birth:</strong> $dob</p>"
    . "<p><strong>UK Driver's Licence (Yes/No):</strong> $UKDriversLicenceYes</p>"
    . "<p><strong>Kin Name:</strong> $kinname</p>"
    . "<p><strong>Kin Contact:</strong> $kinContact</p>"
    . "<p><strong>Kin Relationship:</strong> $kinRelationship</p>"
    . "<p><strong>Restrictions:</strong> $restrictions</p>"
    . "<p><strong>Permission:</strong> $permission</p>"
    . "<p><strong>Registration Number:</strong> $regNumber</p>"
    . "<p><strong>Date of Expiry:</strong> $doexpiry</p>"
    . "<p><strong>Date of Revalidation:</strong> $dorevalidation</p>"
    . "<p><strong>Insurance:</strong> $insurance</p>"
    . "<p><strong>Policy:</strong> $policy</p>"
    . "<p><strong>Policy Expiry:</strong> $policyExpiry</p>"
    . "<p><strong>Year of Study:</strong> $yearStudy</p>"
    . "<p><strong>Previous Employer:</strong> $previousEmployer</p>"
    . "<p><strong>Address (Employer):</strong> $addressEmployer</p>"
    . "<p><strong>Job Title:</strong> $jobtitle</p>"
    . "<p><strong>Duties:</strong> $duties</p>"
    . "<p><strong>Reasons for Leaving:</strong> $reasonsLeaving</p>"
    . "<p><strong>Reference Company:</strong> $refCompany</p>"
    . "<p><strong>Reference Details:</strong> $refDetails</p>"
    . "<p><strong>Reference Address:</strong> $refAddress</p>"
    . "<p><strong>Reference Phone:</strong> $refPhone</p>"
    . "<p><strong>Reference Email:</strong> $refEmail</p>"
    . "<p><strong>Reference Date of Employment:</strong> $refDateEmployment</p>"
    . "<p><strong>Disability (Yes/No):</strong> $disabilityYes</p>"
    . "<p><strong>Disability Reference:</strong> $disabilityReference</p>"
    . "<p><strong>Disability Reference Name:</strong> $disabilityReferenceName</p>"
    . "<p><strong>Prescribed Medications:</strong> $prescribedMedications</p>"
    . "<p><strong>Attention to Detail:</strong> $attentionDetail</p>"
    . "<p><strong>Criminal Record:</strong> $crecord</p>"
    . "<p><strong>Signature:</strong> $signature</p>"
    . "<p><strong>Date of Criminal Record Check:</strong> $criminalRecDate</p>"
    . "<p><strong>Declaration Name:</strong> $decName</p>"
    . "<p><strong>Declaration Signature:</strong> $decSignature</p>"
    . "<p><strong>Declaration Date:</strong> $decDate</p>"
    . "<p><strong>Bank:</strong> $bank</p>"
    . "<p><strong>Sort Code:</strong> $sortCode</p>"
    . "<p><strong>Account Number:</strong> $accountNumber</p>";
    
    
    $mail->Subject ="New Vacancy Application"; 
	$mail->AltBody = $message; 
	$mail->MsgHTML('This is a new Application from <p></p>' .$message );
    
    if(!$mail->Send()) {
		 //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mail->ErrorInfo.'</pre>'
	    ));
	} else {
	   echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Application has been successfully'
		));
	}
}
?>