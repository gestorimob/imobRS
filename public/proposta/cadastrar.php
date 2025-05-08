<?php
require_once '../../app/Corretor.php';

$corretor = new Corretor();
if ($corretor->cadastrar('Carlos Silva', '99999-8888')) {
    echo "Corretor registrado!";
}
