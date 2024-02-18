<?php
class User {
    private int $id;
    private string $nome;
    private string $email;
    private string $password;
    private int $cargo;

    public function __construct(?array $arrayUsers, ?string $email = "", ?string $password = "", ?int $id = -1, ?string $nome = "", ?int $cargo = -1)
    {
        if(count($arrayUsers) > 0)
        {
            $this->id = $arrayUsers['id'];
            $this->nome = $arrayUsers['nome'];
            $this->email = $arrayUsers['email'];
            $this->password = $arrayUsers['password'];
            $this->cargo = $arrayUsers['cargo'];
        } else {
            $this->id = $id;
            $this->nome = $nome;
            $this->email = $email;
            $this->password = $password;
            $this->cargo = $cargo;
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

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getCargo(): int
    {
        switch ($this->cargo)
        {
            case 1:
                return "Cliente"; 
            case 2:
                return "Admin";
            default:
                return "Não existente";
        }
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setCargo(int $cargo): void
    {
        $this->cargo = $cargo;
    }

    public function __toString()
    {
        return "Nome => ".$this->getNome().
        "<br/>E-mail => ".$this->getEmail().
        "<br/>Senha => ".$this->getPassword().
        "<br/>Cargo => ".$this->getCargo();
    }

    public function toArray(): array {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'password' => $this->password,
            'cargo' => $this->cargo,
        ];
    }
}
?>