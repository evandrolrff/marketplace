<?php
class SessionManager
{
    public function CreateSession(array $keyValue): void
    {
        if (session_start()) {
            foreach ($keyValue as $key => $value) {
                $_SESSION[$key] = $value;
            }
        }
    }

    public function checkSession(?string $key = "", ?string $value = ""): bool
    {
        if (isset($_SESSION)) {
            if (isset($_SESSION[$key])) {
                return true;
            }
        }
        return false;
    }

    public function sessionHasValue(?string $key = "", ?string $value = ""): bool
    {
        if (isset($_SESSION[$key]) && $value != "") {
            if ($_SESSION[$key] == $value) {
                return true;
            }
        }
        return false;
    }

    public function startSession(): void
    {
        session_start();
    }


    public function destroySession(): void
    {
        session_destroy();
    }
}
