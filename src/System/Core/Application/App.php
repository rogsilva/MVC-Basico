<?php

namespace System\Core\Application;

class App
{

    protected $controller = 'Home';

    protected $method = 'index';

    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        if(isset($url[0]) and file_exists("../app/Controllers/".ucfirst($url[0]).".php"))
        {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }

        $newController = "\\App\\Controllers\\{$this->controller}";
        $this->controller = new $newController;

        if(isset($url[1]) and method_exists($this->controller, $url[1]))
        {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    protected function parseUrl()
    {
        if(isset($_GET['url']))
        {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }

        $urlParse = parse_url("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
        return array_values( array_filter( explode('/', filter_var( rtrim($urlParse['path'], '/'), FILTER_SANITIZE_URL))));
    }

}