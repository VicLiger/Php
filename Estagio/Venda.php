<?php

class Venda extends Produto {
    private $quantidadeVendida;
    private $desconto;

    // Atribuir a quantidade vendida com desconto
    public function setVenda($quantidadeVendida, $desconto) {
        $produto = $this->getProduto();

        try {
            if ($produto) {
                $quantidadeDisponivel = $this->getQuantidade();

                if ($quantidadeDisponivel >= $quantidadeVendida) {
                    $this->quantidadeVendida = $quantidadeVendida;
                    $this->desconto = $desconto;

                    // Atualizar o estoque após a venda
                    $this->quantidade -= $quantidadeVendida;

                    echo "Venda registrada: {$this->quantidadeVendida} unidades de {$produto['nome']} com desconto de {$this->desconto}%. Estoque atual: {$this->quantidade}\n";
                }
            } else {
                echo "Erro ao registrar a venda. Produto não cadastrado.\n";
            }
        } catch (\Exception $e) {
            echo 'Ocorreu um erro com a venda: ' . $e->getMessage();
        }
    }

    // Obter valor da venda
    public function getVenda() {
        return [
            'produto' => $this->getProduto(),
            'quantidadeVendida' => $this->quantidadeVendida,
            'desconto' => $this->desconto
        ];
    }
}
