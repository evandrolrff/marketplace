<?php
class User {
    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private int $role;

    public function __construct(
        ?array $arrayUsers,
        ?string $email = "",
        ?string $password = "",
        ?int $id = -1,
        ?string $name = "",
        ?int $role = -1)
    {
        if(count($arrayUsers) > 0)
        {
            $this->id = $arrayUsers['id'];
            $this->name = $arrayUsers['name'];
            $this->email = $arrayUsers['email'];
            $this->password = $arrayUsers['password'];
            $this->role = $arrayUsers['role'];
        } else {
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
        }
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRole(): int
    {
        switch ($this->role)
        {
            case 1:
                return "Customer";
            case 2:
                return "Admin";
            default:
                return "Nonexistent";
        }
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setRole(int $role): void
    {
        $this->role = $role;
    }

    public function __toString()
    {
        return "Name => ".$this->getName().
        "<br/>E-mail => ".$this->getEmail().
        "<br/>Password => ".$this->getPassword().
        "<br/>Role => ".$this->getRole();
    }

    public function toArray(): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'role' => $this->role,
        ];
    }
}
?>