<?php
require_once 'Conexao.php';

class Corretor
{
    public function cadastrar($nome, $contato)
    {
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("INSERT INTO Corretores (nome, contato) 
            VALUES (:nome, :contato)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':contato', $contato);

        return $stmt->execute();
    }

    public function listar()
    {
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("SELECT * FROM Corretores");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
