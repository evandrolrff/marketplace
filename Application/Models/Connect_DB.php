<?php

require_once __DIR__.'/Application/Config/Config.php';

class Connect_DB
{
        
    private function ConnectDB(): mysqli
    {
        $conn = new mysqli(DB_SERVERNAME, DB_USER, DB_PASS, DB_USER);
        if ($conn->connect_error) {
            die("Erro na conexão: " . $conn->connect_error);
        }

        return $conn;
    }

    public function ExecuteWithParams($query, $params): mysqli_result 
    {
        try
        {
            $conn = $this->ConnectDB();
            $result = $conn->execute_query($query, $params);

            $conn->close();
            return $result;
        }
        catch (Exception $exception)
        {
            if ($conn->connect_errno) {
                printf("Connect failed: %s\n", $conn->connect_error);    
            }
            $conn->close();
            
            printf("Error: %s\n", $exception->getMessage());
            return $exception;
        }
    }

    public function ExecuteWithoutParams($query): mysqli_result 
    {
        try
        {
            $conn = $this->ConnectDB();
            $result = $conn->execute_query($query);

            $conn->close();
            return $result;
        }
        catch (Exception $exception)
        {
            if ($conn->connect_errno) {
                printf("Connect failed: %s\n", $conn->connect_error);
            }
            $conn->close();
            
            printf("Error: %s\n", $exception->getMessage());
            return $exception;
        }
    }
}

?>