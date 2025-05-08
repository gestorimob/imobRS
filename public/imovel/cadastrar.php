<?php
require_once '../../app/Proposta.php';

$proposta = new Proposta();
if ($proposta->cadastrar(1, 1, 340000, 'Em análise')) {
    echo "Proposta registrada com sucesso!";
}
