<?php
require_once '../../app/Imovel.php';

$imovel = new Imovel();
if ($imovel->cadastrar('Apartamento 3 quartos', 'Venda', 350000, 'Rua das Flores, 123', 'Disponível')) {
    echo "Imóvel cadastrado com sucesso!";
}
