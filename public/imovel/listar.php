<?php
require_once '../../app/Imovel.php';

$imovel = new Imovel();
$imoveis = $imovel->listar();

foreach ($imoveis as $i) {
    echo $i['descricao'] . " - R$ " . number_format($i['valor'], 2, ',', '.') . "<br>";
}
