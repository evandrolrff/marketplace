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
        
        // Products routes
        $this->addRoute('/products', 'Application/Views/Products/Products.php');
        $this->addRoute('/product', 'Application/Views/Products/Product.php');
        
        // Users routes
        $this->addRoute('/signup', 'Application/Views/User/Signup.php');
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

    public function get()
    {

        
    }

    public function post()
    {

    }

    public function delete()
    {

    }

    public function patch()
    {

    }

    public function put()
    {
        
    }
}