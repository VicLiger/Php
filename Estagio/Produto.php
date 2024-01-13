<?php

class Produto {
    private $nome;
    private $preco;
    protected $quantidade;

    // Criar Valores do produto
    public function setProduto($data) {
        if (isset($data['nome']) && isset($data['preco']) && isset($data['quantidade'])) {
            $this->nome = $data['nome'];
            $this->preco = $data['preco'];
            $this->quantidade = $data['quantidade'];
            echo "Produto cadastrado com sucesso: {$this->nome}, Preço: {$this->preco}, Quantidade: {$this->quantidade}\n";
        } else {
            echo "Erro ao cadastrar o produto. Informações incompletas.\n";
        }
    }

    // Obter valores produto
    public function getProduto() {
        return [
            'nome' => $this->nome,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade
        ];
    }

    // Obter a quantidade do produto
    public function getQuantidade() {
        return $this->quantidade;
    }
}
