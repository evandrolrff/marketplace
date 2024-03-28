<div class="container">
    <?php
    $router = new Router();

    $url = get_url();

    $response = $router->route($url);

    if (file_exists($response)) 
    {
        include($response);
    }
    else
    {
        include($response);
        http_response_code(404);
    }
    ?>
</div>