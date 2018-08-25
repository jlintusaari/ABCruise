<?php
require('auth.php');
require('db.php');

echo "Creating DB";

$query = "CREATE TABLE IF NOT EXISTS registrations (
    id serial,
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    firstname varchar(50),
    lastname varchar(50),
    affiliation varchar(100),
    email varchar(100),
    order_number varchar(30),
    cabin_type varchar(20),
    share_with varchar(255),
    dob varchar(20),
    country varchar(100),
    gender varchar(10),
--    poster_choice boolean,
--    presentation_title varchar(255),
--    presentation_text text,
    primary key (id)
)";

if (!pg_query($db, $query))
    echo "\n" . pg_last_error();