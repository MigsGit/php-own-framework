<?php

namespace App;

use App\Router;
use App\Request;


class Application {

    public Router $router;
    public Request $request;

    public function __construct() {
        $this->request= new Request();
        $this->router = new Router($this->request);
    }

    public function run() {
       $this->router->resolve();
    }
}