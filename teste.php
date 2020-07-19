<?php

$dt = new DateTime();
$dt->setTimeZone(new DateTimeZone('UTC'));

//date_default_timezone_set('UTC');

var_dump(date('c'));