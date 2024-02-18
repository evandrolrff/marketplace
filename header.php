<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-commerce</title>
  <link href=".\Assets\css\bootstrap.min.css" rel="stylesheet">
  <link href="./Assets/css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <?php
        include './Controller/SessionManager.php';

        $session = new SessionManager();
        $content = Utils();
        $session->startSession();
        $array = $session->checkSession("email") ? array('home', 'produtos', 'carrinho') : array('home', 'produtos', 'carrinho', 'login');
        
        foreach ($array as $page) {
          echo "<li class='nav-item'>";
          echo "<a href='index.php?page=index.php&content={$page}'" . abaAtiva(($content === $page)) . " >" . ucfirst($page) . "</a>";
          echo "</li>";
        }

        $flag = $session->checkSession("email");

        if ($flag && $session->sessionHasValue("cargo", "1")) {
          echo "<li class='nav-item'>";
          echo "<a href='index.php?page=index.php&content=admin'". abaAtiva(($content === 'admin')) .">Admin</a></li>";
        } elseif ($flag && $session->sessionHasValue("cargo", "2")) {
          echo "<li class='nav-item'>";
          echo "<a href='index.php?page=index.php&content=info'". abaAtiva(($content === 'info')) .">Info</a></li>";
        }
        ?>

      </ul>
    </header>
  </div>