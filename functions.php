<?php

function Utils(): string
{
    $pages = array('home', 'products', 'cart', 'login', 'admin', 'info'); 
    $uri = "";
    
    if(isset($_SERVER['REQUEST_URI']))
    {
        $uri = explode('trabalho/', $_SERVER['REQUEST_URI']);
        $uri = $uri[array_key_last($uri)];
    }
    else
    {
        return '';
    }
    
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

function dump_informations($value)
{
    echo "<pre>" . var_dump($value) . "</pre>";
    die();
}

