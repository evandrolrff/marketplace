<?php
class UserDB{
    private User $user;
    
    public function __construct(User $user)
    {
        if(is_null($user))
        {
            $this->user = NULL;
        } else {
            $this->user = $user;
        }
    }

    public function SelectAllUsers(): void
    {
        $conn = new Connect_DB();
        $conn->connectDB();
        
        $sql = "SELECT * FROM user";
        $result = $conn->conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $user = new User($row);
                // faz algo com o $user
            }
        } else
            echo "Nenhum usuário cadastrado.";
    }

    public function SelectUser(string $email, string $password): bool
    {
        $conn = new Connect_DB();
        $conn->connectDB();
        
        $sql = "SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}'";
        $result = $conn->conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // $user = new User($row);
                $session = new SessionManager();
                $session->CreateSession($row);
                return true;    
            }
        } else
            return false;
    }
}
?>