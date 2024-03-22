<?php
require_once 'Route.php';

class Router {
    private $routes = [];

    public function __construct()
    {
        $this->addRoute('/', 'Application/Views/home.php');
        $this->addRoute('/home', 'Application/Views/home.php');
        $this->addRoute('/admin', 'Application/Views/admin.php');
        $this->addRoute('/cart', 'Application/Views/cart.php');
        $this->addRoute('/info', 'Application/Views/info.php');
        $this->addRoute('/login', 'Application/Views/login.php');
        $this->addRoute('/signup', 'Application/Views/signup.php');
        $this->addRoute('/products', 'Application/Views/products.php');
        $this->addRoute('/product', 'Application/Views/product.php');
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
        return "404 Not Found";
    }
}