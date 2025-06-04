<?php
use PHPMailer\PHPMailer\PHPMailer;

if (true) {

    // Get the form fields
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $position = isset($_POST['position']) ? $_POST['position'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $referenceName = isset($_POST['referenceName']) ? $_POST['referenceName'] : '';
    $availability = isset($_POST['availability']) ? $_POST['availability'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $Surname = isset($_POST['Surname']) ? $_POST['Surname'] : '';
    $FirstName = isset($_POST['FirstName']) ? $_POST['FirstName'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
        $postcode = isset($_POST['postcode']) ? $_POST['postcode'] : '';
    $otherName = isset($_POST['otherNameName']) ? $_POST['otherNameName'] : '';
    $homePhone = isset($_POST['homePhone']) ? $_POST['homePhone'] : '';
    $workphone = isset($_POST['workPhone']) ? $_POST['workPhone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $insuranceNumber = isset($_POST['insuranceNumber']) ? $_POST['insuranceNumber'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $kinname = isset($_POST['kinname']) ? $_POST['kinname'] : '';
    $kinContact = isset($_POST['kinContact']) ? $_POST['kinContact'] : '';
    $kinRelationship = isset($_POST['kinRelationship']) ? $_POST['kinRelationship'] : '';
    $restrictions = isset($_POST['restrictions']) ? $_POST['restrictions'] : '';
    $permission = isset($_POST['permission']) ? $_POST['permission'] : '';
    $regNumber = isset($_POST['regNumber']) ? $_POST['regNumber'] : '';
    $doexpiry = isset($_POST['doexpiry']) ? $_POST['doexpiry'] : '';
    $dorevalidation = isset($_POST['dorevalidation']) ? $_POST['dorevalidation'] : '';
    $insurance = isset($_POST['insurance']) ? $_POST['insurance'] : '';
    $policy = isset($_POST['policy']) ? $_POST['policy'] : '';
    $policyExpiry = isset($_POST['policyExpiry']) ? $_POST['policyExpiry'] : '';
    $yearStudy = isset($_POST['yearStudy']) ? $_POST['yearStudy'] : '';
    $previousEmployer = isset($_POST['previousEmployer']) ? $_POST['previousEmployer'] : '';
    $addressEmployer = isset($_POST['addressEmployer']) ? $_POST['addressEmployer'] : '';
    $jobtitle = isset($_POST['jobtitle']) ? $_POST['jobtitle'] : '';
    $duties = isset($_POST['duties']) ? $_POST['duties'] : '';
    $reasonsLeaving = isset($_POST['reasonsLeaving']) ? $_POST['reasonsLeaving'] : '';
    $refCompany = isset($_POST['refCompany']) ? $_POST['refCompany'] : '';
    $refDetails = isset($_POST['refDetails']) ? $_POST['refDetails'] : '';
    $refAddress = isset($_POST['refAddress']) ? $_POST['refAddress'] : '';
    $refPhone = isset($_POST['refPhone']) ? $_POST['refPhone'] : '';
    $refEmail = isset($_POST['refEmail']) ? $_POST['refEmail'] : '';
    $refDateEmployment = isset($_POST['refDateEmployment']) ? $_POST['refDateEmployment'] : '';
    $disabilityYes = isset($_POST['disabilityYes']) ? $_POST['disabilityYes'] : '';
    $disabilityNo = isset($_POST['disabilityNo']) ? $_POST['disabilityNo'] : '';
    $disabilityReference = isset($_POST['disabilityReference']) ? $_POST['disabilityReference'] : '';
    $disabilityReferenceName = isset($_POST['disabilityReferenceName']) ? $_POST['disabilityReferenceName'] : '';
    $prescribedMedications = isset($_POST['prescribedMedications']) ? $_POST['prescribedMedications'] : '';
    $attentionDetail = isset($_POST['attentionDetail']) ? $_POST['attentionDetail'] : '';
    $crecord = isset($_POST['crecord']) ? $_POST['crecord'] : '';
    $signature = isset($_POST['signature']) ? $_POST['signature'] : '';
    $criminalRecDate = isset($_POST['criminalRecDate']) ? $_POST['criminalRecDate'] : '';
    $decName = isset($_POST['decName']) ? $_POST['decName'] : '';
    $decSignature = isset($_POST['decSignature']) ? $_POST['decSignature'] : '';
    $decDate = isset($_POST['decDate']) ? $_POST['decDate'] : '';
    $bank = isset($_POST['bank']) ? $_POST['bank'] : '';
    $sortCode = isset($_POST['sortCode']) ? $_POST['sortCode'] : '';
    $accountNumber = isset($_POST['accountNumber']) ? $_POST['accountNumber'] : '';


    $otherName = isset($_POST['otherName']) ? $_POST['otherName'] : '';
    $otherNameName = isset($_POST['otherNameName']) ? $_POST['otherNameName'] : '';
    $ukDriversLicense = isset($_POST['UKDriversLicence']) ? $_POST['UKDriversLicence'] : '';
    $disability = isset($_POST['disability']) ? $_POST['disability'] : '';
    $nightShift = isset($_POST['nightShift']) ? $_POST['nightShift'] : '';
    $diabetic = isset($_POST['diabetic']) ? $_POST['diabetic'] : '';
    $mobility = isset($_POST['mobility']) ? $_POST['mobility'] : '';
    $specialistCare = isset($_POST['specialistCare']) ? $_POST['specialistCare'] : '';      
    $fitnessProblem = isset($_POST['fitnessProblem']) ? $_POST['fitnessProblem'] : '';
    $stomachUlcers = isset($_POST['stomachUlcers']) ? $_POST['stomachUlcers'] : '';
    $bowelProblem = isset($_POST['bowelProblems']) ? $_POST['bowelProblems'] : '';
    $chronicChest = isset($_POST['chronicChest']) ? $_POST['chronicChest'] : '';
    $sleepDisturbance = isset($_POST['sleepDisturbance']) ? $_POST['sleepDisturbance'] : '';
    $nightFitness = isset($_POST['nightFitness']) ? $_POST['nightFitness'] : '';
    $strictTimetable = isset($_POST['strictTimetable']) ? $_POST['strictTimetable'] : '';
    $consent = isset($_POST['consent']) ? $_POST['consent'] : '';

    
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(); // defaults to using php "mail()"
	$mail->isSMTP();
	$mail->Host = gethostname();
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@easycareltd.co.uk';
    $mail->Password = ')ZALu0v&gruK';
	$mail->SetFrom($email);
	$mail->AddAddress('bookings1@easycareltd.co.uk');


    // Email information
$message = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #000000;
        }
        .section {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            background-color: #f2f2f2;
        }
        p {
            margin: 5px 0;
        }
        strong {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Application Form Details</h2>
        
        <div class="section">
            <h3>Personal Information</h3>
            <p><strong>Name:</strong> ' . htmlspecialchars("$Surname $FirstName") . '</p>
            <p><strong>Position Applied For:</strong> ' . htmlspecialchars($position) . '</p>
            <p><strong>Date Completed:</strong> ' . htmlspecialchars($date) . '</p>
            <p><strong>Reference Name:</strong> ' . htmlspecialchars($referenceName) . '</p>
            <p><strong>Availability:</strong> ' . htmlspecialchars($availability) . '</p>
            <p><strong>Phone:</strong> ' . htmlspecialchars($phone) . '</p>
            <p><strong>Other Name (Yes/No):</strong> ' . htmlspecialchars($otherName) . '</p>
            <p><strong>Other Name:</strong> ' . htmlspecialchars($otherNameName) . '</p>
            <p><strong>Home Phone:</strong> ' . htmlspecialchars($homePhone) . '</p>
            <p><strong>Current Address:</strong> ' . htmlspecialchars($address) . '</p>
             <p><strong>Postcode:</strong> ' . htmlspecialchars($postcode) . '</p>
            <p><strong>Work Phone:</strong> ' . htmlspecialchars($workphone) . '</p>
            <p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>
            <p><strong>Insurance Number:</strong> ' . htmlspecialchars($insuranceNumber) . '</p>
            <p><strong>Date of Birth:</strong> ' . htmlspecialchars($dob) . '</p>
            <p><strong>UK Driver\'s Licence:</strong> ' . htmlspecialchars($ukDriversLicense) . '</p>
        </div>

        <div class="section">
            <h3>Next of Kin</h3>
            <p><strong>Kin Name:</strong> ' . htmlspecialchars($kinname) . '</p>
            <p><strong>Kin Contact:</strong> ' . htmlspecialchars($kinContact) . '</p>
            <p><strong>Kin Relationship:</strong> ' . htmlspecialchars($kinRelationship) . '</p>
            <p><strong>Restrictions:</strong> ' . htmlspecialchars($restrictions) . '</p>
            <p><strong>Permission:</strong> ' . htmlspecialchars($permission) . '</p>
        </div>

        <div class="section">
            <h3>Registration Details</h3>
            <p><strong>Registration Number:</strong> ' . htmlspecialchars($regNumber) . '</p>
            <p><strong>Date of Expiry:</strong> ' . htmlspecialchars($doexpiry) . '</p>
            <p><strong>Date of Revalidation:</strong> ' . htmlspecialchars($dorevalidation) . '</p>
            <p><strong>Insurance:</strong> ' . htmlspecialchars($insurance) . '</p>
            <p><strong>Policy:</strong> ' . htmlspecialchars($policy) . '</p>
            <p><strong>Policy Expiry:</strong> ' . htmlspecialchars($policyExpiry) . '</p>
            <p><strong>Year of Study:</strong> ' . htmlspecialchars($yearStudy) . '</p>
        </div>

        <div class="section">
            <h3>Employment History</h3>
            <p><strong>Previous Employer:</strong> ' . htmlspecialchars($previousEmployer) . '</p>
            <p><strong>Address (Employer):</strong> ' . htmlspecialchars($addressEmployer) . '</p>
            <p><strong>Job Title:</strong> ' . htmlspecialchars($jobtitle) . '</p>
            <p><strong>Duties:</strong> ' . htmlspecialchars($duties) . '</p>
            <p><strong>Reasons for Leaving:</strong> ' . htmlspecialchars($reasonsLeaving) . '</p>
        </div>

        <div class="section">
            <h3>References</h3>
            <p><strong>Reference Company:</strong> ' . htmlspecialchars($refCompany) . '</p>
            <p><strong>Reference Details:</strong> ' . htmlspecialchars($refDetails) . '</p>
            <p><strong>Reference Address:</strong> ' . htmlspecialchars($refAddress) . '</p>
            <p><strong>Reference Phone:</strong> ' . htmlspecialchars($refPhone) . '</p>
            <p><strong>Reference Email:</strong> ' . htmlspecialchars($refEmail) . '</p>
            <p><strong>Reference Date of Employment:</strong> ' . htmlspecialchars($refDateEmployment) . '</p>
        </div>

        <div class="section">
            <h3>Health Information</h3>
            <p><strong>Disability (Yes/No):</strong> ' . htmlspecialchars($disability) . '</p>
            <p><strong>Disability Reference:</strong> ' . htmlspecialchars($disabilityReference) . '</p>
            <p><strong>Disability Reference Name:</strong> ' . htmlspecialchars($disabilityReferenceName) . '</p>
            <p><strong>Problem in past that has prevented you from working at night:</strong> ' . htmlspecialchars($nightShift) . '</p>
            <p><strong>Diabetic:</strong> ' . htmlspecialchars($diabetic) . '</p>
            <p><strong>Heart problems affecting fitness:</strong> ' . htmlspecialchars($fitnessProblem) . '</p>
            <p><strong>Duodenal or stomach ulcers in the past:</strong> ' . htmlspecialchars($stomachUlcers) . '</p>
            <p><strong>Continuing bowel problem:</strong> ' . htmlspecialchars($bowelProblems) . '</p>
            <p><strong>Chronic chest problem:</strong> ' . htmlspecialchars($chronicChest) . '</p>
            <p><strong>Disability affecting mobility:</strong> ' . htmlspecialchars($mobility) . '</p>
            <p><strong>Recurrent or continuing sleep disturbance:</strong> ' . htmlspecialchars($sleepDisturbance) . '</p>
            <p><strong>Taking any medication to a strict timetable:</strong> ' . htmlspecialchars($strictTimetable) . '</p>
            <p><strong>Other health problem affecting fitness for night work:</strong> ' . htmlspecialchars($nightFitness) . '</p>
            <p><strong>Specialist care requiring attendance at hospital clinics:</strong> ' . htmlspecialchars($specialistCare) . '</p>
        </div>

        <div class="section">
            <h3>Additional Information</h3>
            <p><strong>Prescribed Medications:</strong> ' . htmlspecialchars($prescribedMedications) . '</p>
            <p><strong>Attention to Detail:</strong> ' . htmlspecialchars($attentionDetail) . '</p>
            <p><strong>Criminal Record:</strong> ' . htmlspecialchars($crecord) . '</p>
            <p><strong>Signature:</strong> ' . htmlspecialchars($signature) . '</p>
            <p><strong>Date of Criminal Record Check:</strong> ' . htmlspecialchars($criminalRecDate) . '</p>
            <p><strong>Declaration Name:</strong> ' . htmlspecialchars($decName) . '</p>
            <p><strong>Declaration Signature:</strong> ' . htmlspecialchars($decSignature) . '</p>
            <p><strong>Declaration Date:</strong> ' . htmlspecialchars($decDate) . '</p>
            <p><strong>Bank:</strong> ' . htmlspecialchars($bank) . '</p>
            <p><strong>Sort Code:</strong> ' . htmlspecialchars($sortCode) . '</p>
            <p><strong>Account Number:</strong> ' . htmlspecialchars($accountNumber) . '</p>
        </div>
    </div>
</body>
</html>';
    
    
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