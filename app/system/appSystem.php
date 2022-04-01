<?php
namespace coding\app\system;

use Dotenv\Dotenv;

class AppSystem{
    public Request $request;
    public Response $response;
    public Router $router;
    public static AppSystem $appSystem;
    
    function __construct()
    {

        
        self::$appSystem=$this;
        $this->request=new Request();
        $this->response=new Response();
        $this->router=new Router($this->request);

    } 
    
    public function start(){
        $this->router->executeRoute();
        

    }
    
}

?>