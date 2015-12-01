<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Greeting extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    /*
       * The configuration is already set in the route configuration
       *
       * @See config/routes.php
       *
       *
       * As declared from the config file,
       * $route['greet/hello'] = "greeting/helloword"; = will call Greeting->helloword method
       * $route['greet/hi'] = "greeting/hi"; = will call Greeting->helloword method
       */
    //if index loaded,
    public function index() {
        //Set the message, use a link to redirect to dynaroute()
        $data['msg'] = 'Hi! You are now in the index, why not go to route: <a href="' . base_url() . 'index.php/greet/hi"> /greet/hi</a>' . '<br /> OR <a href="' . base_url() . 'index.php/greet/hello"> /greet/hello</a>';

        $this->load->view('greeting', $data);
        //Loads the view/greeting.php

    }

    //Route will call helloword() if the URI is /greet/hello
    public function helloword() {

        //set the message
        $data['msg'] = "Hello there! You are now in controller Greeting, method helloword() ".'<a href="' . base_url() . 'index.php/greeting">Back</a>';

        //Loads the view/greeting.php
        $this->load->view('greeting', $data);

    }

    //Route will call hiword() if the URI is /greet/hi
    public function hiword() {
        //set the message
        $data['msg'] = "Hi there! You are now in controller Greeting, method hiword() ".'<a href="' . base_url() . 'index.php/greeting">Back</a>';

        //Loads the view/greeting.php
        $this->load->view('greeting', $data);

    }

}
