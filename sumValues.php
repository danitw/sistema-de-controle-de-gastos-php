<?php

require_once "./banco.php";

$db = new Banco();

$currentMoney = $db->sumValues();