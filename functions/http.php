<?php

if (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on")
{
    header("Location: http://www.hiit.fi/ABCruise" . $_SERVER["REQUEST_URI"]);
    exit();
}