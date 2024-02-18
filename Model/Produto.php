<?php
class Produto {
    private int $id;
    private string $nome;
    private float $preco;
    private string $descricao;

    public function __construct(?array $arrayProdutos, ?string $nome = "", ?float $preco = "", ?int $id = -1, ?string $descricao = "")
    {
        if(count($arrayProdutos) > 0)
        {
            $this->id = $arrayProdutos['id'];
            $this->nome = $arrayProdutos['nome'];
            $this->preco = $arrayProdutos['preco'];
            $this->descricao = $arrayProdutos['descricao'];
        } else {
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->descricao = $descricao;
        }
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function __toString()
    {
        return "Nome => ".$this->getNome().
        "<br/>Preço => ".$this->getPreco().
        "<br/>Descrição => ".$this->getDescricao();
    }

    public function toArray(): array {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'preco' => $this->preco,
            'descricao' => $this->descricao,
        ];
    }
}
?>