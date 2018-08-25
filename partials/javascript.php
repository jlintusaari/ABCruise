
<?php
$s = '';
if (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on")
    $s = 's';
?>

<script src="http<?php echo $s?>://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>