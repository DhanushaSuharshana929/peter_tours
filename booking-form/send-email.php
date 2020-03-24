<?php
//----------------------Company Information---------------------

require_once "Mail.php";

date_default_timezone_set('Asia/Colombo');
$todayis = date("l, F j, Y, g:i a");
$site_link = "https://" . $_SERVER['HTTP_HOST'];

//Display Strings 
$comany_name = "Sri Lanka Peter Tours";
$website_name = "www.srilankapetertours.com";
$comConNumber = "+94 77 621 6932";
$comEmail = "info@srilankapetertours.com";
$comOwner = "Peter";

// Post Variables
$visitor_name = $_POST['visitor_name'];
$visitor_email = $_POST['visitor_email'];
$visitor_phone = $_POST['visitor_phone'];
$visitor_country = $_POST['visitor_country'];
$package = $_POST['package'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$no_of_adults = $_POST['adults'];
$no_of_children = $_POST['children'];
$message = $_POST['message'];



$host = "sg1-ls7.a2hosting.com";
$username = "info@srilankapetertours.com";
$password = "Peter@7027";

$webmail = "info@srilankapetertours.com";
$visitorSubject = "Thank You " . $visitor_name;
$companySubject = "Tour Booking Inquiry - " . $visitor_name;

//----------------------CAPTCHACODE---------------------

session_start();

$response = array();

if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {

    $response['status'] = 'incorrect';

    $response['msg'] = 'Security Code is invalid';

    echo json_encode($response);

    exit();
}

include("mail-template.php");


$visitorHeaders = array('MIME-Version' => '1.0', 'Content-Type' => "text/html; charset=ISO-8859-1", 'From' => $webmail,
    'To' => $visitor_email,
    'Reply-To' => $comEmail,
    'Subject' => $visitorSubject);

$companyHeaders = array('MIME-Version' => '1.0', 'Content-Type' => "text/html; charset=ISO-8859-1", 'From' => $webmail,
    'To' => $webmail,
    'Reply-To' => $visitor_email,
    'Subject' => $companySubject);


$smtp = Mail::factory('smtp', array('host' => $host,
            'auth' => true,
            'username' => $username,
            'password' => $password));

$visitorMail = $smtp->send($visitor_email, $visitorHeaders, $visitor_message);
$companyMail = $smtp->send($webmail, $companyHeaders, $company_message);
$companyMail2 = $smtp->send("dinudhanusha@gmail.com", $companyHeaders, $company_message);

if (PEAR::isError($visitorMail && $companyMail)) {

    $response['status'] = 'correct';

    $response['msg'] = $mail->getMessage();

//"Your message has not been sent"

    echo json_encode($response);

    exit();
} else {
    $response['status'] = 'correct';

    $response['msg'] = "Your message has been sent successfully";

//"Your message has been sent successfully"

    echo json_encode($response);

    exit();
}
