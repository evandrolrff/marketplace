<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-commerce</title>
  <link href="./Assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="./Assets/css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <?php
         require_once 'Application/Configs/SessionManager.php';

        $session = new SessionManager();
        $content = MakeHeader();
        $session->startSession();
        $array = $session->checkSession("email") ? array('home', 'products', 'cart') : array('home', 'products', 'cart', 'login');
      
        foreach ($array as $page) 
        {
          echo "<li class='nav-item'>";
          echo "<a href='{$page}'" . abaAtiva(($content === $page)) . " >" . ucfirst($page) . "</a>";
          echo "</li>";
        }

        $flag = $session->checkSession("email");

        if ($flag && $session->sessionHasValue("role", "1")) 
        {
          echo "<li class='nav-item'>";
          echo "<a href='admin'". abaAtiva(($content === 'admin')) .">Admin</a></li>";
        } 
        elseif ($flag && $session->sessionHasValue("role", "2")) 
        {
          echo "<li class='nav-item'>";
          echo "<a href='info'". abaAtiva(($content === 'info')) .">Info</a></li>";
        }
        ?>

      </ul>
    </header>
  </div>