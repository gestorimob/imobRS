<?php
require_once 'Conexao.php';

class Proposta
{
    public function cadastrar($id_cliente, $id_imovel, $valor_oferecido, $status)
    {
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("INSERT INTO Propostas (id_cliente, id_imovel, valor_oferecido, status) 
            VALUES (:id_cliente, :id_imovel, :valor_oferecido, :status)");
        $stmt->bindParam(':id_cliente', $id_cliente);
        $stmt->bindParam(':id_imovel', $id_imovel);
        $stmt->bindParam(':valor_oferecido', $valor_oferecido);
        $stmt->bindParam(':status', $status);

        return $stmt->execute();
    }

    public function listar()
    {
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("SELECT * FROM Propostas");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
