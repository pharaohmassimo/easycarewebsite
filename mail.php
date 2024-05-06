<?php
// Check if the form is submitted



echo 'Reacjing here';
if (isset($_POST['submit'])) {
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


    // Validate form fields
if (empty($referenceName) || empty($FullTime) || empty($PartTime) || empty($Weekends) || empty($title) || empty($Surname) || empty($FirstName) || empty($phone) || empty($otherName) || empty($homePhone) || empty($workphone) || empty($email) || empty($insuranceNumber) || empty($dob) || empty($UKDriversLicenceYes) || empty($UKDriversLicenceNo) || empty($kinname) || empty($kinContact) || empty($kinRelationship) || empty($restrictions) || empty($permission) || empty($regNumber) || empty($doexpiry) || empty($dorevalidation) || empty($insurance) || empty($policy) || empty($policyExpiry) || empty($yearStudy) || empty($previousEmployer) || empty($addressEmployer) || empty($jobtitle) || empty($duties) || empty($reasonsLeaving) || empty($refCompany) || empty($refDetails) || empty($refAddress) || empty($refPhone) || empty($refEmail) || empty($refDateEmployment) || empty($disabilityYes) || empty($disabilityNo) || empty($disabilityReference) || empty($disabilityReferenceName) || empty($prescribedMedications) || empty($attentionDetail) || empty($crecord) || empty($signature) || empty($criminalRecDate) || empty($decName) || empty($decSignature) || empty($decDate) || empty($bank) || empty($sortCode) || empty($accountNumber) || empty($date)) {
    echo 'Please fill in all the required fields.';
    exit;
}


require_once('class.phpmailer.php');

$mail = new PHPMailer(); // defaults to using php "mail()"
	// $mail->isSMTP()
	$mail->AddReplyTo('info@easycareltd.co.uk');
	$mail->SetFrom($email);
	$mail->AddAddress('info@easycareltd.co.uk');


    // Email information
    $to = 'info@easycareltd.co.uk';
    $subject = 'Job Application';
   $message = "Name: $Surname $FirstName\n"
    . "Position Applied For: $title\n"
    . "Date Completed: $date\n\n"
    . "Reference Name: $referenceName\n"
    . "Full Time: $FullTime\n"
    . "Part Time: $PartTime\n"
    . "Weekends: $Weekends\n"
    . "Phone: $phone\n"
    . "Other Name: $otherName\n"
    . "Home Phone: $homePhone\n"
    . "Work Phone: $workphone\n"
    . "Email: $email\n"
    . "Insurance Number: $insuranceNumber\n"
    . "Date of Birth: $dob\n"
    . "UK Driver's Licence (Yes/No): $UKDriversLicenceYes\n"
    . "Kin Name: $kinname\n"
    . "Kin Contact: $kinContact\n"
    . "Kin Relationship: $kinRelationship\n"
    . "Restrictions: $restrictions\n"
    . "Permission: $permission\n"
    . "Registration Number: $regNumber\n"
    . "Date of Expiry: $doexpiry\n"
    . "Date of Revalidation: $dorevalidation\n"
    . "Insurance: $insurance\n"
    . "Policy: $policy\n"
    . "Policy Expiry: $policyExpiry\n"
    . "Year of Study: $yearStudy\n"
    . "Previous Employer: $previousEmployer\n"
    . "Address (Employer): $addressEmployer\n"
    . "Job Title: $jobtitle\n"
    . "Duties: $duties\n"
    . "Reasons for Leaving: $reasonsLeaving\n"
    . "Reference Company: $refCompany\n"
    . "Reference Details: $refDetails\n"
    . "Reference Address: $refAddress\n"
    . "Reference Phone: $refPhone\n"
    . "Reference Email: $refEmail\n"
    . "Reference Date of Employment: $refDateEmployment\n"
    . "Disability (Yes/No): $disabilityYes\n"
    . "Disability Reference: $disabilityReference\n"
    . "Disability Reference Name: $disabilityReferenceName\n"
    . "Prescribed Medications: $prescribedMedications\n"
    . "Attention to Detail: $attentionDetail\n"
    . "Criminal Record: $crecord\n"
    . "Signature: $signature\n"
    . "Date of Criminal Record Check: $criminalRecDate\n"
    . "Declaration Name: $decName\n"
    . "Declaration Signature: $decSignature\n"
    . "Declaration Date: $decDate\n"
    . "Bank: $bank\n"
    . "Sort Code: $sortCode\n"
    . "Account Number: $accountNumber\n";


    $mail->Subject ="New Application from "$FirstName $Surname;
	$mail->AltBody = $message; 
	$mail->MsgHTML('This is a new Application from ' $FirstName);


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





       // Additional email headers for SMTP configuration (if required)
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "SMTPHost:smtp.gmail.com\r\n";
    $headers .= "SMTPAuth: true\r\n";
    $headers .= "SMTPUsername: strokeprotocolpetra@gmail.com\r\n";
    $headers .= "SMTPPassword: ztbsgywfqawuoesp\r\n";
    $headers .= "SMTPSecure: ssl\r\n";
    $headers .= "Port: 465\r\n";

    // Send email
    $headers = 'From: ' . $name . "\r\n" .
        'Reply-To: ' . $name . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully';
    } else {
        echo 'Unable to send email';
    }
}
?>