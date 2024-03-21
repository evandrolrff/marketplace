<div class="container">
    <?php
    $router = new Router();

    if (isset($_SERVER['REQUEST_URI'])) 
    {
        $uri = explode('trabalho', $_SERVER['REQUEST_URI']);
    }

    $uri = $uri[array_key_last($uri)];

    // Gets the request URL
    $url = isset($uri) ? $uri : '/home';

    $response = $router->route($url);

    // Checks if the file exists and includes its contents
    if (file_exists($response)) 
    {
        include($response);
    }
    else
    {
        echo "404 Not Found";
    }
    ?>
</div>