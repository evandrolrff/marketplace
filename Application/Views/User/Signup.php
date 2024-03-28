<?php

// create functions to validate keys obtained from the $_POST array

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    // callback to validate fuctions
    dump_informations($_POST);
}

require 'Signup.view.php';