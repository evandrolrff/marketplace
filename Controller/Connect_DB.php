<?php

class Connect_DB
{
    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "";
    private string $dbname = "ecommerce";
    public mysqli $conn;
    
    public function connectDB(): void
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Erro na conexão: " . $this->conn->connect_error);
        }
    }

    public function closeConnectionDB(): void {
        $this->conn->close();
    }
}

?>