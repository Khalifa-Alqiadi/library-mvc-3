<?php

namespace coding\app\controllers;


class IndexController extends Controller{
    function list(){
        $this->view('/home');
    }
    function book(){
        $this->view('/book');
    }
    function categories(){
        $this->view('/categories');
    }
    function cart(){
        $this->view('/cart');
    }
    function stepper(){
        $this->view('/stepper');
    }
}

?>