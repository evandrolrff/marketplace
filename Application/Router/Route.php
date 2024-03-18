<?php

class Route {
    private $pattern;
    private $handler;

    public function __construct(string $pattern, string $handler) 
    {
        $this->pattern = $pattern;
        $this->handler = $handler;
    }

    public function match(string $url) : bool
    {
        return preg_match("#^{$this->pattern}$#", $url);
    }

    public function run(string $url): string
    {
        preg_match("#^{$this->pattern}$#", $url, $matches);
        return $this->handler;
    }
}

?>