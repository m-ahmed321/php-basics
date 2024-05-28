<?php
require 'core/Middleware/Middleware.php';
class Router
{
    protected $routes = [];
    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'method' => $method,
            'controller' => $controller,
            'middleware' => null
        ];
        return $this;
    }
    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }
    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }
    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);
    }
    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, $controller);
    }
    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);
    }
    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
    }
    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] == $uri && $route['method'] == strtoupper($method)) {
                Middleware::resolve($route['middleware']);
                return include $route['controller'];
            }
        }
        $this->abort();
    }
    protected function abort($code = 404)
    {
        http_response_code($code);
        include "views/$code.php";
        die();
    }
}