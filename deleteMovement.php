<?php

require_once "./banco.php";

$db = new Banco();

$db->deleteMovement(7);