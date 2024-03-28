<?php

function MakeHeader(): string
{
    $pages = array('home', 'products', 'cart', 'login', 'admin', 'info'); 
    
    $uri = get_url();

    if ($uri == '' || $uri == '/') 
        return $uri;
    
    $uri = substr($uri, 1);
    $page = in_array($uri, $pages)? $uri : 'home';
    return $page;
}

function abaAtiva(bool $flag): string
{
    if($flag)
    {
        return "class='nav-link active' aria-current='page'";
    } 
    else
    {
        return "class='nav-link'";
    }
}

function get_url(): string
{
    if(isset($_SERVER['REQUEST_URI']))
    {
        $uri = explode('trabalho', $_SERVER['REQUEST_URI']);
        $uri = $uri[array_key_last($uri)];
        return $uri;
    }
    else
    {
        return '';
    }
}

function dump_informations(array $value): void
{
    echo "<pre>" . var_dump($value) . "</pre>";
    die();
}

