<?php
require_once 'Route.php';

class Router {
    private array $routes = [];
    private string $route404 = 'Application/Views/404.php';
        
    public function __construct()
    {
        $this->addRoute('/', 'Application/Views/Home.php');
        $this->addRoute('/home', 'Application/Views/Home.php');
        $this->addRoute('/admin', 'Application/Views/Admin.php');
        $this->addRoute('/cart', 'Application/Views/Cart.php');
        $this->addRoute('/info', 'Application/Views/Info.php');
        $this->addRoute('/login', 'Application/Views/Login.php');
        $this->addRoute('/signup', 'Application/Views/Signup.php');
        
        // Products routes
        $this->addRoute('/products', 'Application/Views/Products/Products.php');
        $this->addRoute('/product', 'Application/Views/Products/Product.php');

        // Users routes
        $this->addRoute('/AddNewUser', 'Application/Views/User/UserInformation.php');
    }

    public function addRoute(string $pattern, string $handler): void
    {
        $this->routes[] = new Route($pattern, $handler);
    }

    public function route(string $url): string
    {
        foreach ($this->routes as $route) 
        {
            if ($route->match($url))
            {
                return $route->run($url);
            }
        }

        return $this->route404;
    }

    // private function getAction(string $url): string
    // {
    //     $action = array_shift(explode($this->separatorAction, $url));
    //     return $action;
    // }

    // private function getParams(string $url): array
    // {
    //     $actionIdx = strpos($url, $this->separatorAction);
    //     if ($actionIdx === false)
    //     {
    //         $paramsIdx = strpos()
    //         if()
    //     }
    //     return explode($this->separator);
    // }
}