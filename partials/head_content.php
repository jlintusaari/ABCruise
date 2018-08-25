
<?php
$s = '';
if (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on")
    $s = 's';
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="The 'ABC-in-' series of international workshops on approximate Bayesian Computation (ABC) continues, this time on a cruise from 16th to 18th of May 2016.">

<title>ABC in Helsinki, 2016</title>

<link rel="stylesheet" href="css/pure-0.6.0/pure-min.css">

<!--[if lte IE 8]>	
    <link rel="stylesheet" href="css/pure-0.6.0/grids-responsive-old-ie-min.css">	
<![endif]-->

<!--[if gt IE 8]><!-->	
    <link rel="stylesheet" href="css/pure-0.6.0/grids-responsive-min.css">
<!--<![endif]-->

<link rel="stylesheet" href="http<?php echo $s?>://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css">
     
<!--[if lte IE 8]>
    <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
<![endif]-->

<!--[if gt IE 8]><!-->
     <link rel="stylesheet" href="css/layouts/marketing.css">
<!--<![endif]--> 

<link rel="stylesheet" href="css/abcruise.css?v=1.1">
<link rel="stylesheet" href="css/navbar.css">