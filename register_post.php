<?php

require('functions/db.php');

$verror = null;
if (!strlen($_POST['firstname']))
    $verror = "Please provide your first name";
elseif (!strlen($_POST['lastname']))
    $verror = "Please provide your last name";
elseif (!strlen($_POST['affiliation']))
    $verror = "Please provide your affiliation";
elseif (!strlen($_POST['email']))
    $verror = "Please provide your email";
elseif (!strlen($_POST['order_number']))
    $verror = "Please provide the order number found from the order confirmation email of your registration ticket";
elseif (!strlen($_POST['cabin_type']))
    $verror = "Please select a cabin type";
elseif (strlen($_POST['dob']) < 6 || !ctype_digit($_POST['dob']))
    $verror = "Please provide your date of birth in number format ddmmyy";
elseif (!strlen($_POST['country']))
    $verror = "Please provide your nationality";
elseif (!strlen($_POST['gender']))# && $_POST['cabin_type'] == 'shared')
    $verror = "Please provide gender information";
#if (isempty($_POST['poster_choice']))
#    $verror = "Please indicate if you would like to present a poster";


if ($verror) {
    ?>
    <!doctype html>
    <html lang="en">
    <head>

    <?php include('partials/head_content.php'); ?>

    </head>
    <body>

    <?php
    include('partials/header.php');
    include('partials/registration_form.php');
    #include('partials/footer.php');
    ?>
    </body>
    </html>
    <?php
    exit();
}



$tf = pg_insert($db, 'registrations', $_POST);

if (!$tf)
    die('Unfortunately the registration did not succeed. Please try again! If the problem persists, please contact jarno.lintusaari@aalto.fi.');


#Send email

$to      = $_POST['email'];
$subject = 'ABCruise registration received';
$message = "Dear ${_POST['firstname']} ${_POST['lastname']},\n\nThis is an automatic message confirming that we have received your registration to ABCruise (www.hiit.fi/ABCruise). Thank you for registering!\n\nBest wishes,\nABCruise";
#\n\n Cabin type: ${_POST['cabin_type']}";
$headers = 'From: ABCruise@abcruise.hiit.fi' . "\r\n" .
    'Reply-To: abcinhelsinki@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

#Redirect

header('Location: registered.php');

?>