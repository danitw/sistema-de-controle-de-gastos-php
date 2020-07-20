<?php

require_once "./banco.php";

$db = new Banco();

$db->updateMovement(8, "saddsa", 21312, "ISSO É UMA DESCRIÇÃO CARAI", "categoria xow");